<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    // Função para carregar o conteúdo de um arquivo JSON dentro da pasta "storage/app/dados"
    private function carregarJson($arquivo)
    {
        $path = storage_path("app/dados/$arquivo");
        return json_decode(file_get_contents($path), true);
    }

    // Retorna a lista de instituições no formato "id => nome"
    public function listarInstituicoes()
    {
        $dados = $this->carregarJson('instituicoes.json');
        $resposta = [];

        foreach ($dados as $item) {
            $resposta[$item['id']] = $item['nome'];
        }

        return response()->json($resposta);
    }

    // Retorna a lista de convênios no formato "id => nome"
    public function listarConvenios()
    {
        $dados = $this->carregarJson('convenios.json');
        $resposta = [];

        foreach ($dados as $item) {
            $resposta[$item['id']] = $item['nome'];
        }

        return response()->json($resposta);
    }

    // Realiza a simulação do empréstimo com base nos filtros informados
    public function simularEmprestimo(Request $request)
    {
        // Validação dos parâmetros enviados no corpo da requisição
        $data = $request->validate([
            'valor_emprestimo' => 'required|numeric',
            'institucoes' => 'array',
            'convenios' => 'array',
            'parcela' => 'numeric'
        ]);

        $valor = $data['valor_emprestimo'];
        $filtroInstituicoes = $data['institucoes'] ?? [];
        $filtroConvenios = $data['convenios'] ?? [];
        $filtroParcela = $data['parcela'] ?? null;

        // Carrega os arquivos JSON com os dados
        $taxas = $this->carregarJson('taxas.json');
        $instituicoes = collect($this->carregarJson('instituicoes.json'))->keyBy('id');
        $convenios = collect($this->carregarJson('convenios.json'))->keyBy('id');

        $resultados = [];

        // Percorre as taxas cadastradas
        foreach ($taxas as $taxa) {
            // Aplica os filtros, se forem informados
            if (
                (!empty($filtroInstituicoes) && !in_array($taxa['instituicao_id'], $filtroInstituicoes)) ||
                (!empty($filtroConvenios) && !in_array($taxa['convenio_id'], $filtroConvenios)) ||
                ($filtroParcela && $filtroParcela != $taxa['parcela'])
            ) {
                continue;
            }

            // Calcula o valor da parcela usando o coeficiente
            $valorParcela = round($valor * $taxa['coeficiente'], 2);
            $valorTotal = round($valorParcela * $taxa['parcela'], 2);

            // Adiciona o resultado ao array agrupado pela instituição
            $resultados[$taxa['instituicao_id']][] = [
                'parcelas' => $taxa['parcela'],
                'valor_parcela' => $valorParcela,
                'valor_total' => $valorTotal,
                'taxa' => $taxa['taxa_juros'],
                'convenio' => $convenios[$taxa['convenio_id']]['nome'] ?? 'Desconhecido'
            ];
        }

        // Organiza a resposta final agrupando pelo nome da instituição
        $saida = [];
        foreach ($resultados as $idInst => $simulacoes) {
            $saida[$instituicoes[$idInst]['nome']] = $simulacoes;
        }

        return response()->json($saida);
    }
}



# 💰 Simulador de Empréstimo - API REST (Laravel)

Este projeto é uma API REST desenvolvida em PHP com o framework Laravel para simulação de empréstimos.

A API permite que aplicações web e mobile consultem instituições, convênios e simulem empréstimos com base em um valor desejado, número de parcelas e taxas de juros informadas via arquivos JSON.

---

## 🛠️ Tecnologias Utilizadas

- PHP 8.1
- Laravel 10
- Postman (para testes)
- Arquivos JSON (sem banco de dados)

---

## 📂 Estrutura dos Dados

Todos os dados são carregados a partir da pasta:

```
storage/app/dados/
```

- `instituicoes.json`: instituições financeiras
- `convenios.json`: convênios associados
- `taxas.json`: taxas de juros, parcelas e coeficientes

---

## 🚀 Como Executar o Projeto

### 1. Instalar dependências

```bash
composer install
```

### 2. Rodar o servidor Laravel

```bash
php artisan serve
```

A aplicação estará disponível em:  
http://127.0.0.1:8000

---

## 📮 Endpoints da API

### ✅ Listar Instituições

`GET /api/instituicoes`

Retorna no formato:

```json
{
  "237": "Bradesco",
  "623": "Banco pan"
}
```

---

### ✅ Listar Convênios

`GET /api/convenios`

Retorna no formato:

```json
{
  "237": "BDMG",
  "623": "SIAPE"
}
```

---

### ✅ Simular Empréstimo

`POST /api/simulacoes`

#### Payload (JSON)

```json
{
  "valor_emprestimo": 2000,
  "institucoes": [237],
  "convenios": [237],
  "parcela": 24
}
```

- `valor_emprestimo`: obrigatório
- `institucoes`: opcional (array de IDs)
- `convenios`: opcional (array de IDs)
- `parcela`: opcional (numérico)

#### Exemplo de Resposta

```json
{
  "Bradesco": [
    {
      "parcelas": 24,
      "valor_parcela": 487.72,
      "valor_total": 11705.28,
      "taxa": 1.3,
      "convenio": "BDMG"
    }
  ]
}
```

---

## 🧮 Cálculo da Simulação

A fórmula usada é:

```
valor_parcela = valor_emprestimo × coeficiente
valor_total = valor_parcela × número_de_parcelas
```

---

## 🧪 Testes com Postman

A collection de testes está neste repositório em:

```
SimuladorEmprestimoCollectionBradesco_Pan.json
```

Basta importar no Postman e testar os endpoints.

---

## 📝 Observações

- Projeto sem banco de dados
- Toda a lógica está contida no controller
- Dados simulados lidos diretamente de arquivos JSON
- API 100% em português e documentada

---

Desenvolvido como solução para teste técnico de backend.
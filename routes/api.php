<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmprestimoController;

/*
|--------------------------------------------------------------------------
| Rotas da API
|--------------------------------------------------------------------------
|
| Aqui estão definidas as rotas que serão utilizadas pela aplicação web
| e mobile para simular empréstimos com base nos dados fornecidos.
|
*/

// Rota para listar instituições financeiras disponíveis
Route::get('/instituicoes', [EmprestimoController::class, 'listarInstituicoes']);

// Rota para listar convênios disponíveis
Route::get('/convenios', [EmprestimoController::class, 'listarConvenios']);

// Rota para simular empréstimos com base no valor e filtros
Route::post('/simulacoes', [EmprestimoController::class, 'simularEmprestimo']);

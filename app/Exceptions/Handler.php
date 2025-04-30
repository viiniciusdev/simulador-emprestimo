<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Lista de campos que nunca serão armazenados na sessão
     * quando ocorrerem erros de validação.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Registra os callbacks para tratamento de exceções na aplicação.
     *
     * Aqui você pode definir ações personalizadas para relatar ou
     * lidar com exceções lançadas durante a execução da aplicação.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            // Você pode registrar ações de log aqui
        });
    }
}
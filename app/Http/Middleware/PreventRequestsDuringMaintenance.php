<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * URIs que devem continuar acessíveis enquanto
     * o modo de manutenção estiver ativado.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}

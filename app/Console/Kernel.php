<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define a programação de comandos agendados da aplicação.
     *
     * Este método permite definir comandos que serão executados
     * automaticamente em determinados horários.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Registra os comandos personalizados da aplicação.
     *
     * Aqui são carregados comandos localizados em "app/Console/Commands"
     * e também o arquivo de rotas de console.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

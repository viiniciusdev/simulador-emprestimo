<?php

/*
|--------------------------------------------------------------------------
| Crie a Aplicação
|--------------------------------------------------------------------------
|
| A primeira coisa que faremos é criar uma nova instância da aplicação
| Laravel, que serve como a "cola" para todos os componentes do Laravel,
| e é o container IoC que conecta todas as partes do sistema.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Vincule Interfaces Importantes
|--------------------------------------------------------------------------
|
| Em seguida, precisamos vincular algumas interfaces importantes no
| container para que possamos resolvê-las quando necessário. Os kernels
| servem as requisições recebidas pela aplicação, tanto da web quanto do CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Retorne a Aplicação
|--------------------------------------------------------------------------
|
| Este script retorna a instância da aplicação. A instância é passada
| para o script que a chamou, permitindo que a construção da aplicação
| seja separada da execução real e do envio das respostas.
|
*/

return $app;

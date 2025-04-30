<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Nome da Aplicação
    |--------------------------------------------------------------------------
    |
    | Este valor é o nome da sua aplicação. Ele será utilizado quando o
    | framework precisar exibir o nome da aplicação em notificações ou
    | em qualquer outro lugar exigido pela aplicação ou por pacotes.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Ambiente da Aplicação
    |--------------------------------------------------------------------------
    |
    | Este valor determina o "ambiente" em que sua aplicação está rodando
    | atualmente. Isso pode influenciar como você configura vários serviços.
    | Defina isso no seu arquivo ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Modo de Depuração da Aplicação
    |--------------------------------------------------------------------------
    |
    | Quando sua aplicação está no modo de depuração, mensagens de erro
    | detalhadas com rastreamento de pilha serão mostradas em cada erro.
    | Se estiver desativado, será exibida uma página de erro genérica.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL da Aplicação
    |--------------------------------------------------------------------------
    |
    | Esta URL é usada pela linha de comando do Artisan para gerar URLs.
    | Você deve defini-la para o endereço base da sua aplicação, para
    | que seja usada nas tarefas do Artisan, por exemplo.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Fuso Horário da Aplicação
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar o fuso horário padrão da sua aplicação,
    | que será utilizado pelas funções de data e hora do PHP. Já está
    | definido um valor padrão sensato para você.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Localização Padrão da Aplicação
    |--------------------------------------------------------------------------
    |
    | A localização determina o idioma padrão que será usado pelo serviço
    | de tradução. Você pode mudar esse valor para qualquer idioma que
    | sua aplicação suporte.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Localização Alternativa da Aplicação
    |--------------------------------------------------------------------------
    |
    | A localização alternativa será usada caso a localização atual não esteja
    | disponível. Você pode alterar para qualquer pasta de idioma existente.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Localização do Faker
    |--------------------------------------------------------------------------
    |
    | Essa configuração define qual idioma o Faker utilizará ao gerar dados
    | falsos em seeders. Por exemplo, números de telefone e endereços localizados.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Chave de Criptografia
    |--------------------------------------------------------------------------
    |
    | Esta chave é usada pelo serviço de criptografia do Laravel. Ela deve ser
    | uma string aleatória de 32 caracteres. Defina-a antes de fazer deploy!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Driver do Modo de Manutenção
    |--------------------------------------------------------------------------
    |
    | Estas opções definem qual driver será usado para controlar o modo de
    | manutenção do Laravel. O driver "cache" permite controle em múltiplas máquinas.
    |
    | Drivers suportados: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store' => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Service Providers Autocarregados
    |--------------------------------------------------------------------------
    |
    | Os service providers listados aqui serão carregados automaticamente em
    | cada requisição à sua aplicação. Você pode adicionar os seus próprios
    | para expandir a funcionalidade conforme necessário.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Service Providers de Pacotes...
         */

        /*
         * Service Providers da Aplicação...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Apelidos de Classes
    |--------------------------------------------------------------------------
    |
    | Este array de apelidos de classes será registrado ao iniciar a aplicação.
    | Você pode registrar quantos desejar. Os apelidos são carregados sob demanda,
    | então não afetam a performance.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Configurações Padrão de Autenticação
    |--------------------------------------------------------------------------
    |
    | Esta opção controla o "guard" de autenticação e as opções de redefinição
    | de senha padrão da sua aplicação. Você pode alterar esses valores
    | conforme necessário, mas são um ótimo ponto de partida para a maioria.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards de Autenticação
    |--------------------------------------------------------------------------
    |
    | Aqui você pode definir todos os guards de autenticação da sua aplicação.
    | Uma configuração padrão que utiliza armazenamento de sessão e o
    | provedor de usuários baseado no Eloquent já foi definida para você.
    |
    | Todos os drivers de autenticação possuem um provedor de usuários.
    | Isso define como os usuários são recuperados do banco de dados ou
    | de outros mecanismos de armazenamento utilizados pela aplicação.
    |
    | Suportados: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Provedores de Usuários
    |--------------------------------------------------------------------------
    |
    | Todos os drivers de autenticação possuem um provedor de usuários.
    | Isso define como os usuários são realmente recuperados do banco de dados
    | ou de outro armazenamento utilizado pela aplicação para persistir dados.
    |
    | Se você tiver múltiplas tabelas ou modelos de usuários, poderá configurar
    | múltiplas fontes representando cada modelo/tabela. Essas fontes podem
    | ser atribuídas a qualquer guard adicional que você definir.
    |
    | Suportados: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Redefinição de Senhas
    |--------------------------------------------------------------------------
    |
    | Você pode especificar múltiplas configurações de redefinição de senha
    | se tiver mais de uma tabela/modelo de usuários e quiser definir
    | regras diferentes para cada tipo de usuário.
    |
    | O tempo de expiração define quantos minutos o token de redefinição
    | de senha será considerado válido. Isso ajuda a manter a segurança.
    |
    | A configuração de "throttle" define quantos segundos o usuário deve
    | aguardar antes de solicitar outro token de redefinição de senha.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tempo de Expiração da Confirmação de Senha
    |--------------------------------------------------------------------------
    |
    | Aqui você pode definir a quantidade de segundos antes que a confirmação
    | de senha expire, exigindo que o usuário insira novamente sua senha
    | na tela de confirmação. O padrão é de três horas.
    |
    */

    'password_timeout' => 10800,

];

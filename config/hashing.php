<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Driver de Hash Padrão
    |--------------------------------------------------------------------------
    |
    | Esta opção controla o driver de hash padrão que será utilizado para
    | hashear senhas na sua aplicação. Por padrão, o algoritmo bcrypt é
    | usado; no entanto, você pode modificar esta opção se desejar.
    |
    | Suportado: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => 'bcrypt',

    /*
    |--------------------------------------------------------------------------
    | Opções do Bcrypt
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar as opções de configuração que devem ser
    | usadas quando senhas forem hasheadas usando o algoritmo Bcrypt.
    | Isso permite controlar o tempo de processamento do hash.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 12),
        'verify' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Opções do Argon
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar as opções de configuração que devem ser
    | usadas quando senhas forem hasheadas usando o algoritmo Argon.
    | Isso permite controlar o tempo de processamento do hash.
    |
    */

    'argon' => [
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
        'verify' => true,
    ],

];

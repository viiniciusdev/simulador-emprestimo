<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Disco de Arquivos Padrão
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar o disco de arquivos padrão que deve ser usado
    | pelo framework. O disco "local", assim como uma variedade de discos
    | baseados em nuvem, estão disponíveis para sua aplicação. Armazene à vontade!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Discos de Arquivos
    |--------------------------------------------------------------------------
    |
    | Aqui você pode configurar quantos "discos" de arquivos desejar, e até mesmo
    | configurar múltiplos discos com o mesmo driver. Valores padrão foram
    | definidos para cada driver como exemplo dos valores requeridos.
    |
    | Drivers suportados: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Links Simbólicos
    |--------------------------------------------------------------------------
    |
    | Aqui você pode configurar os links simbólicos que serão criados quando o
    | comando Artisan `storage:link` for executado. As chaves do array devem
    | ser os locais dos links e os valores devem ser os seus alvos.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];

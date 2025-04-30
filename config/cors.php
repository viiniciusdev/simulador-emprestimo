<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Configuração de Compartilhamento de Recursos entre Origens (CORS)
    |--------------------------------------------------------------------------
    |
    | Aqui você pode configurar suas definições para o compartilhamento de
    | recursos entre origens (CORS). Isso determina quais operações entre
    | origens podem ser executadas nos navegadores. Fique à vontade para
    | ajustar essas configurações conforme necessário.
    |
    | Para saber mais: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'], // Métodos HTTP permitidos (ex: GET, POST)

    'allowed_origins' => ['*'], // Origens permitidas (ex: https://example.com)

    'allowed_origins_patterns' => [], // Padrões de origens permitidas via regex

    'allowed_headers' => ['*'], // Cabeçalhos permitidos nas requisições

    'exposed_headers' => [], // Cabeçalhos expostos na resposta

    'max_age' => 0, // Tempo em segundos que a resposta pode ser armazenada em cache pelo navegador

    'supports_credentials' => false, // Define se as credenciais (cookies, headers de autenticação) são permitidas

];

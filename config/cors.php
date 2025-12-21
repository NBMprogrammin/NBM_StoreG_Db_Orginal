<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],
    
    'allowed_methods' => ['*'],
    
    'allowed_origins' => [
        'http://localhost:5173', 
        'http://127.0.0.1:8000', 
        'https://nbmprogrammin.github.io',
        'https://nbmstoreg-h11cy5f5a-nbmprogrammins-projects.vercel.app'
    ],
    
    'allowed_headers' => ['*'],
    
    'exposed_headers' => [],
    
    'max_age' => 0,
    
    'supports_credentials' => true,

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout', 'bss/*'],
    
    'supports_credentials' => true,
    
];
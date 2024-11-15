<?php 
return [

'paths' => ['api/*'], // API routes

'allowed_methods' => ['*'], // All methods (GET, POST, PUT, DELETE)

'allowed_origins' => ['*'],


'allowed_headers' => [
    'Content-Type',
    'X-Requested-With', 
    'Authorization',
],

'exposed_headers' => [],

'max_age' => 0,

'supports_credentials' => true, // If using cookies or JWT tokens
];

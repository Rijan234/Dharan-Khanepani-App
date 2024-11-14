<?php 
return [

'paths' => ['api/*'], // API routes

'allowed_methods' => ['*'], // All methods (GET, POST, PUT, DELETE)

'allowed_origins' => [
    'http://localhost:3000',  // Local development for mobile apps
    'https://yourapp.com',    // Your production domain
],

'allowed_headers' => [
    'Content-Type',
    'Authorization',
],

'exposed_headers' => [],

'max_age' => 0,

'supports_credentials' => true, // If using cookies or JWT tokens
];

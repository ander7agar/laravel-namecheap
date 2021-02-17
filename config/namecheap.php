<?php

return [
    'apiUser' => env('NC_API_USER', 'username'),
    'apiKey' => env('NC_API_KEY', 'key'),
    'clientIp' => env('NC_API_CLIENT_IP', '127.0.0.1'),
    'enableSandbox' => env('NC_API_SANDBOX', true),
    'returnType' => 'json',
];
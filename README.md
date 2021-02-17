# Namecheap Api for Laravel
[![Latest Stable Version](https://poser.pugx.org/gotcreations/laravel-namecheap/v)](//packagist.org/packages/gotcreations/laravel-namecheap) [![Total Downloads](https://poser.pugx.org/gotcreations/laravel-namecheap/downloads)](//packagist.org/packages/gotcreations/laravel-namecheap) [![Latest Unstable Version](https://poser.pugx.org/gotcreations/laravel-namecheap/v/unstable)](//packagist.org/packages/gotcreations/laravel-namecheap) [![License](https://poser.pugx.org/gotcreations/laravel-namecheap/license)](//packagist.org/packages/gotcreations/laravel-namecheap)


### Installation
```shell
composer require gotcreations/laravel-namecheap
```

### The provider
The service provider class is is registered automatically in a Laravel project.

### Configuration
Get your config file
```shell
php artisan vendor:publish --provider="GotCreations\Namecheap\NamecheapServiceProvider" --tag="config"
```
File `config/namecheap.php`
```php
<?php

return [
    'apiUser' => env('NC_API_USER', 'username'), //Your namecheap username
    'apiKey' => env('NC_API_KEY', 'key'), //Your namecheap API Key
    'clientIp' => env('NC_API_CLIENT_IP', '127.0.0.1'),
    'enableSandbox' => env('NC_API_SANDBOX', true), //For production env disable it
    'returnType' => 'json', //Or xml
];
```
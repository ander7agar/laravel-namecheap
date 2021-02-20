# Namecheap Api for Laravel
[![Latest Stable Version](https://poser.pugx.org/gotcreations/laravel-namecheap/v)](//packagist.org/packages/gotcreations/laravel-namecheap) 
[![Total Downloads](https://poser.pugx.org/gotcreations/laravel-namecheap/downloads)](//packagist.org/packages/gotcreations/laravel-namecheap) 
[![Latest Unstable Version](https://poser.pugx.org/gotcreations/laravel-namecheap/v/unstable)](//packagist.org/packages/gotcreations/laravel-namecheap) 
[![License](https://poser.pugx.org/gotcreations/laravel-namecheap/license)](//packagist.org/packages/gotcreations/laravel-namecheap)


### Installation
```shell
composer require gotcreations/laravel-namecheap
```

### The provider
The service provider class is registered automatically in a Laravel project.

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
    'returnType' => 'json', //Or array, xml, string 
];
```

### LICENSE
```
Copyright 2021 Andersson Acosta

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```
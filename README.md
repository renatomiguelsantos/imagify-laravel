# imagify-laravel
Laravel integration for the imagify.io API

It is a wrap around the official PHP library from imagify.io
https://github.com/wp-media/imagify-php


## Installation

Require this package with composer.

```shell
composer require renatomiguelsantos/imagify-laravel
```

Copy the package config to your local config with the publish command:

```shell
php artisan vendor:publish --provider="Imagify\Laravel\ServiceProvider"
```

And set an env variable `IMAGIFY_APIKEY` with your imagify.io api key.

## Usage
```php
use Imagify;

$handle = Imagify::optimize('path_to_image', [
    'level' => 'ultra',
    'resize' => [
        'width' => '1560',
    ],
]);

if (true === $handle->success) {
    $contents = file_get_contents($handle->image);
}
```

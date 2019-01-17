# Admin LTE
Laravel package Admin Lte

## Installation

Require this package with composer.

```shell
composer require mark-villudo/admin-lte
```


## Usage
//Add to config/app.php
```
MarkVilludo\AdminLte\ServiceProvider::class,
```

## Installation

//Publish public ``assets``

```
php artisan vendor:publish --provider="MarkVilludo\AdminLte\ServiceProvider" --tag="assets"
```

//Publish initial views.
```
php artisan vendor:publish --provider="MarkVilludo\AdminLte\ServiceProvider" --tag="views"
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


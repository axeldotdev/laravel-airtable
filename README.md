<h1><center>Laravel Airtable</center></h1>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/axeldotdev/laravel-airtable.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/laravel-airtable)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/axeldotdev/laravel-airtable/run-tests?label=tests)](https://github.com/axeldotdev/laravel-airtable/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/axeldotdev/laravel-airtable/Check%20&%20fix%20styling?label=code%20style)](https://github.com/axeldotdev/laravel-airtable/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/axeldotdev/laravel-airtable.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/laravel-airtable)
[![License](https://img.shields.io/packagist/l/axeldotdev/laravel-airtable.svg?style=flat-square)](https://packagist.org/packages/axeldotdev/laravel-airtable)

Laravel Airtable allows you to import your Airtable data into your Laravel database.

------

## Installation

You can install the package via composer:

```bash
composer require --dev axeldotdev/laravel-airtable
```

The minimum PHP version required is **8.1**.

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-airtable-config"
```

## Usage

### Create an export class

You can create an export class with the command below:

```bash
php artisan airtable:export PostExport
```

Next, you can use this export class in your controller or command like this:

```php
use Axeldotdev\LaravelAirtable\Facades\Airtable;
use App\Airtable\Exports\PostExport;

$base_id = 'shdbvc67jbdsc67';
$view_name = 'View Grid';

Airtable::export(new PostExport(), $base_id, $view_name);
```

### Create an import class

You can create an import class with the command below:

```bash
php artisan airtable:import PostImport
```

Next, you can use this import class in your controller or command like this:

```php
use Axeldotdev\LaravelAirtable\Facades\Airtable;
use App\Airtable\Imports\PostImport;

$base_id = 'shdbvc67jbdsc67';
$view_name = 'View Grid';

Airtable::import(new PostImport(), $base_id, $view_name);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Axel Charpentier](https://github.com/axeldotdev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

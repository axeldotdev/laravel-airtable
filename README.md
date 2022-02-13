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
composer require axeldotdev/laravel-airtable
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="AxelDotDev\LaravelAirtable\LaravelAirtableServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    'uri' => 'https://api.airtable.com/v0/',

    /*
    |--------------------------------------------------------------------------
    | Airtable Key
    |--------------------------------------------------------------------------
    |
    | This value can be found in your Airtable account page:
    | https://airtable.com/account
    |
     */
    'key' => env('AIRTABLE_KEY'),
];
```

## Documentation

In progress 🚧

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

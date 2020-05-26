# Symfony Cache for PoP

<!--
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
-->

Implementation of the contracts for caching through Symfony Cache

## Install

Via Composer

``` bash
$ composer require getpop/cache-symfony
```

## Usage

Initialize the component:

``` php
\PoP\Root\ComponentLoader::initializeComponents([
    \PoP\SymfonyCache\Component::class,
]);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email leo@getpop.org instead of using the issue tracker.

## Credits

- [Leonardo Losoviz][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
<!--
[ico-version]: https://img.shields.io/packagist/v/getpop/cache-symfony.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/getpop/cache-symfony/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/getpop/cache-symfony.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/getpop/cache-symfony.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/getpop/cache-symfony.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/getpop/cache-symfony
[link-travis]: https://travis-ci.org/getpop/cache-symfony
[link-scrutinizer]: https://scrutinizer-ci.com/g/getpop/cache-symfony/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/getpop/cache-symfony
[link-downloads]: https://packagist.org/packages/getpop/cache-symfony
[link-contributors]: ../../contributors
-->

[link-author]: https://github.com/leoloso

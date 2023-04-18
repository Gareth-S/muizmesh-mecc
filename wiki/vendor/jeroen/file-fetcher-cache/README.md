# FileFetcher Cache

[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/JeroenDeDauw/file-fetcher-cache/CI)](https://github.com/JeroenDeDauw/file-fetcher-cache/actions?query=workflow%3ACI)
[![Code Coverage](https://scrutinizer-ci.com/g/JeroenDeDauw/file-fetcher-cache/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/JeroenDeDauw/file-fetcher-cache/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/JeroenDeDauw/file-fetcher-cache/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/JeroenDeDauw/file-fetcher-cache/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/jeroen/file-fetcher-cache/version.png)](https://packagist.org/packages/jeroen/file-fetcher-cache)
[![Download count](https://poser.pugx.org/jeroen/file-fetcher-cache/d/total.png)](https://packagist.org/packages/jeroen/file-fetcher-cache)

Provides simple caching [decorators](https://en.wikipedia.org/wiki/Decorator_pattern)
for [FileFetcher](https://github.com/JeroenDeDauw/FileFetcher) implementations.

## Usage

The FileFetcher decorators are constructed via [`FileFetcher\Cache\Factory`](src/Factory.php).

* `$factory->newCachingFetcher()`: Caches file contents via [PSR-16 SimpleCache](https://www.php-fig.org/psr/psr-16/)
* `$factory->newJeroenSimpleCacheFetcher()`: Caches file contents via [jeroen/simple-cache](https://github.com/JeroenDeDauw/SimpleCache)

Once you constructed a FileFetcher, fetching a file is easy:

```php
$fileContent = $fileFetcher->fetchFile($fileLocation);
```

To test your code you can use all the test doubles provided by [FileFetcher](https://github.com/JeroenDeDauw/FileFetcher) itself.

## Installation

To use the FileFetcher Cache library in your project, simply add a dependency on jeroen/file-fetcher-cache
to your project's `composer.json` file. Here is a minimal example of a `composer.json`
file that just defines a dependency on FileFetcher Cache 1.x:

```json
{
    "require": {
        "jeroen/file-fetcher-cache": "~1.0"
    }
}
```

## Development

Start by installing the project dependencies by executing

    composer update

You can run the tests by executing

    make test
    
You can run the style checks by executing

    make cs
    
To run all CI checks, execute

    make ci
    
You can also invoke PHPUnit directly to pass it arguments, as follows

    vendor/bin/phpunit --filter SomeClassNameOrFilter

## Release notes

### 1.0.1 (2020-08-19)

* Updated attribution in composer.json

### 1.0.0 (2019-01-17)

Initial release with decorators for PSR-16 SimpleCache and jeroen/simple-cache.
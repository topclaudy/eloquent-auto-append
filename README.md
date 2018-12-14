Eloquent Auto Append
====================

**Eloquent Auto Append** automatically appends your [accessors](https://laravel.com/docs/5.7/eloquent-mutators#accessors-and-mutators) to model serialization without having you to explicitly specify them in the `$appends` array.

#### Related discussions:

* [How to always append attributes to Laravel Eloquent model?](https://stackoverflow.com/questions/35701538/how-to-always-append-attributes-to-laravel-eloquent-model)
* [Why is my Laravel Eloquent accessor not showing up in the response?](https://stackoverflow.com/questions/47872233/why-is-my-laravel-eloquent-accessor-not-showing-up-in-the-response)

## Installation

The recommended way to install **Eloquent Auto Append** is through [Composer](http://getcomposer.org/)

```bash
$ composer require awobaz/eloquent-auto-append
```

> **Note:** **Eloquent Auto Append** requires Laravel 5.4+.

## Usage

### Using the `Awobaz\AutoAppend\Database\Eloquent\Model` class

Simply make your model class derive from the `Awobaz\AutoAppend\Database\Eloquent\Model` base class. The `Awobaz\AutoAppend\Database\Eloquent\Model` extends the `Eloquent` base class without changing its core functionality.

### Using the `Awobaz\AutoAppend\AutoAppend` trait

If for some reasons you can't derive your models from `Awobaz\AutoAppend\Database\Eloquent\Model`, you may take advantage of the `Awobaz\AutoAppend\AutoAppend` trait. Simply use the trait in your models.

### Disable Auto Append

You may disable Auto Append on a model by setting it's property `$autoAppend` to `false` 

```php
protected $autoAppend = false;
```

## Contributing

Please read [CONTRIBUTING.md](https://github.com/topclaudy/eloquent-auto-append/blob/master/CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/topclaudy/eloquent-auto-append/tags).

## Unit Tests

In order to run the test suite, install the development dependencies:

```bash
$ composer install --dev
```

Then, run the following command:

```bash
$ vendor/bin/phpunit
```

## Authors

* [Claudin J. Daniel](https://github.com/topclaudy) - *Initial work*

## Sponsored by

* [Awobaz](https://awobaz.com) - Web/Mobile agency based in Montreal, Canada

## License

**Eloquent Auto Append** is licensed under the [MIT License](http://opensource.org/licenses/MIT).
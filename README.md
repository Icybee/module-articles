# Articles

[![Release](https://img.shields.io/packagist/v/icybee/module-articles.svg)](https://packagist.org/packages/icybee/module-articles)
[![Build Status](https://img.shields.io/travis/Icybee/module-articles/master.svg)](http://travis-ci.org/Icybee/module-articles)
[![HHVM](https://img.shields.io/hhvm/icybee/module-articles.svg)](http://hhvm.h4cc.de/package/icybee/module-articles)
[![Code Quality](https://img.shields.io/scrutinizer/g/Icybee/module-articles/master.svg)](https://scrutinizer-ci.com/g/Icybee/module-articles)
[![Code Coverage](https://img.shields.io/coveralls/Icybee/module-articles/master.svg)](https://coveralls.io/r/Icybee/module-articles)
[![Packagist](https://img.shields.io/packagist/dt/icybee/module-articles.svg)](https://packagist.org/packages/icybee/module-articles)

The Articles module (`articles`) introduces the "Articles" content type to the CMS
[Icybee](http://icybee.org). Together with the [Comments](https://github.com/Icybee/module-comments)
module (`comments`) they provide enough features to start a blog.





----------





## Requirements

The package requires PHP 5.5 or later.





## Installation

The recommended way to install this package is through [Composer](http://getcomposer.org/):

```
$ composer require icybee/module-articles
```





### Cloning the repository

The package is [available on GitHub](https://github.com/Icybee/module-articles), its repository can be
cloned with the following command line:

	$ git clone https://github.com/Icybee/module-articles.git articles





## Documentation

The documentation for the package and its dependencies can be generated with the `make doc`
command. The documentation is generated in the `docs` directory using [ApiGen](http://apigen.org/).
The package directory can later by cleaned with the `make clean` command.





## Testing

The test suite is ran with the `make test` command. [PHPUnit](https://phpunit.de/) and [Composer](http://getcomposer.org/) need to be globally available to run the suite. The command installs dependencies as required. The `make test-coverage` command runs test suite and also creates an HTML coverage report in "build/coverage". The directory can later be cleaned with the `make clean` command.

The package is continuously tested by [Travis CI](http://about.travis-ci.org/).

[![Build Status](https://img.shields.io/travis/Icybee/module-articles/master.svg)](https://travis-ci.org/Icybee/module-articles)
[![Code Coverage](https://img.shields.io/coveralls/Icybee/module-articles/master.svg)](https://coveralls.io/r/Icybee/module-articles)





## License

**icybee/module-articles** is licensed under the New BSD License. See the [LICENSE](LICENSE) file for details.

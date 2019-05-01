# Password

Simple Password Generator

## Installation

You can install the package via composer:

```bash
composer require codecoffeecreative/password
```

## Usage

#### Generate a password

``` php
$password = new CodeCoffeeCreative\Password\Password();

// Generate
$password->generate();

// Setup
$password
	->setLength(8)
	->setUppercase(true)
	->setLowercasecase(false)
	->setNumber(true)
	->setSymbol(true);
$password->generate();

// Setup uppercase characters
$password->setUppercaseCharacters('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
$password->generate();

// Setup lowercase characters
$password->setLowercaseCharacters('abcdefghijklmnopqrstuvwxyz');
$password->generate();

// Setup number characters
$password->setUppercaseCharacters('1234567890');
$password->generate();

// Setup symbol characters
$password->setUppercaseCharacters(' !"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~');
$password->generate();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email wahyu@codecoffeecreative.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

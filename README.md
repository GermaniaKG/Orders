# Germania KG · Orders


[![Packagist](https://img.shields.io/packagist/v/germania-kg/orders.svg?style=flat)](https://packagist.org/packages/germania-kg/orders)
[![PHP version](https://img.shields.io/packagist/php-v/germania-kg/orders.svg)](https://packagist.org/packages/germania-kg/orders)
[![Build Status](https://img.shields.io/travis/GermaniaKG/Orders.svg?label=Travis%20CI)](https://travis-ci.org/GermaniaKG/Orders)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GermaniaKG/Orders/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Orders/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/GermaniaKG/Orders/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Orders/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/GermaniaKG/Orders/badges/build.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/Orders/build-status/master)



## Installation with Composer

```bash
$ composer require germania-kg/orders
```

## Interfaces

### OrderNumberProviderInterface

```php
public function getOrderNumber()
```

### OrderNumberAwareInterface

```php
extends OrderNumberProviderInterface
public function setOrderNumber( $order_number )
```

## Traits

### OrderNumberProviderTrait

Objects using this trait will provide a `order_number` attribute and a `getOrderNumber` getter method, as outlined here:

```php
public $order_number;
public function getOrderNumber()
```


### OrderNumberAwareTrait

Objects using this trait will provide anything that **OrderNumberProviderTrait** provides, and additionally a setter method `setOrderNumber` which accepts anything; if **OrderNumberProviderInterface** given here, *getOrderNumber* method will be called to obtain the ID to use. Roughly outlined:

```php
use OrderNumberProviderTrait;
public function setOrderNumber( $order_number )
```

## Examples
```php
<?php
use Germania\Orders\OrderNumberProviderInterface;
use Germania\Orders\OrderNumberProviderTrait;

class MyOrder implements OrderNumberProviderInterface
{
	use OrderNumberProviderTrait;
	
	public function __construct( order_number )
	{
		$this->order_number = order_number;
	}
}

$order = new MyOrder( 99 );
echo $order->getOrderNumber(); // 99
```

```php
<?php
use Germania\Orders\OrderNumberAwareInterface;
use Germania\Orders\OrderNumberAwareTrait;

class MyOrder implements OrderNumberAwareInterface
{
	use OrderNumberAwareTrait;
}

$order  = new MyOrder;
$order->setOrderNumber( 34 );
echo $order->getOrderNumber(); // 34


```

## Development

```bash
$ git clone https://github.com/GermaniaKG/Orders.git
$ cd Orders
$ composer install
```

## Unit tests

Either copy `phpunit.xml.dist` to `phpunit.xml` and adapt to your needs, or leave as is. Run [PhpUnit](https://phpunit.de/) test or composer scripts like this:

```bash
$ composer test
# or
$ vendor/bin/phpunit
```


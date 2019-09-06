# PhoneNumberKit for Mauritius
PHP library for formatting and validating phone numbers.

## Features
- Validate and format local mobile phone numbers

## Installation

Install the latest version with

```bash
$ composer require aliirfaan/mu-phone-number-kit
```

## Basic Usage

```php
<?php

require 'vendor/autoload.php';

use Aliirfaan\IdentityKit\MobileNumberKit;

// instantiate class
$mobileNumberKit = new MobileNumberKit();

// use
$localize = $mobileNumberKit->localizeMobileNumber('0023057563628'); // 57563628
```
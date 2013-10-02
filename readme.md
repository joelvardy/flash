# Flash Data / Messages Library

This is a simple library which has two static methods allowing you to get/set flash data or messages.

Coded by [Joel Vardy][joelvardy].

## Installation

Add the following to your `composer.json` require object:

```json
"joelvardy/flash": "dev-master"
```

## Usage

### Data

Set data upon failure.

```php
Flash::data(array(
	'username' => $username,
	'email' => $email
));
```

Read data to display on the front end:

```php
$data = Flash::data();
```

### Messages

Set an error message:

```php
Flash::message('error', 'You must enter a valid email address.');
```

Read all flash messages:

```php
$messages = Flash::message();
```

You may also be interested in my [template library][template-library].

  [joelvardy]: https://joelvardy.com/
  [template-library]: https://github.com/joelvardy/template
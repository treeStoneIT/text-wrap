# Nova Text Field With Wrap Options

**Since Nova now includes `asHtml()` Meta on the Text field (as of [v1.0.9](https://github.com/laravel/nova-issues/issues/280)), there is no more need for this package as same functionality can be achieved with core Text field.**

The default text field in nova doesn't wrap, this causes table to become very wide. By using this field you can either wrap after set number of characters or by splitting the text by a specified marker.

## Screenshots

**How it looks with regular text field:**
![screenshot how it looks with regular text field ](before.png?raw=true "with regular text field")

**How it looks with text wrap field:**
![screenshot how it looks with text wrap field ](after.png?raw=true "with text wrap field")

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require treestoneit/text-wrap
```

## Usage

Add the field to your resource in the ```fields``` method:

```php
use Treestoneit\TextWrap\TextWrap;
...
...
TextWrap::make('Product Name')->wrapMethod('length',40),
```

If you would like to use the wrap through spliting the text by marker, here is an example:  

```php
use Treestoneit\TextWrap\TextWrap;
...
...
TextWrap::make('Product Name')->wrapMethod('explode','-*-'),
```

Please note: _Only Index version of the field is configured to wrap_

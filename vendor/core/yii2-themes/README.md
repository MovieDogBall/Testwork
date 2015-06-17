Yii2-test themes.
=======================
This is the main themes extension for Yii2-test application.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist core/Yii2-test-themes "*"
```

or add

```
"core/Yii2-test-themes": "*"
```

to the require section of your `composer.json` file.

Configuration
-------------

Edit `view` section in your backend application config file:

```php
'view' => [
    'theme' => 'core\themes\admin\Theme'
],
```

or

```php
'view' => [
    'theme' => 'core\themes\site\Theme'
],
```
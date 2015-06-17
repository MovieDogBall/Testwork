Yii2-test site module.
=======================
This module provide frontend functionality for Yii2-test application.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist core/Yii2-test-site-module "*"
```

or add

```
"core/Yii2-test-site-module": "*"
```

to the require section of your `composer.json` file.

Configuration
-------------

Edit `module` section in your backend application config file:

```php
'modules' => [
    'site' => [
        'class' => 'core\site\Module'
    ]
]
```
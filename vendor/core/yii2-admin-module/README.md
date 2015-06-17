Yii2-test admin module.
=======================
This module provide admin managing system for your yii2 application.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist core/Yii2-test-admin-module "*"
```

or add

```
"core/Yii2-test-admin-module": "*"
```

to the require section of your `composer.json` file.

Configuration
-------------

Edit `module` section in your backend application config file:

```php
'modules' => [
    'admin' => [
        'class' => 'core\admin\Module'
    ]
]
```
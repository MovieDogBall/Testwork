Yii2-test users module.
========================
This module provide a users managing system for Yii2-test application.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist core/Yii2-test-users-module "*"
```

or add

```
"core/Yii2-test-users-module": "*"
```

to the require section of your `composer.json` file.

Configuration
=============

- Add module to config section:

```
'modules' => [
    'users' => [
        'class' => 'core\blogs\Module',
        'robotEmail' => 'no-reply@Yii2-test.domain', // Sender email. This email is required. From this address module will send all emails
        'robotName' => 'Robot' // Sender name
    ]
]
```

- Run migrations:

```
php yii migrate --migrationPath=@core/users/migrations
```

- Run RBAC command:

```
php yii users/rbac/add
```
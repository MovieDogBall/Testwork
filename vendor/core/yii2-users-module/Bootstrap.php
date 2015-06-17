<?php

namespace core\users;

use yii\base\BootstrapInterface;

/**
 * Users module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add module URL rules.
        $app->urlManager->addRules(
            [
                '<_a:(login|signup|activation|recovery|recovery-confirmation|resend|fileapi-upload)>' => 'users/guest/<_a>',
                '<_a:logout>' => 'users/user/<_a>',
                '<_a:email>' => 'users/default/<_a>',
                'my/settings/<_a:[\w\-]+>' => 'users/user/<_a>',
            ],
            false
        );

        // Add module I18N category.
        if (!isset($app->i18n->translations['core/users']) && !isset($app->i18n->translations['core/*'])) {
            $app->i18n->translations['core/users'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@core/users/messages',
                'forceTranslation' => true,
                'fileMap' => [
                    'core/users' => 'users.php',
                ]
            ];
        }
    }
}

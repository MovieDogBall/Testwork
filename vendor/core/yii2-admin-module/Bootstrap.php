<?php

namespace core\admin;

use yii\base\BootstrapInterface;

/**
 * Gallery module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add module URL rules.
        $app->getUrlManager()->addRules(
            [
                '' => 'admin/default/index',
                '<_m>/<_c>/<_a>' => '<_m>/<_c>/<_a>'
            ]
        );

        // Add module I18N category.
        if (!isset($app->i18n->translations['core/admin']) && !isset($app->i18n->translations['core/*'])) {
            $app->i18n->translations['core/admin'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@core/admin/messages',
                'forceTranslation' => true,
                'fileMap' => [
                    'core/admin' => 'admin.php',
                ]
            ];
        }
    }
}

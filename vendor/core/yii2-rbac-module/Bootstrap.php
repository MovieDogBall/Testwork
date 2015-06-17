<?php

namespace core\rbac;

use yii\base\BootstrapInterface;

/**
 * Blogs module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add module I18N category.
        if (!isset($app->i18n->translations['core/rbac']) && !isset($app->i18n->translations['core/*'])) {
            $app->i18n->translations['core/rbac'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@core/rbac/messages',
                'forceTranslation' => true,
                'fileMap' => [
                    'core/rbac' => 'rbac.php',
                ]
            ];
        }
    }
}

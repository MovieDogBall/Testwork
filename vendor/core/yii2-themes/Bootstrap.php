<?php

namespace core\themes;

use yii\base\BootstrapInterface;

/**
 * Themes bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add themes I18N category.
        if (!isset($app->i18n->translations['core/themes/admin*']) && !isset($app->i18n->translations['core/themes/*']) && !isset($app->i18n->translations['core/*'])) {
            $app->i18n->translations['core/themes/admin*'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@core/themes/admin/messages',
                'forceTranslation' => false,
                'fileMap' => [
                    'admin' => 'admin.php',
                    'widgets/box' => 'box.php'
                ]
            ];
        }
        if (!isset($app->i18n->translations['core/themes/site*']) && !isset($app->i18n->translations['core/themes/*']) && !isset($app->i18n->translations['core/*'])) {
            $app->i18n->translations['core/themes/site*'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@core/themes/site/messages',
                'forceTranslation' => false,
                'fileMap' => [
                    'site' => 'site.php',
                ]
            ];
        }
    }
}

<?php

namespace core\site;

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
                '' => 'site/default/index',
                '<_a:(about|contacts|captcha)>' => 'site/default/<_a>'
            ]
        );

        // Add module I18N category.
        if (!isset($app->i18n->translations['core/site']) && !isset($app->i18n->translations['core/*'])) {
            $app->i18n->translations['core/site'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@core/site/messages',
                'forceTranslation' => true,
                'fileMap' => [
                    'core/site' => 'site.php',
                ]
            ];
        }
    }
}

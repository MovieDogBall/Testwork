<?php

namespace core\themes\site;

use Yii;

/**
 * Class Theme
 * @package core\themes\admin
 */
class Theme extends \yii\base\Theme
{
    /**
     * @inheritdoc
     */
    public $pathMap = [
        '@frontend/views' => '@core/themes/site/views',
        '@frontend/modules' => '@core/themes/site/modules'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
            'sourcePath' => '@core/themes/site/assets',
            'css' => [
                'css/bootstrap.min.css'
            ]
        ];
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'sourcePath' => '@core/themes/site/assets',
            'js' => [
                'js/bootstrap.min.js'
            ]
        ];
    }
}

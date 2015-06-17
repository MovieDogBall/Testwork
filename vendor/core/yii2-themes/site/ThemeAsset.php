<?php

namespace core\themes\site;

use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@core/themes/site/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/font-awesome.min.css',
        'css/main.css',
        'css/custom.css'
    ];

    public $js = [];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}

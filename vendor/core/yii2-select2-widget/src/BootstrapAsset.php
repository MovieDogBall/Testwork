<?php

namespace core\select2;

use yii\web\AssetBundle;

/**
 * Widget bootstrap asset bundle.
 */
class BootstrapAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/select2';
    /**
     * @inheritdoc
     */
    public $css = [
        'select2-bootstrap.css'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'core\select2\Asset',
        'yii\bootstrap\BootstrapAsset'
    ];
}

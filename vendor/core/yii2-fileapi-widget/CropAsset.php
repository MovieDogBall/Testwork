<?php

namespace core\fileapi;

use yii\web\AssetBundle;

/**
 * Crop asset bundle.
 */
class CropAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/rubaxa/fileapi';

    /**
     * @inheritdoc
     */
	public $css = [
	    'jcrop/jquery.Jcrop.min.css'
	];

    /**
     * @inheritdoc
     */
	public $js = [
	    'jcrop/jquery.Jcrop.min.js'
	];

    /**
     * @inheritdoc
     */
	public $depends = [
		'core\fileapi\Asset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
	];
}

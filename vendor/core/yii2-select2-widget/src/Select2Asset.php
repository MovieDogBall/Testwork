<?php

namespace core\select2;

use yii\web\AssetBundle;

/**
 * Widget select2 asset bundle.
 */
class Select2Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/select2';

    /**
     * @inheritdoc
     */
	public $css = [
		'select2.css'
	];

    /**
     * @inheritdoc
     */
	public $depends = [
		'core\select2\Asset'
	];
}

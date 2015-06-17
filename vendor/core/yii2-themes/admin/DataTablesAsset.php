<?php

namespace core\themes\admin;

use yii\web\AssetBundle;

/**
 * Theme data tables asset bundle.
 */
class DataTablesAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@core/themes/admin/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/datatables/dataTables.bootstrap.css'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'core\themes\admin\ThemeAsset'
    ];
}

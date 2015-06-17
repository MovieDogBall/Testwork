<?php

namespace core\base\components;

use Yii;
use yii\base\Component;

/**
 * Class System
 * @package core\base\components
 * Base system component
 */
class Base extends Component
{
    /**
     * @var array Available extensions map
     */
    public $extensionsMap = [
        'users' => 'core/yii2-users-module'
    ];

    /**
     * @param string $name Extension name
     *
     * @return boolean Whether extension is installed or not
     */
    public function hasExtension($name)
    {
        $extension = isset($this->extensionsMap[$name]) ? $this->extensionsMap[$name] : $name;

        return array_key_exists($extension, Yii::$app->extensions);
    }

    /**
     * @param string $str String to be encrypted
     *
     * @return int Encrypted string
     */
    public function crc32($str)
    {
        return sprintf("%u", crc32($str));
    }
}

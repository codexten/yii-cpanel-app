<?php


namespace console\components;


use yii\base\Component;

/**
 * Class Instance
 *
 * @property string $instanceDir
 * @property string $versionsDir
 *
 * @package console\components
 */
class Instance extends Component
{
    public $instancePath = '/instances';
    public $projectCode;
    public $instanceCode;

    public function __construct($projectCode, $instanceCode, $config = [])
    {
        $this->projectCode = $projectCode;
        $this->instanceCode = $instanceCode;
        parent::__construct($config);
    }

    public function changeVersion($version)
    {
        $target = "{$this->versionsDir}/current";
        if (is_link($target)) {
            unlink($target);
        }

        return symlink($target, $version);
    }

    protected function getVersionDir($version)
    {
        return "{$this->instanceDir}/versions/{$version}";
    }

    public function getInstanceDir()
    {
        return "{$this->instancePath}/{$this->projectCode}/{$this->instanceCode}";
    }

    public function getVersionsDir()
    {
        return "{$this->instanceDir}/versions";
    }
}
<?php namespace Spycetek\Frontendlogger;

use SpyceTek\FrontendLogger\Components\FrontendLogger;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'SpyceTek\FrontendLogger\Components\FrontendLogger' => 'FrontendLogger'
        ];
    }

    public function registerSettings()
    {
    }
}

<?php namespace SpyceTek\FrontendLogger\Components;


use Log;
use Lang;
use Cms\Classes\ComponentBase;

class FrontendLogger extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => Lang::get('spycetek.frontendlogger::lang.plugin.name'),
            'description' => Lang::get('spycetek.frontendlogger::lang.plugin.description'),
        ];
    }

    public function onEmergency()
    {
        Log::emergency(post('message'));
    }

    public function onAlert()
    {
        Log::alert(post('message'));
    }

    public function onCritical()
    {
        Log::critical(post('message'));
    }

    public function onError()
    {
        Log::error(post('message'));
    }

    public function onWarning()
    {
        Log::warning(post('message'));
    }

    public function onNotice()
    {
        Log::notice(post('message'));
    }

    public function onInfo()
    {
        Log::info(post('message'));
    }

    public function onDebug()
    {
        Log::debug(post('message'));
    }
}
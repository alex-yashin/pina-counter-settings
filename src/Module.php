<?php

namespace PinaCounterSettings;

use Pina\App;
use Pina\ModuleInterface;
use Pina\Router;
use PinaCounterSettings\Model\Counters;
use PinaSettings\SQL\SettingsGateway;

class Module implements ModuleInterface
{

    public function getPath()
    {
        return __DIR__;
    }

    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    public function getTitle()
    {
        return 'Counter Settings';
    }

    public function __construct()
    {
        SettingsGateway::addSchema(new SQL\SettingsSchema);
        App::place('scripts')->push(new Counters());
    }

}
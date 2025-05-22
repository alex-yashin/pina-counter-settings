<?php

namespace PinaCounterSettings\SQL;

use Pina\Data\Schema;
use PinaCounterSettings\Types\JsCounterType;

use function Pina\__;

class SettingsSchema extends Schema
{
    public function __construct()
    {
        $this->add('counters', __('Счетчики'), JsCounterType::class);
    }

}
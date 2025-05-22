<?php

namespace PinaCounterSettings\Model;

use PinaSettings\Settings;

class Counters
{

    public function __invoke()
    {
        return Settings::get('counters');
    }

}
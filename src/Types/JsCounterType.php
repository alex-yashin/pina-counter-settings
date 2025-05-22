<?php

namespace PinaCounterSettings\Types;

use Pina\Html;
use Pina\Types\TextType;

class JsCounterType extends TextType
{

    public function draw($value): string
    {
        return Html::nest('pre/code', htmlentities($value));
    }

}
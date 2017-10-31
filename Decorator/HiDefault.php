<?php
namespace Decorator;

class HiDefault extends absFormater
{
    public function render($name) {
        return "hi," . $name;
    }
}
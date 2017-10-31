<?php
namespace Decorator;

class HelloDefault extends absFormater
{
    public function render($name) {
        return "hello," . $name;
    }
}
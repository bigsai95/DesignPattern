<?php
include_once 'absFormater.php';

class HelloDefault extends absFormater
{
    public function render($name) {
        return "hello," . $name;
    }
}
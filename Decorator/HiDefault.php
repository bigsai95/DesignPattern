<?php
include_once 'absFormater.php';

class HiDefault extends absFormater
{
    public function render($name) {
        return "hi," . $name;
    }
}
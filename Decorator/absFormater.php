<?php
include_once 'IFormater.php';

abstract class absFormater implements IFormater
{
    public function render($name) {}
}
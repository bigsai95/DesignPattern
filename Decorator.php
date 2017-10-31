<?php
include_once 'autoload.php';

$format = new Decorator\HelloDefault();
$s = new Decorator\Renderer($format);
echo $s->display("abc");
echo "\n";


$format = new Decorator\HiDefault();
$s = new Decorator\Renderer($format);
echo $s->display("abc");
echo "\n";


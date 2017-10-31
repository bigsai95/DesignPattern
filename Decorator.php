<?php
include 'Decorator/HelloDefault.php';
include 'Decorator/HiDefault.php';
include 'Decorator/Renderer.php';

$format = new HelloDefault();
$s = new Renderer($format);
echo $s->display("abc");
echo "\n";


$format = new HiDefault();
$s = new Renderer($format);
echo $s->display("abc");
echo "\n";


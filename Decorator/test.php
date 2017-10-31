<?php
include 'HelloDefault.php';
include 'HiDefault.php';
include 'Renderer.php';

$format = new HelloDefault();
$s = new Renderer($format);
echo $s->display("abc");
echo "\n";


$format = new HiDefault();
$s = new Renderer($format);
echo $s->display("abc");
echo "\n";


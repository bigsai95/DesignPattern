<?php
include_once 'autoload.php';

$f = SimpleFactory\Factory::build('Member');
echo $f->say() . "\n";

$f = SimpleFactory\Factory::build('Admin');
echo $f->say() . "\n";
<?php
include_once 'autoload.php';

$f = SimpleFactory\Factory::build('Member');
echo $f->say() . "\n";
echo $f->discount(100) . "\n";

$f = SimpleFactory\Factory::build('GoldMember');
echo $f->say() . "\n";
echo $f->discount(100) . "\n";
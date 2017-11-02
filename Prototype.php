<?php
include_once 'autoload.php';

$_prototype = new Prototype\Prototype(new Prototype\Item());
$obj1 = $_prototype->myclone();
$obj1->setTitle('obj1');
$obj1->add();
$obj1->show();

$obj2 = $_prototype->myclone();
$obj2->setTitle('obj2');
$obj2->show();
<?php
include_once 'autoload.php';
//獨體模式-建構一次物件後會一直用使
$instance = Singleton\Singleton::getInstance();
$instance->add();
echo $instance->get() . "\n";

$instance = Singleton\Singleton::getInstance();
$instance->add();
echo $instance->get() . "\n";

//一般物件-new就是一個新的物件
$normal = new Singleton\Normal();
$normal->add();
echo $normal->get() . "\n";

$normal = new Singleton\Normal();
$normal->add();
echo $normal->get() . "\n";



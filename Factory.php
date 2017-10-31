<?php
include_once 'autoload.php';

$f = new Factory\MemberFactory();
$mem = $f->make();
echo $mem->say() . "\n";
echo $mem->discount(100) . "\n";

$f = new Factory\GoldMemberFactory();
$goldmem = $f->make();
echo $goldmem->say() . "\n";
echo $goldmem->discount(100) . "\n";

$f = new Factory\SilverMemberFactory();
$smem = $f->make();
echo $smem->say() . "\n";
echo $smem->discount(100) . "\n";
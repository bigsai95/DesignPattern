<?php
namespace SimpleFactory;

abstract class abstractUser
{
    private $rate = 1;
    public function say() {}
    public function discount($price) {
        return $this->rate * $price;
    }
}
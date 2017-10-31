<?php
namespace Factory;

class Member extends abstractUser
{
    private $rate = 0.8;
    public function say() {
        return "I am a Member";
    }

    public function discount($price) {
        return $this->rate * $price;
    }
}
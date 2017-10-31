<?php
namespace Factory;

class SilverMember extends abstractUser
{
    private $rate = 0.7;
    public function say() {
        return "I am a Silver Card Member";
    }

    public function discount($price) {
        return $this->rate * $price;
    }
}
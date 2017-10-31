<?php
namespace SimpleFactory;

class GoldMember extends abstractUser
{
    private $rate = 0.5;
    public function say() {
        return "I am a Gold Card Member";
    }

    public function discount($price) {
        return $this->rate * $price;
    }
}
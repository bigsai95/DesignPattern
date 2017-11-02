<?php
namespace Prototype;

class Prototype implements IPrototype {
    private $instance;

    public function __construct($instance) {
        $this->instance = $instance;
    }

    public function myclone() {
        return clone $this->instance;
    }
}








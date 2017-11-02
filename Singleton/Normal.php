<?php
namespace Singleton;

class Normal
{
    private $conut;

    public function __construct() {
        $this->conut = 0 ;
    }

    public function add() {
        $this->conut++;
    }

    public function get() {
        return $this->conut;
    }
}

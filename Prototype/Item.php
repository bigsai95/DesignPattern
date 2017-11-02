<?php
namespace Prototype;

class Item {
    public $count = 0;
    public $title;

    public function setTitle($title) {
        $this->title = $title;
    }

    public function add() {
        $this->count = ++$this->count;
    }

    public function show() {
        echo $this->title . " count : " . $this->count . "\n";
    }
}








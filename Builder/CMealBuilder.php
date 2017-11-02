<?php
namespace Builder;

class CMealBuilder extends MealBuilder
{
    public function buildFood() {
        $this->meal[] = "大麥克";
    }

    public function buildDrink() {
        $this->meal[] = "玉米濃湯";
    }

    public function buildDessert() {
        $this->meal[] = "沙拉";
    }
}
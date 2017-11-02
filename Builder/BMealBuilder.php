<?php
namespace Builder;

class BMealBuilder extends MealBuilder
{
    public function buildFood() {
        $this->meal[] = "雞腿堡";
    }

    public function buildDrink() {
        $this->meal[] = "可樂";
    }

    public function buildDessert() {
        $this->meal[] = "薯條";
    }
}
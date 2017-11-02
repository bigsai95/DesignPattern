<?php
namespace Builder;

class AMealBuilder extends MealBuilder
{
    public function buildFood() {
        $this->meal[] = "牛肉堡";
    }

    public function buildDrink() {
        $this->meal[] = "紅茶";
    }

    public function buildDessert() {
        $this->meal[] = "蘋果派";
    }
}
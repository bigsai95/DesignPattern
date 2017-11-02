<?php
namespace Builder;

abstract class MealBuilder implements IBuilder
{
    protected $meal = [];
    public abstract function buildFood();
    public abstract function buildDrink();
    public abstract function buildDessert();
    public function getMeal() {
        return join(",",$this->meal);
    }
}
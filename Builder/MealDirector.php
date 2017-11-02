<?php
namespace Builder;

class MealDirector
{
    private $mealBuilder;

    public function setMealBuilder(MealBuilder $mealBuilder) {
        $this->mealBuilder = $mealBuilder;
    }

    public function buildMeal() {
        $this->mealBuilder->buildFood();
        $this->mealBuilder->buildDrink();
        $this->mealBuilder->buildDessert();

        return $this->mealBuilder->getMeal();

    }
}
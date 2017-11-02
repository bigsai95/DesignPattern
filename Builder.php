<?php
include_once 'autoload.php';

$a = new Builder\AMealBuilder();
$b = new Builder\BMealBuilder();
$c = new Builder\CMealBuilder();
$Meal = new Builder\MealDirector();

$Meal->setMealBuilder($a);
echo $Meal->buildMeal() . "\n";

$Meal->setMealBuilder($b);
echo $Meal->buildMeal() . "\n";

$Meal->setMealBuilder($c);
echo $Meal->buildMeal() . "\n";


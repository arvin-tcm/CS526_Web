<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: view_food.php 
 * Date and Time: Mar 24, 2016 4:35:07 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

$food_id = 1;
if (isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];
}

$categories = CategoryRepository::getCategories();
$food_id = $_GET['food_id'];
$food = FoodRepository::getFood($food_id);
return 'views/food_view.php';

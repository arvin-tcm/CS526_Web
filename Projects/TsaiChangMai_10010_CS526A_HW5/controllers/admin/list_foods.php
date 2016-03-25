<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: list_foods.php 
 * Date and Time: Mar 24, 2016 4:29:17 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

$category_id = 1;
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}
$categories = CategoryRepository::getCategories();
$category = CategoryRepository::getCategory($category_id);
$foods = FoodRepository::getFoodsByCategory($category_id);
return 'views/manage_food_list_view.php';

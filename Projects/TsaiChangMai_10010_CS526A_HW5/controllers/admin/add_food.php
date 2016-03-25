<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: add_food.php 
 * Date and Time: Mar 24, 2016 4:16:12 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

$addFoodSubmitted = isset($_POST['addfood_submitted']);
if ($addFoodSubmitted) {
    $category_id = $_POST['category_id'];
    $calories = $_POST['calories'];
    $title = $_POST['food_title'];
    $price = $_POST['food_price'];

    // validate the inputs
    if (empty($calories) || empty($title) || empty($price)) {
        $error = "Invalid food data. Check all fields and try again";
        include('../errors/error.php');
    } else {
        $category = CategoryRepository::getCategory($category_id);
        $food = new Food($calories, $title, $price, $category);
        FoodRepository::addFood($food);

        // Display the Food list page for the current category
        header("Location: .?controller=admin&category_id=$category_id");
    }
} else {
    $categories = CategoryRepository::getCategories();
    return 'views/add_food_view.php';
}
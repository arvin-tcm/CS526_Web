<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: delete_food.php 
 * Date and Time: Mar 24, 2016 4:27:09 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

// get the IDs
$food_id = $_POST['food_id'];
$category_id = $_POST['category_id'];

// delete the food
FoodRepository::deleteBook($food_id);

// display the food list page for the current category
header("Location: .?controller=admin&category_id=$category_id");

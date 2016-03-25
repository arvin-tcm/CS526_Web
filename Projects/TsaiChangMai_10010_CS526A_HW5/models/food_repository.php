<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: food_repository.php 
 * Date and Time: Mar 24, 2016 5:04:17 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

class FoodRepository {

    public static function getFoods() {
        global $db;
        $query = 'SELECT * FROM foods'
                . 'INNER JOIN categories'
                . 'ON foods.categoryID = '
                . 'categories.categoryID '
                . 'ORDER BY boodID'; //'OREDER
        $result = $db->query($query);
        $foods = array();
        foreach ($result as $row) {
            $category = new Category($row['categoryID'], $row['categoryName']);
            $food = new Food($row['calories'], $row['foodTitle'], $row['foodPrice'], $category);
            $foods[] = $food;
        }
        return $foods;
    }

    public static function getFoodsByCategory($category_id) {
        global $db;
        $category = CategoryRepository::getCategory($category_id);
        $query = "SELECT * FROM foods WHERE categoryID = $category_id ORDER BY calories";
        $result = $db->query($query);
        $foods = array();
        foreach ($result as $row) {
            $food = new Food($row['calories'], $row['foodTitle'], $row['foodPrice'], $category);
            $food->setId($row['foodID']);
            $foods[] = $food;
        }
        return $foods;
    }

    public static function getfood($food_id) {
        global $db;
        $query = "SELECT * FROM foods WHERE foodID = $food_id";
        $result = $db->query($query);
        $row = $result->fetch();
        $category = CategoryRepository::getCategory($row['categoryID']);
        $food = new Food($row['calories'], $row['foodTitle'], $row['foodPrice'], $category);
        $food->setId($row['foodID']);
        return $food;
    }

    public static function deleteFood($food_id) {
        global $db;
        $query = "DELETE FROM foods WHERE foodID = $food_id";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addFood($food) {
        global $db;
        $category_id = $food->getCategory()->getID();
        $calories = $food->getCalories();
        $title = $food->getTitle();
        $price = $food->getPrice();
        $query = "INSERT INTO foods (categoryID, calories, foodTitle, foodPrice)"
                . "VALUES ($category_id, '$calories', '$title', $price";
        $row_count = $db->exec($query);
        return $row_count;
    }

}

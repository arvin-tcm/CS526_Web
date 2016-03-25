<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: category_repository.php 
 * Date and Time: Mar 24, 2016 5:29:06 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

class CategoryRepository {

    public static function getCategories() {
        global $db;
        $query = "SELECT * FROM categories ORDER BY categoryID";
        $result = $db->query($query);
        $categories = array();
        foreach ($result as $row) {
            $category = new Category($row['categoryID'], $row['categoryName']);
            $categories[] = $category;
        }
        return $categories;
    }

    public static function getCategory($category_id) {
        global $db;
        $query = "SELECT * FROM categories WHERE categoryID = $category_id";
        $result = $db->query($query);
        $row = $result->fetch();
        $category = new Category($row['categoryID'], $row['categoryName']);
        return $category;
    }

}

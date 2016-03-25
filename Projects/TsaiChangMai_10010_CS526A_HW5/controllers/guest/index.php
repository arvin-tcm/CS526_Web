<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: index.php 
 * Date and Time: Mar 24, 2016 4:38:30 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

// complete code listing for controllers/guest/index.php
include_once 'models/food_repository.php';
include_once 'models/category_repository.php';
include_once 'models/food.php';
include_once 'models/category.php';

$hasAction = isset($_GET['action']);
if ($hasAction) {
    $action = $_GET['action'];
} else {
    $action = 'list_foods';
}

// $content = include_once 'views/navigation_guest.php';
$content = include_once "controllers/guest/$action.php";
return $content;


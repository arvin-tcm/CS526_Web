<?php

/*  
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: index.php 
 * Date and Time: Mar 24, 2016 6:14:18 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */ 
include_once "models/PageData.php";
$pageData = new PageData();
$pageData->title = "Rest";
$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navigation.css');


// start session management with a persistent cookie
$duration = 60 * 60 * 24 * 7;
session_set_cookie_params($duration);
session_start();
if(empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


//connect to database
include_once "db/db_context.php";
$db = DBContext::getDB();

$pageData->navigation = include_once "views/navigation_front.php";
$navigationIsClicked = isset($_GET["controller"]);
if ($navigationIsClicked) {
    $controller = $_GET["controller"];
} else {
    $controller = "guest";
}
$pageData->content = include_once "controllers/$controller/index.php";
include_once "views/page.php";


<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
  _Spring_2016
 * Author: Arvin-tcm 
 * Filename: index.php 
 * Date and Time: Feb 19, 2016 4:04:12 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */
include_once 'PageData.php';
$pageData = new PageData();
$pageData->title = "TsaiChangMai_10010CS526A_HW3";


// connect to database
include_once 'db_connect.php';
$navigationIsClicked = isset($_GET["action"]);
if ($navigationIsClicked) {
    $controller = $_GET["action"];
    $pageData->content .= include_once"$controller.php";
} else {
    $pageData->content .= include_once "customerList.php";
}
$page = include_once "page.php";
echo $page;

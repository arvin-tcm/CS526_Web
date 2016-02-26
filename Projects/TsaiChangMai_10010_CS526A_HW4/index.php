<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW4_Spring_2016
 * Author: Arvin-tcm 
 * Filename: index.php 
 * Date and Time: Feb 25, 2016 9:20:26 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW4 
 */
include_once "models/PageData.php";
// get json string object
if (!isset($_POST['object_string'])) {
    $object = new stdCLass();
    $object->firstname = "";
    $object->lastname = "";
} else {
    $object = json_decode($_POST['object_string']);
}
//get action
if (!isset($_POST['action'])) {
    $action = "Home";
} else {
    $action = $_POST['action'];
}
$json = json_encode($object);
$pageData = new PageData();
$pageData->title = $action;

switch ($action) {
    case "Profile":
        $pageData->content .= include_once 'views/Profile.php';
        break;
    case "Scores":
        $pageData->content .= include_once 'views/Scores.php';
        break;
    case "Summary":
        $pageData->content .= include_once 'views/Summary.php';
        break;
    case "Save Profile":
        require "controllers/addProfile.php";
        $pageData->content .= include_once 'views/Home.php';
        break;
    case "Save Score":
        require "controllers/addScore.php";
        $pageData->content .= include_once 'views/Scores.php';
        break;
    default:
        $pageData->content .= include_once 'views/Home.php';
        break;
}
$page = include_once "views/page.php";
echo $page;

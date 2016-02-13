<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW2_Spring_2016
 * Author: Arvin 
 * Filename: index.php 
 * Date and Time: Feb 12, 2016 6:40:25 PM 
 * Project Name: TsaiChangMai_10010_CS526A_Quiz1 
 */
// Set Data to default value
$lastName = "";
$firstName = "";

//get form data
if (isset($_POST["last_name"])) {
    $lastName = $_POST["last_name"];
}
if (isset($_POST["first_name"])) {
    $firstName = $_POST["first_name"];
}

// get action
if (isset($_POST["action"])) {
    $action = $_POST["action"];
} else {
    $action = "page1";
}

switch ($action) {
    case "page1":
        include("page1.php");
        break;
    case "page2":
        include("page2.php");
        break;
    case "page3":
        include("page3.php");
        break;
    default:
        include("page1");
        break;
}

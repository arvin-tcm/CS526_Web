<?php
include_once "models/PageData.php";
$pageData = new PageData();
$pageData->title = "Sunny Pet Store";
$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navigation.css');

//connect to database
include_once "db/db_connect.php";

$pageData->content .= include_once "views/navigation.php";
$navigationIsClicked = isset($_GET["action"]);
if ($navigationIsClicked) {
    $controller = $_GET["action"];
} else {
    $controller = "guest/gallery";
}
$pageData->content .= include_once "controllers/$controller.php";
$page = include_once "views/page.php";
echo $page;

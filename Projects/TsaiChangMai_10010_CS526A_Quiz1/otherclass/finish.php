<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW2_Spring_2016
 * Author: Arvin 
 * Filename: finish.php 
 * Date and Time: Feb 12, 2016 6:59:43 PM 
 * Project Name: TsaiChangMai_10010_CS526A_Quiz1 
 */

$random = rand(1, 100);
$guess = 0;
$retry = 0;
// get form data
if (isset($_POST["random"])) {
    $random = $_POST["random"];
}
if (isset($_POST["guess"])) {
    $guess = $_POST["guess"];
}
if (isset($_POST["retry"])) {
    $guess = $_POST["retry"];
}

// get action
if (isset($_POST["action"])) {
    $action = $_POST["action"];
} else {
    $aciton = "start";
}


switch ($action) {
    case "start":
        $random = rand(1, 100);
        $guess = 0;
        $retry = 0;
        include("page1.php");
        break;
    case "check":
        // increment the retry
        $retry++;
        if ($guess > $random) {
            $message = "Too big";
        } else if ($guess < $random) {
            $message = "Too small";
        } else {
            $message = "Good Job";
            include("finish.php");
            exit();
        }
        include("retry.php");
}
<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
  _Spring_2016
 * Author: Arvin-tcm 
 * Filename: db_connect.php 
 * Date and Time: Feb 19, 2016 3:05:26 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */
try {
    $db = mysqli_connect("localhost", "root", "johnson5414");
// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
} catch (Exception $ex) {
    $error_msg = $ex->getMessage();
    echo $error_msg;
    exit();
}
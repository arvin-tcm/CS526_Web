<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: db_connect.php 
 * Date and Time: Mar 24, 2016 4:47:56 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

$dsn = 'mysql:host=localhost;dbname=food_db';
$username = 'root';
$passwd = 'johnson5414';

try {
    $db = new PDO($dsn, $username, $passwd);
    echo 'Connected';
} catch (PDOException $ex) {
    $error_msg = $ex->getMessage();
    include('db_error.php');
    exit();
}
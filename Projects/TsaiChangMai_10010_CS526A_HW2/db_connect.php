<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW2_Spring_2016
 * Author: Arvin-tcm 
 * Filename: db_connect.php
 * Date and Time: Feb 5, 2016 12:31:41 AM 
 * Project Name: TsaiChangMai_10010_CS526A_HW2 
 */

try {
    $db_connect = mysqli_connect("localhost", "root", "johnson5414");
// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
} catch (Exception $ex) {
    $error_msg = $ex->getMessage();
    echo $error_msg;
    exit();
}

function insertToDataBase($email, $passwd, $name, $address, $city, $state, $country, $zip, $phone) {
    $query = "INSERT INTO signup_app.customers (email, passwd, customer_name, address, city, state, country, zip, phone)" .
            " VALUES ('$email', '$passwd', '$name', '$address', '$city', '$state', '$country', $zip, '$phone')";
    if ($GLOBALS['db_connect']->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $GLOBALS['db_connect']->error;
    }
}

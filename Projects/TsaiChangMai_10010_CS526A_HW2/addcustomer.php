<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW2_Spring_2016
 * Author: Arvin-tcm 
 * Filename: addcustomer.php 
 * Date and Time: Feb 5, 2016 12:33:00 AM 
 * Project Name: TsaiChangMai_10010_CS526A_HW2 
 */

// Data validation
// define empty variables
$email = $passwd = $name = $address = $city = $state = $country = $zip = $phone = "";
$emailErr = $passwdErr = $repasswdErr = $nameErr = "";
$addressErr = $cityErr = $stateErr = $countryErr = $zipErr = $phoneErr = "";
$result = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        // check if e-mail address is well-formed
        if (!filter_input(INPUT_POST, $email, FILTER_VALIDATE_EMAIL) === false) {
            $emailErr = "Invalid email format";
        } else {
            $email = test_input($_POST["email"]);
        }
    }

    // Password validation
    if (empty($_POST["passwd"])) {
        $passwdErr = "Password is required";
    } else {
        if ($_POST["passwd"] !== $_POST["repasswd"]) {
            $repasswdErr = "Password is not match";
        } else {
            $passwd = $_POST["passwd"];
        }
    }

    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Address validation
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }

    // City validation
    if (empty($_POST["city"])) {
        $cityErr = "City is required";
    } else {
        $city = test_input($_POST["city"]);
    }

    // State validation
    if (empty($_POST["state"])) {
        $stateErr = "State is required";
    } else {
        $state = test_input($_POST["state"]);
    }

    // Country validation
    if (empty($_POST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = test_input($_POST["country"]);
    }

    // Zip code validation
    if (empty($_POST["zip"])) {
        $zipErr = "Zip is required";
    } else {
        if (preg_match('/^\d{5}$/', $_POST["zip"])) {
            $zip = $_POST["zip"];
        } else {
            $zipErr = "Not a valid zip code";
        }
    }
    /*
      $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
      if(strlen($phone) === 10) {
      //Phone is 10 characters in length (###) ###-####
      }
     */
    // Phone number validation
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
        if (strlen($phone) !== 10) {
            $phoneErr = "Not a valid phone number";
        }
    }
}

// Simple data extraction
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// After all the checking
if (empty($emailErr) && empty($passwdErr) && empty($repasswdErr) && empty($nameErr) && empty($addressErr) && empty($cityErr) && empty($stateErr) && empty($countryErr) && empty($zipErr) && empty($phoneErr)) {
    $result = true;
}

// Some error occur
if (!$result) {
    require('signup.php');
}

// Database operation
// Add your code to add customer info to the database
if ($result) {
    require('db_connect.php');
    insertToDataBase($email, $passwd, $name, $address, $city, $state, $country, $zip, $phone);
}
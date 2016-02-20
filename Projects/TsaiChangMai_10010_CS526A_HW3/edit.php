<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
  _Spring_2016
 * Author: Arvin-tcm 
 * Filename: edit.php 
 * Date and Time: Feb 19, 2016 4:53:21 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */

include_once "CustomerModel.php";
include_once "CustomerRepository.php";

$editSubmitted = isset($_POST['edit_submitted']);
if ($editSubmitted) {
    $operation = $_POST['edit_submitted'];
    if ($operation == 'Cancel') {
        $output = include_once "customerList.php";
    } else if ($operation == 'Save') {
        $customer = new Customer($_POST["email"], $_POST["passwd"], $_POST["name"], $_POST["address"]
                , $_POST["city"], $_POST["state"], $_POST["country"], $_POST["zip"], $_POST["phone"]);
        $customerDB = new CustomerRepository($db);
        $output = $customerDB->updateCustomer($customer);
    }
} else {    //this runs if form was NOT submitted   
    $email = $_GET['email'];
    $passwd = $_GET['passwd'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $city = $_GET['city'];
    $state = $_GET['state'];
    $country = $_GET['country'];
    $zip = $_GET['zip'];
    $phone = $_GET['phone'];
    $output = include_once "edit_form.php";
}
return $output;

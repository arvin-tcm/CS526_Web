<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
  _Spring_2016
 * Author: Arvin-tcm 
 * Filename: delete.php 
 * Date and Time: Feb 19, 2016 4:33:02 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */

include_once "CustomerModel.php";
include_once "CustomerRepository.php";

$email = $_GET['email'];
$customerDB = new CustomerRepository($db);
$output = $customerDB->deleteCustomer($email);

return $output;



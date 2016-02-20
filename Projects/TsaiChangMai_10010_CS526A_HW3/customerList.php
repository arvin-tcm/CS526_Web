<?php

/*  
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
_Spring_2016
 * Author: Arvin-tcm 
 * Filename: cutomerList.php 
 * Date and Time: Feb 19, 2016 4:37:29 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */ 

include_once "CustomerModel.php";
include_once "CustomerRepository.php";

// Retrieve the data from the model
$customerDB = new CustomerRepository($db);
$customerList = $customerDB->getCustomers();

// Specify which view to see
$customerListView = include_once "customerList_view.php";
return $customerListView;
<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW4_Spring_2016
 * Author: Arvin-tcm 
 * Filename: addProfile.php 
 * Date and Time: Feb 25, 2016 9:28:04 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW4 
 */
$object->firstname = $_POST['firstName'];
$object->lastname = $_POST['lastName'];
$json = json_encode($object);

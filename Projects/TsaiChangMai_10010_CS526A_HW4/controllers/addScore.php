<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW4_Spring_2016
 * Author: Arvin-tcm 
 * Filename: addScore.php 
 * Date and Time: Feb 25, 2016 9:27:56 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW4 
 */
$temp = $_POST['class'];
if (!isset($object->$temp)) {
    $object->$temp = [];
}
array_push($object->$temp, $_POST['score']);
$json = json_encode($object);

<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW4_Spring_2016
 * Author: Arvin-tcm 
 * Filename: Summary.php 
 * Date and Time: Feb 25, 2016 9:25:25 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW4 
 */
$output = "<h1>Student Score Summary</h1>";

//return object of record
function findMinMaxAvg($array) {
    $sum = 0;
    $size = count($array);
    $result = new stdClass();
    $result->min = $array[0];
    $result->max = $array[0];
    $result->avg = 0.0;
    for ($i = 0; $i < $size; $i++) {
        $sum += $array[$i];
        if ($result->min > $array[$i]) {
            $result->min = $array[$i];
        } elseif ($result->max < $array[$i]) {
            $result->max = $array[$i];
        }
    }
    $result->avg = $sum / $size;
    return $result;
}

foreach ($object as $key => $value) {
    if (is_array($value)) {
        $record = findMinMaxAvg($value);
        $output.= 'course: ' . $key . ', max: ' . $record->max . ', min: ' . $record->min . ', avg: ' . $record->avg . '<br>';
    } else {
        $output.= $key . ': ' . $value . '<br>';
    }
}
$output .= "<form action='index.php' method='post'>";
$output .= "<input type='text' hidden name='object_string' value='$json'/>";
$output .= "<hr><input type='submit' name='action' value='Home' />";
$output .= "</form>";
return $output;

<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
  _Spring_2016
 * Author: Arvin-tcm 
 * Filename: customerList_view.php 
 * Date and Time: Feb 19, 2016 4:11:09 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */
$hasCustomers = isset($customerList);
if ($hasCustomers === false) {
    echo "error";
}

$output = "<table><tr><th>Name</th><th>Address</th><th>edit</th><th>delete</th></tr>";

foreach ($customerList as $customer) {
    $output.="<tr>";
    $output.="<td>$customer->name</td>"
            . "<td>$customer->email</td>"
            . "<td><a href='index.php?action=edit&email=$customer->email&address=$customer->email"
            . "&passwd=$customer->passwd&name=$customer->name&address=$customer->address"
            . "&city=$customer->city&state=$customer->state&country=$customer->country"
            . "&zip=$customer->zip&phone=$customer->phone'>Edit</a></td>"
            . "<td><a href='index.php?action=delete&email=$customer->email'>Delete</a></td>";
    $output.="</tr>";
}
$output .= "</table>";
return $output;

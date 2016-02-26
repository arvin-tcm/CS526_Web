<?php
/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW4_Spring_2016
 * Author: Arvin-tcm 
 * Filename: Profile.php 
 * Date and Time: Feb 25, 2016 9:28:41 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW4 
 */

return "<h1>Student Information</h1>
<form action='index.php' method='post'>
    <h2>Input Student Information</h2>
    <table>
        <tr>
            <td>Last Name: </td>
            <td><input type='text' name='lastName' value='$object->lastname' /></td>
        </tr>
        <tr>
            <td>First Name: </td>
            <td><input type='text' name='firstName' value='$object->firstname' /></td>
        </tr>
    </table>
    <input type='text' hidden name='object_string' value='$json'/><hr>
    <input type='submit' name='action' value='Save Profile' />
</form>";

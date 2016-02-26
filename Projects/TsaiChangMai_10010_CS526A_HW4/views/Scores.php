<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW4_Spring_2016
 * Author: Arvin-tcm 
 * Filename: Scores.php 
 * Date and Time: Feb 25, 2016 9:28:27 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW4 
 */
if (!isset($temp)) {
    $temp = "";
}
return "<h1>Student Scores</h1>
        <form action='index.php' method='post'>
            <h2>Input Student Information</h2>
            <table>
                <tr>
                    <td>
                        Course Number: 
                    </td>
                    <td>
                        <input type='text' name='class' value='$temp'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Score: 
                    </td>
                    <td>
                        <input type='text' name='score' />
                    </td>
                </tr>
            </table>
            <input type='text' hidden name='object_string' value='$json'/><hr>
            <input type='submit' name='action' value='Home' />
            <input type='submit' name='action' value='Save Score' />
        </form>";


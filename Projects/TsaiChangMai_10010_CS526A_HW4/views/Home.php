<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW4_Spring_2016
 * Author: Arvin-tcm 
 * Filename: Home.php 
 * Date and Time: Feb 25, 2016 9:51:28 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW4 
 */
return "<h1>Grade Book</h1>
        <form action='index.php' method='post'>
            <h2>Input Student Information</h2>
            <input type='submit' name='action' value='Profile' />
            <h2>Input Student Scores</h2>
            <input type='submit' name='action' value='Scores' />
            <h2>Display Score Summary</h2>
            <input type='submit' name='action' value='Summary' />
            <input type='text' hidden name='object_string' value='$json'/>
        </form>";

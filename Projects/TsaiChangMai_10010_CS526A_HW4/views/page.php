<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW4_Spring_2016
 * Author: Arvin-tcm 
 * Filename: page.php 
 * Date and Time: Feb 25, 2016 9:18:47 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW4 
 */
return "<!DOCTYPE html>
<html>
<head>
<title>$pageData->title</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
$pageData->css
$pageData->embeddedStyle
</head>
<body>
$pageData->content
$pageData->scriptElements
</body>
</html>";

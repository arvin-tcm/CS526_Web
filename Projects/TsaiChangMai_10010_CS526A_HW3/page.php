<?php

/*  
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
_Spring_2016
 * Author: Arvin-tcm 
 * Filename: page.php 
 * Date and Time: Feb 19, 2016 4:32:27 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
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

<!DOCTYPE html>
<!-- 
Student Info: Name=Tsai-Chang Mai, ID=10010
Subject: CS526(C)_HW5_Spring_2016
Author: Arvin-tcm 
Filename: page.php 
Date and Time: Mar 24, 2016 6:12:17 PM 
Project Name: TsaiChangMai_10010_CS526A_HW5 
--> 
<html>
    <head>
        <title><?php echo $pageData->title; ?></title>
        <meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
        <?php echo $pageData->css; ?>
        <?php echo $pageData->embeddedStyle ?>
    </head>
    <body>
        <?php echo $pageData->navigation; ?>
        <?php include_once "$pageData->content"; ?>
        <?php echo $pageData->scriptElements; ?>
    </body>
</html>

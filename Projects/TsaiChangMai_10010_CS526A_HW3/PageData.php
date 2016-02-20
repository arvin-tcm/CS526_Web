<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
  _Spring_2016
 * Author: Arvin-tcm 
 * Filename: PageData.php 
 * Date and Time: Feb 19, 2016 4:32:12 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */

class PageData {

    public $title = "";
    public $content = "";
    public $css = "";
    public $embeddedStyle = "";
    //declare a new property for script elements   
    public $scriptElements = "";

    //declare a new method for adding Javascript files    
    public function addScript($src) {
        $this->scriptElements .= "<script src='$src'></script>";
    }

    public function addCSS($href) {
        $this->css .= "<link href='$href' rel='stylesheet' />";
    }

}

<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: category.php 
 * Date and Time: Mar 24, 2016 5:27:56 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

class Category {

    private $id, $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    // getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    //setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

}

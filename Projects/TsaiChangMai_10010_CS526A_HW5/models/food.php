<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: food.php 
 * Date and Time: Mar 24, 2016 4:55:48 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

class Food {

    private $id, $calories, $title, $price, $category;

    public function __construct($calories, $title, $price, $category) {
        $this->calories = $calories;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }

    // getters
    public function getId() {
        return $this->id;
    }

    public function getCalories() {
        return $this->calories;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    // setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setCalories($calories) {
        $this->calories = $calories;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    // additional functions
    public function getFormattedPrice() {
        $formatted_price = number_format($this->price, 2);
        return $formatted_price;
    }

    public function getDiscountedPercentage() {
        $discount_percent = 10;
        return $discount_percent;
    }

    public function getDiscountAmount() {
        $disount_percent = $this->getDiscountedPercentage() / 100;
        $discount_amount = $this->price * $disount_percent;
        $discount_amount = round($discount_amount, 2);
        $discount_amount = number_format($discount_amount, 2);
        return $discount_amount;
    }

    public function getDiscountPrice() {
        $discount_price = $this->price - $this->getDiscountAmount();
        $discount_price = number_format($discount_price, 2);
        return $discount_price;
    }

    public function getImageFilename() {
        $image_filename = $this->calories . '.png';
        return $image_filename;
    }

    public function getImagePath() {
        $image_path = 'img/' . $this->getImageFilename();
        return $image_path;
    }

    public function getImageAltText() {
        $image_alt = 'Image: ' . $this->getImageFilename();
        return $image_alt;
    }

}

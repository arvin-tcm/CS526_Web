<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: add_cart.php 
 * Date and Time: Mar 25, 2016 2:37:11 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */
$addCartSubmitted = isset($_POST['addcart_submitted']);
if ($addCartSubmitted) {
    $food_id = $_POST['food_id'];
    $quantity = $_POST['quantity'];

    // data validate
    if (empty($quantity) || $quantity <= 0) {
        $error = "Invalid food quantity";
        include('../errors/error.php');
    } else {
        $index = false;
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]->food_id === $food_id) {
                $index = $i;
                break;
            }
        }
        if ($index) {
            $_SESSON['cart'][$index]->quantity += $quantity;
        } else {
            $food = FoodRepository::getfood($food_id);
            $newItem = new stdClass();
            $newItem->food_id = $food_id;
            $newItem->quantity = $quantity;
            $newItem->food = $food;
            array_push($_SESSION['cart'], $newItem);
        }
        header("Location: .?controller=guest&action=view_food&food_id=$food_id");
    }
} else {
    
}

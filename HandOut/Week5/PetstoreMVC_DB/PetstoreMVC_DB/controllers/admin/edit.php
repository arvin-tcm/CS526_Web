<?php
include_once "models/PetModel.php";
include_once "models/PetRepository.php";

$editSubmitted = isset($_POST['edit_submitted']);
if ($editSubmitted) {
    $operation = $_POST['edit_submitted'];
    if ($operation == 'Cancel') {
        $output = include_once "controllers/petlist.php";
    } else if ($operation == 'Save') {
        $petID = $_POST['petID'];
        $petname = $_POST['petname'];
        $price = $_POST['price'];
        $pet = new Pet($petID, $petname, $price, "img/$petname.jpg");
        $petDB = new PetRepository($db);
        $output = $petDB->savePet($pet);
    }
} else {    //this runs if form was NOT submitted   
    $petid = $_GET['petID'];
    $petname = $_GET['petname'];
    $price = $_GET['price'];
    $output = include_once "views/edit_form.php";
}
return $output;



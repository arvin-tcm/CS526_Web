<?php
include_once "models/PetModel.php";
include_once "models/PetRepository.php";

$newImageSubmitted = isset($_POST['new_submitted']);
if ($newImageSubmitted) {
    $operation = $_POST['new_submitted'];
    if( $operation == 'Upload') {
        $output = upload();
    } else if ( $operation == 'Add' ) {
        $petname = $_POST['petname'];
        $price = $_POST['price'];
        $pet = new Pet(0, $petname, $price, "img/$petname.jpg");
        $petDB = new PetRepository($db);
        $output = $petDB->addPet($pet);
    }
} else {    //this runs if form was NOT submitted    
    $output = include_once "views/add_form.php";
}

return $output; //declare new function 

function upload() {
    include_once 'models/Uploader.php';

    $uploader = new Uploader('image_data');
    $uploader->saveIn('img');
    $fileUploaded = $uploader->save();
    if ($fileUploaded) {
        $out = 'new file uploaded';
    } else {
        $out = 'something went wrong';
    }
    $out .= "<pre>";
    $out .=print_r($_FILES, true);
    $out .= "</pre>";
    return $out;
}



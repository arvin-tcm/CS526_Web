<?php
include_once "models/PetModel.php";
include_once "models/PetRepository.php";

$petID = $_GET['petID'];
$petDB = new PetRepository($db);
$output = $petDB->deletePet($petID);

return $output;



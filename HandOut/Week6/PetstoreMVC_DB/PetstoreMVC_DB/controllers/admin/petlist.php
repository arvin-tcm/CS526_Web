<?php
//complete code listing for controllers/admin/petlist.php
include_once "models/PetModel.php";
include_once "models/PetRepository.php";

$petDB = new PetRepository($db);

$petList = $petDB->getPets();
$petListView = include_once "views/petlist_view.php";
return $petListView;

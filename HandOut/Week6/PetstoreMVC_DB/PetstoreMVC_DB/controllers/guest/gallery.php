<?php
//complete code listing for controllers/guest/gallery.php
include_once "models/ImageModel.php";
$image = new Image("img");

$imageList = $image->getImages();
$galleryView = include_once "views/gallery_view.php";
return $galleryView;


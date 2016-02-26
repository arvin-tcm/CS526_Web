<?php

$hasImages = isset($imageList);
if ($hasImages === false) {
    return 'views/gallery_view.php needs $imageList';
}

$out = "<h1>Image Gallery</h1>";
$out .= "<ul id='images'>";
foreach($imageList as $src) {
    $out .= "<li><img src='$src' /></li>";
}
$out .= "</ul>";
return $out;

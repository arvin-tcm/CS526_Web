<?php

class Image {
    //declare a new property
    private $imagePath;

    public function __construct($imagePath) {
        $this->imagePath = $imagePath;
    }

    function getImages() {
        $filesInFolder = new DirectoryIterator($this->imagePath);
        $imageList = array();
        $i = 0;
        while ($filesInFolder->valid()) {
            $file = $filesInFolder->current();
            $filename = $file->getFilename();
            $src = "$this->imagePath/$filename";
            $fileInfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $fileInfo->file($src);

            if ($mimeType === "image/jpeg") {
                $imageList[$i++] = $src;
            }
            $filesInFolder->next();
        }
        return $imageList;
    }

}

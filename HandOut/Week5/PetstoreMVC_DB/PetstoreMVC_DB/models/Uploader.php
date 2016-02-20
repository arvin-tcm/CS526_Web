<?php

/* 
 * Student Info: Name=Ken Cheung, ID=1234
 * Suject: CS526_Petstore_Summer_2015
 * Author: ken
 * Filename: Uploader.php
 * Date and Time: May 27, 2015 11:03:48 AM
 * Project Name: petstore
 */
class Uploader {
    private $filename;
    private $fileData;
    private $destination;

    public function __construct($key) {
        $this->filename = $_FILES[$key]['name'];
        $this->fileData = $_FILES[$key]['tmp_name'];
    }

    public function saveIn($folder) {
        $this->destination = $folder;
    }

    public function save() {
        $folderIsWritAble = is_writable($this->destination);
        if ($folderIsWritAble) {
            $name = "$this->destination/$this->filename";
            $success = move_uploaded_file($this->fileData, $name);
        } else {
            trigger_error("cannot write to $this->destination");
            $success = false;
        }
        return $success;
    }
}


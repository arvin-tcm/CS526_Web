<?php

class Pet {
    public $petID;
    public $petName;
    public $price;
    public $imagePath;

    public function __construct($petID, $petName, $price, $imagePath) {
        $this->petID = $petID;
        $this->petName = $petName;
        $this->price = $price;
        $this->imagePath = $imagePath;
    }

}

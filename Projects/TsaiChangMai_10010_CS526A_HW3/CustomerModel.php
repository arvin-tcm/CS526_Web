<?php

/*  
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
_Spring_2016
 * Author: Arvin-tcm 
 * Filename: CustomerModel.php 
 * Date and Time: Feb 19, 2016 3:36:34 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */ 
//'$email', '$passwd', '$name', '$address', '$city', '$state', '$country', $zip, '$phone'
class Customer {
    public $email;
    public $passwd;
    public $name;
    public $address;
    public $city;
    public $state;
    public $country;
    public $zip;
    public $phone;
    public function __construct($email, $passwd, $name, $address, $city, $state, $country, $zip, $phone) {
        $this->email = $email;
        $this->passwd = $passwd;
        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->zip = $zip;
        $this->phone = $phone;
    }
    
    
    
}

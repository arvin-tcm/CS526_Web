<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
  _Spring_2016
 * Author: Arvin-tcm 
 * Filename: CustomerRepository.php 
 * Date and Time: Feb 19, 2016 3:40:51 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
 */
include_once 'customerModel.php';

class CustomerRepository {

    // decalre a new property
    private $db;

    // declare a constructor method requires a database connection as argument
    public function __construct($dbConnection) {
        // store the received connection in the $this->db property
        $this->db = $dbConnection;
    }

    public function getCustomers() {
        // the actual SQL statement
        $customerList = array();
        $i = 0;
        $sql = "SELECT email, passwd, customer_name, address, city, state, country, zip, phone From signup_app.customers";
        $customers = $this->db->query($sql);
        //$customer = $customers->fetch();
        if ($customers->num_rows > 0) {
            while ($customer = $customers->fetch_assoc()) {
                $customerList[$i++] = new Customer(
                        $customer['email'], $customer['passwd'], $customer['customer_name'], $customer['address']
                        , $customer['city'], $customer['state'], $customer['country'], $customer['zip'], $customer['phone']
                );
            }
            return $customerList;
        }
    }

    public function updateCustomer($customer) {
        $sql = "UPDATE signup_app.customers SET "
                . "passwd='$customer->passwd', customer_name='$customer->name', address='$customer->address', "
                . "city='$customer->city', state='$customer->state', country='$customer->country', "
                . "zip='$customer->zip', phone='$customer->phone' WHERE email='$customer->email'";
        $updateCount = $this->db->query($sql);
        if ($updateCount > 0) {
            return "$customer->email was updated";
        } else {
            return "$customer->email was not updated";
        }
    }

    public function deleteCustomer($customerEmail) {
        $sql = "DELETE FROM signup_app.customers WHERE email='$customerEmail'";
        $deleteCount = $this->db->query($sql);
        if ($deleteCount > 0) {
            return "$customerEmail was deleted";
        } else {
            return "$customerEmail was not deleted";
        }
    }

    public function addCustomer($customer) {
        $sql = "INSERT INTO signup_app.customers (email, passwd, customer_name, address, city, state, country, zip, phone)"
                . " VALUES ('$customer->email', '$customer->passwd', '$customer->name', '$customer->address', '$customer->city'"
                . ", '$customer->state', '$customer->country', $customer->zip, '$customer->phone')";
        $insertCount = $this->db->query($sql);
        if ($insertCount > 0) {
            return "$customer->email was inserted";
        } else {
            return "$customer->email was not inserted";
        }
    }

}

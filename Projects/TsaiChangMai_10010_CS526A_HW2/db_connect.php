<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW2_Spring_2016
 * Author: Arvin-tcm 
 * Filename: db_connect.php
 * Date and Time: Feb 5, 2016 12:31:41 AM 
 * Project Name: TsaiChangMai_10010_CS526A_HW2 
 */

//$dsn = 'mysql:host=localhost:3306;dbname=signup_app';
//$username = 'root';
//$password = 'johnson5414';

try {
    $db_connect = mysqli_connect("localhost", "root", "johnson5414");
// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
} catch (Exception $ex) {
    $error_msg = $ex->getMessage();
    echo $error_msg;
    exit();
}

function insertToDataBase($email, $passwd, $name, $address, $city, $state, $country, $zip, $phone) {
    $query = "INSERT INTO signup_app.customers (email, passwd, customer_name, address, city, state, country, zip, phone)" .
            " VALUES ('$email', '$passwd', '$name', '$address', '$city', '$state', '$country', $zip, '$phone')";
    if ($GLOBALS['db_connect']->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $GLOBALS['db_connect']->error;
    }
}

/*
  function test() {
  $test = 'aaabaaaa';
  $query = "INSERT INTO signup_app.customers (email, passwd, customer_name, address, city, state, country, zip, phone) VALUES ('$test', 'abc', 'abc', 'abc', 'abc','abc','abc', 123,12234356)";
  //$insert = $db_connect->query($query);
  if ($GLOBALS['db_connect']->query($query) === TRUE) {
  echo "New record created successfully";
  } else {
  echo "Error: " . $query . "<br>" . $GLOBALS['db_connect']->error;
  }
  }
 */
/*
$query = "INSERT INTO books (publisherID, isbn, bookTile, bookPrice) VALUES (2, '888888', 'ASP', '78.9')"; 
$insert_count = $db->exec($query); echo "<p>$insert_count inserted.</p>"; 
$query = "UPDATE books SET bookPrice = 100 WHERE isbn = '888888'" ; 
$upate_count = $db->exec($query); echo "<p>$upate_count updated.</p>"; 
$query = "DELETE FROM books WHERE isbn = '888888'" ; 
$delete_count = $db->exec($query); echo "<p>$delete_count deleted.</p>";
 */
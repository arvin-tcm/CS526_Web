<?php
$dsn = 'mysql:host=localhost;dbname=petdb';
$username = 'root';
$password = 'johnson5414';

try {
    $db = new PDO($dsn, $username, $password);
    echo 'Connected.';
} catch (PDOException $ex) {
    $error_msg = $ex->getMessage();
    include('db_error.php');
    exit();
}
       
?>

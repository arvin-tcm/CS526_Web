<?php

/*
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: db_context.php 
 * Date and Time: Mar 24, 2016 4:51:19 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */

class DBContext {

    private static $dsn = 'mysql:host=localhost;dbname=food_db';
    private static $username = 'root';
    private static $passwd = 'johnson5414';
    private static $db;

    private function __construct() {
        
    }

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$passwd);
            } catch (PDOException $ex) {
                $error_message = $ex->getMessage();
                include('../errors/datebase_error.php');
                exit();
            }
        }
        return self::$db;
    }

}

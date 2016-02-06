/*  
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW2_Spring_2016
 * Author: Arvin-tcm 
 * Filename: signup.php 
 * Date and Time: Feb 5, 2016 12:33:10 AM 
 * Project Name: TsaiChangMai_10010_CS526A_HW2 
 */ 
CREATE DATABASE IF NOT EXISTS signup_app;
CREATE TABLE IF NOT EXISTS signup_app.customers (
    customer_id int NOT NULL AUTO_INCREMENT,
    email varchar(100) NOT NULL UNIQUE,
    passwd varchar(50) NOT NULL,
    customer_name varchar(100) NOT NULL,
    address varchar(100) NOT NULL,
    city varchar(50) NOT NULL,
    state varchar(50) NOT NULL,
    country varchar(50) NOT NULL,
    zip int NOT NULL,
    phone varchar(15) NOT NULL UNIQUE,
    PRIMARY KEY(customer_id)
);

/*
 *  Testing query
*/
SELECT * FROM signup_app.customers;


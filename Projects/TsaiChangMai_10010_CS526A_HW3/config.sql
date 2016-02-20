<?php

/*  
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW3
_Spring_2016
 * Author: Arvin-tcm 
 * Filename: config.sql
 * Date and Time: Feb 19, 2016 5:26:23 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW3 
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
TRUNCATE signup_app.customers;
INSERT INTO signup_app.customers (email, passwd, customer_name, address, city, state, country, zip, phone) 
VALUES ('c@gmail.com', '12345','abc','456','b','d','e',12345, '12344445');


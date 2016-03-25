/*  
 * Student Info: Name=Tsai-Chang Mai, ID=10010
 * Subject: CS526(C)_HW5_Spring_2016
 * Author: Arvin-tcm 
 * Filename: fooddb.sql 
 * Date and Time: Mar 24, 2016 4:44:56 PM 
 * Project Name: TsaiChangMai_10010_CS526A_HW5 
 */ 
/**
 * Author:  Arvin-tcm
 * Created: Mar 24, 2016
 */
DROP DATABASE IF EXISTS food_db;

CREATE DATABASE food_db;

USE food_db;
 

CREATE TABLE categories (
  categoryID       INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (categoryID)
);


CREATE TABLE foods (
  foodID           INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryID      INT(11)        NOT NULL,
  calories             VARCHAR(20)    NOT NULL   UNIQUE,
  foodTitle         VARCHAR(255)   NOT NULL,
  foodPrice        DECIMAL(10,2)  NOT NULL,
  PRIMARY KEY (foodID)
);


INSERT INTO categories VALUES
(1, 'AppleBee'),
(2, 'Chick-fil-A'),
(3, 'KFC');


INSERT INTO foods VALUES
(1, 1, '1010101010', 'dishes', '69.00'),
(2, 2, '1010101011', 'chicken burger', '59.00'),
(3, 3, '1010101102', 'fried chicken', '25.17'),
(5, 1, '1010101103', 'steak', '79.99'),
(6, 2, '1010101104', 'fries', '49.99'),
(7, 3, '1010101105', 'chicken pop', '29.99'),
(8, 1, '1010101106', 'fish', '59.99');

/*
GRANT SELECT, INSERT, DELETE, UPDATE
ON book_db2.*
TO admin@localhost
IDENTIFIED BY 'pass@word';


GRANT SELECT
ON books
TO peter@localhost
IDENTIFIED BY 'pass@word';
*/

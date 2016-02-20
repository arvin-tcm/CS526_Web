DROP DATABASE IF EXISTS petdb;

CREATE DATABASE petdb;

USE petdb;
 
CREATE TABLE pet (
  pet_id            INT(11)         NOT NULL   AUTO_INCREMENT,
  petName           VARCHAR(255)    NOT NULL,
  price             DECIMAL(10,2)   NOT NULL,
  imagePath         VARCHAR(255)    NOT NULL,
  PRIMARY KEY (pet_id)
);

INSERT INTO pet VALUES
(1, 'coco', 1000, 'img/coco.jpg'),
(2, 'bobo', 800, 'img/bobo.jpg'),
(3, 'dodo', 700, 'img/dodo.jpg');


GRANT SELECT, INSERT, DELETE, UPDATE
ON petdb.*
TO admin@localhost
IDENTIFIED BY 'pass@word';

GRANT SELECT
ON pet
TO peter@localhost
IDENTIFIED BY 'pass@word';

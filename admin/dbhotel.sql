DROP DATABASE IF EXISTS dbhotel;
CREATE DATABASE dbhotel;
USE dbhotel;

CREATE TABLE user (
   id             INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nama           VARCHAR(50) NOT NULL,
   datang         DATE NOT NULL,
   pulang         DATE NOT NULL,
   tipe           VARCHAR(50) NOT NULL,
   jumlah         INT(5) NOT NULL,
   harga          INT(10) NOT NULL
);
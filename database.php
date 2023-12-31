<?php

//include the connection file
include('connection.php');

//create an instance of Connection class
$connection = new Connection();

//call the createDatabase methods to create database "chap4Db"
$connection->createDatabase('vetement');
 $query2 = "
 CREATE TABLE Admin (
 IDA INT(6)  AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50) UNIQUE,
 password VARCHAR(80)

 )
 ";
$query0 = "
CREATE TABLE Cities (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) UNIQUE NOT NULL
    )
";
$query1 = "
CREATE TABLE Clients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE,
password VARCHAR(80),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
idCity INT(6) UNSIGNED NOT NULL,
FOREIGN KEY (idCity) REFERENCES Cities(id)
)
";
$query3="
CREATE TABLE Categories (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL )";

//call the selectDatabase method to select the chap4Db
$connection->selectDatabase('vetement');

//call the createTable method to create table with the $query
$connection->createTable($query2);
$connection->createTable($query0);
$connection->createTable($query1);
$connection->createTable($query3);


?>

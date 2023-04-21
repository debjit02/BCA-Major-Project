<?php


//creating the database ?! exists
$query = "CREATE DATABASE IF NOT EXISTS clinic";
require_once('database_connection.php');
mysqli_query($conn,$query);

//selecting the database
mysqli_select_db($conn,"clinic");
//creating the table for the database
$query = "CREATE TABLE IF NOT EXISTS registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    bio VARCHAR(1000) NOT NULL,
    -- iname VARCHAR(255) NOT NULL,
    -- idata LONGBLOB NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

 mysqli_query($conn,$query);

  
  

  
  

?>
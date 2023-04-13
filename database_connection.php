<?php
//create variables to store the value of host, user, password and port number
$host = "localhost";
$user = "root";
// $password = "Frpsxwhu2001@";
// $database = "details";
$password = "";
$port = "3306";

//Test the connection
$conn = mysqli_connect($host, $user, $password,"", $port);
// Validating the connection
// if(!$conn)
// die ('Cant connect');
// else 
// echo "connected";
?>

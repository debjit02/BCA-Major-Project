<?php
//create variables to store the value of host, user, password and port number
$host = "localhost";
$user = "root";
// $password = "Frpsxwhu2001@";
// $database = "details";
$database = "";
$password = "";
$port = "3306";
if (isset($_POST['signup'])) {
    $database = "";
}
elseif (isset($_POST['login'])) {
    $database = "clinic";
}

//Test the connection
$conn = mysqli_connect($host, $user, $password,$database, $port);
// Validating the connection
// if(!$conn)
// die ('Cant connect');
// else 
// echo "connected";
?>


<?php
//Checking the connection
include "database_connection.php";
//creating database if not exixts
include "database_creation.php";


//fetching data from the html form in registration.html file

if ($_SERVER['REQUEST_METHOD']) {

    //     // Fetch the data from the form fields
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];



    //sql query to insert data into database
    $sql = "INSERT INTO registration (firstname,lastname,email,pass,phone,gender,habitat) VALUES('$firstname','$lastname','$email','$pass','$phone','$gender','$address')";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        var_dump($result);
    }
    else
    echo "Data inserted successfully";

    
}
?>
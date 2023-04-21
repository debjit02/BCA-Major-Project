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
    $bio = $_POST['bio'];




    //sql query to insert data into database
    $sql = "INSERT INTO registration (firstname,lastname,email,pass,phone,gender,bio) VALUES('$firstname','$lastname','$email','$pass','$phone','$gender','$bio')";
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        var_dump($result);
    }
    else
    echo "Data inserted successfully";

    
}
?>
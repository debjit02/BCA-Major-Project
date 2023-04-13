<?php
//Checking the connection
include "database_connection.php";
//creating database if not exixts
include "database_creation.php";


//fetching data from the html form in registration.html file

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES)) {

    //     // Fetch the data from the form fields
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $bio = $_POST['bio'];



    //     //Fetching image file from the html form
    $imageName = $_FILES['image']['name'];
    $imageSize = $_FILES['image']['size'];
    $imageTemp = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    //     // Read the file data into a binary string
    $imageData = file_get_contents($imageTemp);

    //     // Escape special characters in the binary string
    $escapedData = mysqli_real_escape_string($conn, $imageData);

    //sql query to insert data into database
    $sql = "INSERT INTO clinic.registration (firstname,lastname,email,pass,phone,gender,bio,iname,idata) VALUES('$firstname','$lastname','$email','$pass','$phone','$gender','$bio','$imageName','$escapedData')";
    $result = mysqli_query($conn, $sql);

    
}
?>
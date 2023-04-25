<?php
//Checking the connection
include "database_connection.php";
//creating database if not exists
include "database_creation.php";

//fetching data from the html form in registration.html file
if ($_SERVER['REQUEST_METHOD']) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM registration WHERE email ='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // header('Location: ../Index.html');
        ?>
        <script>
            alert("Email already registered!");
            window.location.replace("../Index.html")
            
        </script>
        
        <?php
        // Redirect to index.html after showing the alert message
        
        // exit;
    } else {
        // Fetch the data from the form fields
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $pass = $_POST['password'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        //sql query to insert data into database
        $sql = "INSERT INTO registration (firstname,lastname,email,pass,phone,gender,habitat) VALUES('$firstname','$lastname','$email','$pass','$phone','$gender','$address')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            var_dump($result);
        } else {
            // Redirect to home.html after successful registration
            header('Location: ../Internal/home.html');
            exit;
        }
    }
}
?>

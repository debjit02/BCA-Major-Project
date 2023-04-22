<?php
// Include the database connection file
include "database_connection.php";

if ($_SERVER['REQUEST_METHOD']) {
    // Retrieve the email and password from the form data
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Hash the password
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    // Retrieve the user's information from the database
    $sql = "SELECT * FROM registration WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Check if the email exists in the database
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $dbpass = $row['pass'];



        // Check if the password is correct
        echo $password;
        echo "<br>";
        echo $dbpass;
        if ($dbpass == $password) {
            // Login successful, redirect to the dashboard page
            header('Location: ../Internal/home.html');
            // echo '<script> window.location.href"../Internal/home.html" </script>';
            exit;
        } else {
            // Login failed, show an error message
            echo 'Invalid password.';
        }
    } else {
        // Login failed, show an error message
        echo 'Invalid email.';
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
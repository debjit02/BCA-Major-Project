<?php
require('../PHP/database_connection.php');
// require('../PHP/login.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LifeCare Multispeciality Hospital</title>
  <link rel="shortcut icon" href="../Images/Logos/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/nav.css">
  <!-- <script src="Js/Script.js"></script> -->
</head>
<?php
 if ($_SESSION)
//  print_r($_SESSION);
// var_dump($_SESSION);
{
?>
<body id="main-body">
  <?php
include('navbar.php');

?>
<form action="../PHP/operation.php" method="post">
        <button class="btn btn-outline-success" type="submit" name="action" value="Logout">Logout</button>
      </form>
    
<!-- <nav id="nav-bar">
    <div id="nav-container">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="appointment.php" >Book an appointment</a></li>
      </ul>
      <?php

      ?>
    </div>
  </nav> -->

    
</body>

</html>
<?php
}
else
{
header('location:login.php');
}

?>
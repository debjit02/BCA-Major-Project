<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/nav.css">
</head>

<body>

  <nav>
    <img src="../Images/Assets/logo.png" alt="">
    <div class="nav-container">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a <?php
        if (isset($_SESSION['username'])) {
          ?> href="appointment.php" <?php
        } else {
          ?>
              href="./Internal/login.php" <?php

        }
        ?>>Book an appointment</a></li>
        <li><a href="">Contact Us</a></li>

      </ul>
      <?php

      ?>
    </div>
    <div class="button">
      <form action="../PHP/operation.php" method="post">
        <button class="btn " type="submit" name="action" value="Logout">Logout</button>

        <!-- View profile dropdown -->
        <!-- <label for="profile">Your Profile</label>

        <select name="cars" id="profile">
          <option value="volvo"></option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select> -->
      </form>
    </div>
  </nav>
</body>
<footer>
  <?php
  // include('socials_bars.html');
  ?>
</footer>

</html>
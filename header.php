<?php

  session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Login Page</title>
  </head>

  <body>
    <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a> </li>
        <li><a href="#">Portfolio</a> </li>
        <li><a href="#">About Me</a> </li>
        <li><a href="#">Contact</a> </li>
      </ul>


        <img src="img/logo.png" alt="logo" class="">



        <h3> Please Sign In</h3>
        <div class="signin">
            <?php
              if (isset($_SESSION['userId'])) {
                  echo '<form class="" action="includes/logout.inc.php" method="post">
                          <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                  }
                    else {
                      echo '<form class="" action="includes/login.inc.php" method="post">
                              <input type="text" name="mailuid" placeholder="Username/E-mail..">
                              <input type="password" name="pwd" placeholder="Password"><br>
                              <button class="btn" type="submit" name="login-submit">Login</button>
                            </form>';
                          }
              ?>
      </div>
  
          <a href="signup.php" class="signup">Signup</a>
  </nav>

</header>

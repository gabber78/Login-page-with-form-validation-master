<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
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

      <a href="#">
        <img src="img/logo.png" alt="logo" class="logo">
      </a>

    <form>
        <h3> Please Sign In</h3>
        <div class="form">
            <?php
              if (isset($_SESSION['userId'])) {
                  echo '<form class="login-form" action="includes/logout.inc.php" method="post">
                          <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                  }
                    else {
                      echo '<form class="login-form" action="includes/login.inc.php" method="post">
                              <input type="text" name="mailuid" placeholder="Username/E-mail..">
                              <input type="password" name="pwd" placeholder="Password">
                              <button type="submit" name="login-submit">Login</button>
                            </form>';
                          }
              ?>
      </div>
    </form>
          <br>
          <a href="signup.php" class="signup">Signup</a>
  </nav>

</header>

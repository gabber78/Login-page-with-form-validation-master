<?php
  require('header.php');


 ?>

  <main>
    <section>
      <h1>Signup</h1>
      <!-- php error handle -->
      <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo 'Fill in all fields!';
            } elseif ($_GET['error'] == "invalidmail") {
                echo 'Invalid user name and email!';
            } elseif ($_GET['error'] == "invaliduid") {
                echo 'Invalid user name!';
            } elseif ($_GET['error'] == "invalidmail") {
                echo 'Invalid e-mail!';
            } elseif ($_GET['error'] == "passwordcheck") {
                echo 'Your password does not match!';
            } elseif ($_GET['error'] == "duplicateduser") {
                echo 'Username already taken!';
            }
          }
            elseif ($_GET['signup'] == "success") {
              echo 'Signup successfull!';
            }
      ?>
        <form class="register-form" action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="text" name="mail" placeholder="E-mail">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd-repeat" placeholder="Repeat Password">

          <button type="submit" name="signup-submit">Signup</button>

        </form>
    </section>

  </main>


<?php

  require('footer.php');

 ?>

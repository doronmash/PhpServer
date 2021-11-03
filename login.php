<?php
  include_once 'header.php';
  require_once 'includes/dbh.inc.php';
  require_once 'includes/functions.inc.php';

  if(isset($_COOKIE["userId"]) && isset($_COOKIE["sessionId"])){
    // echo $_COOKIE["userId"] . " " . $_COOKIE["sessionId"];

    checkSession($conn,$_COOKIE["userId"], $_COOKIE["sessionId"]);

 }
 ?>

  <section class="signup-form">
    <!-- <h2>Log In</h2> -->
    <div class="signup-form-form">
      <form action="includes/login.inc.php" method="post">
        <div class="box">
          <label class="label"for="text">Username/Email: </label>
          <input type="text" name="uid" placeholder="Username/Email...">
        </div>
        <div class="box">
          <label class="label"for="text">Password: </label>
          <input type="password" name="pwd" placeholder="Password...">
        </div>
        <button type="submit" name="submit">Log In</button>
        <input type="checkbox" name="rememberMe" value="ch"> Remember me

      </form>
    </div>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo"<p>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "wronglogin"){
          echo"<p>Incorrect login information!</p>";
        }
      }
     ?>
  </section>


<!-- <style>
  .signup-form-form .password{
      padding: 50px;
      font-size: 500%;

  }



</style> -->
  <?php
    include_once 'footer.php';
   ?>

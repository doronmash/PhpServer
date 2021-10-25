<?php
  include_once 'header.php';
 ?>


  <section class="signup-form">
    <!-- <h2>Sign Up</h2> -->
    <div class="signup-form-form">
      <br></br>
      <!-- <form action="includes/signup.inc.php" method="post" id="code-form">
        <input type="text" name="email" placeholder="Email...">
        <button type="sendCode" name="sendCode">Get Code</button>
      </form>

      <br></br><br></br><br></br><br></br> -->

      <form action="includes/signup.inc.php" method="post" id="signup-form">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="Uid" placeholder="Username...">
        <div class="tooltip">
          <input type="password" name="pwd" placeholder="Password..." >
          <span style="font-size:20px" class="tooltiptext"><li><b>Password must be</b></li><li>at least 4 characters</li><li>at least 1 number</li><li>at least 1 letter</li></span>
       </div>

       <div class="tooltip">
         <input type="password" name="pwdRepeat" placeholder="Repeat password...">
         <span style="font-size:20px" class="tooltiptext"><li><b>Password must be</b></li><li>at least 4 characters</li><li>at least 1 number</li><li>at least 1 letter</li></span>
      </div>

        <input type="text" name="code" placeholder="Code...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    </div>




    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<br></br><br></br>";
          echo"<p><b>Fill in all fields!</b></p>";
        }
        else if($_GET["error"] == "invaliduid"){
          echo "<br></br><br></br>";
          echo"<p><b>Choose a proper username!</b></p>";
        }
        else if($_GET["error"] == "invaliemail"){
          echo "<br></br><br></br>";
          echo"<p><b>Choose a proper email!</b></p>";
        }
        else if($_GET["error"] == "invalidpass"){
          echo "<br></br><br></br>";
          echo"<p><b>Invalid password try again</b></p>";
        }
        else if($_GET["error"] == "passwordsdontmatch"){
          echo "<br></br><br></br>";
          echo"<p><b>Passwords doesnt match!</b></p>";
        }
        else if($_GET["error"] == "usernametaken"){
          echo "<br></br><br></br>";
          echo"<p><b>Username already taken!</b></p>";
        }
        else if($_GET["error"] == "stmtfailed"){
          echo "<br></br><br></br>";
          echo"<p><b>Something went wrong, try again!</b></p>";
        }
        else if($_GET["error"] == "none"){
          echo "<br></br><br></br>";
          echo"<p><b>You have signed up!</b></p>";
          echo "<p> you can now <a href='login.php'>Log in</a></p>";
        }
      }
     ?>
  </section>


  <style>

  .tooltip {
    position: relative;
    display: inline-block;
  }

  .tooltip .tooltiptext {
    visibility: hidden;
    width: 220px;
    background-color: #fff;
    color: #555;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.7s;
  }

  .tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 10px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
  }

  .tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
  }
  </style>

  <?php
    include_once 'footer.php';
   ?>

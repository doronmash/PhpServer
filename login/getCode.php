<?php
  include_once 'header.php';
 ?>

  <section class="code-form">
    <!-- <h2>Sign Up</h2> -->
    <div class="code-form-form">
      <br></br>
      <form action="includes/code.inc.php" method="post" id="code-form">
        <input type="text" name="email" placeholder="Email...">
        <button type="sendCode" name="sendCode">Get Code</button>
      </form>
    </div>

    <?php
      if (isset($_GET["error"])) {
        // echo"<p>Fill in all fieldaaas!</p>";

        if ($_GET["error"] == "emptyinput") {
          echo"<p>Fill in all fields!</p>";
        }

        else if($_GET["error"] == "invalidemail"){
          echo "<br></br><br></br>";
          echo"<p><b>Choose a proper email!</b></p>";
        }

      }
     ?>
  </section>



  <?php
    include_once 'footer.php';
   ?>

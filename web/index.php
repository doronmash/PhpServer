<?php
  include_once 'header.php';
  require_once 'functions.inc.php';

  logToConsole("check 1");
  $dbopts = parse_url(getenv('DATABASE_URL'));
  logToConsole($dbopts["user"]);
  logToConsole($dbopts["pass"]);
  logToConsole($dbopts["host"]);
  logToConsole($dbopts["port"]);
  logToConsole($dbopts["path"]);

  $app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
                 array(
                  'pdo.server' => array(
                     'driver'   => 'pgsql',
                     'user' => $dbopts["user"],
                     'password' => $dbopts["pass"],
                     'host' => $dbopts["host"],
                     'port' => $dbopts["port"],
                     'dbname' => ltrim($dbopts["path"],'/')
                     )
                 )
  );

  $app->get('/db/', function() use($app) {
    $st = $app['pdo']->prepare('SELECT name FROM test_table');
    $st->execute();

    $names = array();
    while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
      $app['monolog']->addDebug('Row ' . $row['name']);
      $names[] = $row;
    }

    return $app['twig']->render('database.twig', array(
      'names' => $names
    ));
  });

 ?>


<section class="index-intro">
  <?php
  echo "doron login system";
    if (isset($_SESSION["useruid"])) {
      echo"<p>Hello there ". $_SESSION["useruid"] . "</p>";
    }
    else {
      // echo "<li><a href='signup.php'>Sign up</a></li>";
      // echo "<li><a href='login.php'>Log in</a></li>";
    }
   ?>
  <!-- <h1>This Is An Introduction</h1>
  <p>Here is an important paragraph</p> -->
</section>

<?php
  include_once 'footer.php';
 ?>

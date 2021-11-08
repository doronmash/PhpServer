<?php
require_once 'log.inc.php';

logToConsole("-> import");
require('../vendor/autoload.php');
logToConsole("<- import");

// $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

$dbopts = parse_url(getenv('DATABASE_URL'));

logToConsole("-> app");
$app = new Silex\Application();
logToConsole("<- app");

$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
   array(
    'pdo.server' => array(
       'driver' => 'pgsql',
       'user' => $dbopts["user"],
       'password' => $dbopts["pass"],
       'host' => $dbopts["host"],
       'port' => $dbopts["port"],
       'dbname' => ltrim($dbopts["path"],'/')
       )
   )
);

// $app->get('/db/', function() use($app) {
//   $st = $app['pdo']->prepare('SELECT email FROM code');
//   $st->execute();
//
//   $names = array();
//   while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
//     $app['monolog']->addDebug('Row ' . $row['email']);
//     $names[] = $row;
//   }
//
//   return $app['twig']->render('database.twig', array(
//     'names' => $names
//   ));
// });

// if (!$conn){
//   die("Connection failed: " . mysqli_connect_error());
// }

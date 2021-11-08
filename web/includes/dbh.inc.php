<?php
// // $serverName = "localhost";
// // $dBUsername = "id17769391_root";
// // $dBPassword = "GCl_XR5?tL#oj8u7";
// // $dBName = "id17769391_phpproject01";
//
// $serverName = "localhost";
// $dBUsername = "id17769391_dorondata1";
// $dBPassword = "O=d|J5ih&rz-\sqv";
// $dBName = "id17769391_dorondata";
// //O=d|J5ih&rz-\sqv
//
// // $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
//
// $dbopts = parse_url(getenv("DATABASE_URL"));
// $app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
//                array(
//                 'pdo.server' => array(
//                    'driver' => 'pgsql',
//                    'user' => $dbopts["user"],
//                    'password' => $dbopts["pass"],
//                    'host' => $dbopts["host"],
//                    'port' => $dbopts["port"],
//                    'dbname' => ltrim($dbopts["path"],'/')
//                    )
//                )
// );
//
// $app->get('/db/', function() use($app) {
//   $st = $app['pdo']->prepare('SELECT name FROM test_table');
//   $st->execute();
//
//   $names = array();
//   while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
//     $app['monolog']->addDebug('Row ' . $row['name']);
//     $names[] = $row;
//   }
//
//   return $app['twig']->render('database.twig', array(
//     'names' => $names
//   ));
// });
//
// // if (!$conn){
// //   die("Connection failed: " . mysqli_connect_error());
// // }

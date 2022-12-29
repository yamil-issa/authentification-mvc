<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoSphere - shop</title>
</head>
<body>
<?php
   session_start();
   require_once('./model/Connection.php');
   $pdoBuilder = new Connection();
   $db = $pdoBuilder->getDb();
   if (
    ( isset($_GET['ctrl']) && !empty($_GET['ctrl']) ) &&
    ( isset($_GET['action']) && !empty($_GET['action']) )
   ) {
    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];
   }
   else {
    $ctrl = 'category';
    $action = 'display';
   }
   require_once('./controller/' . $ctrl . 'Controller.php');
   $ctrl = $ctrl . 'Controller';
   $controller = new $ctrl($db);
   $controller->$action();
?>
</body>
</html>

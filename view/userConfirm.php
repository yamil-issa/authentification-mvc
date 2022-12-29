<?php
require("../model/Connection.php");
require("../model/User.php");
require("../model/UserManager.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$postalCode = $_POST['postalCode'];
$city = $_POST['city'];

if (!empty($email) && !empty($password) && !empty($firstName) && !empty($lastName) && !empty($address) && !empty($postalCode) && !empty($city)) {
    $donnees = array(
       'password'=>$password,
       'email'=>$email,
       'firstName' =>$firstName,
       'lastName' =>$lastName,
       'address' =>$address,
       'postalCode' =>$postalCode,
       'city' =>$city,
          );

    $user = new User($donnees);

    $db = new Connection();

    $manager = new UserManager($db->getDb());

    $manager->create($user);



    echo "l'utilisateur a été creé";
} else {
    echo "une erreur est survenue";
}

?>
    
</body>
</html>

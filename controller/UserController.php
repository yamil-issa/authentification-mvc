<?php

class UserController
{
    private $userManager;
    private $user;

    public function __construct($db1)
    {
        require('./model/User.php');
        require_once('./model/UserManager.php');
        $this->userManager = new UserManager($db1);
        $this->db = $db1 ;
    }
    public function login()
    {
        $page = 'login';
        require('./view/default.php');
    }

    public function doLogin()
    {
       
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = false;

        if (
            (isset($email) && !empty($email)) &&
            (isset($password) && !empty($password))
        ) {
            $req = "SELECT * FROM user WHERE email = ? AND password = ?";

            $res = $this->userManager->getUserManagerDb()->prepare($req);
            $res->execute(array($email, $password));

            if ($res->rowCount() > 0) {
                $result = true;
                header('Location: index.php');
            }else {
                echo"identifiants incorrects";
            }
        } else {
            echo "erreur";
        }


        if ($result) {
            $info = "Connexion reussie";
            $_SESSION['user'] = $result;
            $page = 'home';
        } else {
            $info = "Identifiants incorrects.";
            $page = 'login';
        }
        require('./view/default.php');
    }

    public function userList(){
        $users_tab = $this->userManager->findAll();
        $page = 'userList';
        require('./view/default.php');
  
   }


  public function createAccount()
  {
      $page = 'createAccount';
      require('./view/default.php');
  }

 public function doCreate()
 {
     $email = $_POST['email'];
     $lastName = $_POST['lastName'];
     $firstName = $_POST['firstName'];
     $address =  $_POST['address'];
     $postalCode = $_POST['postalCode'];
     $city = $_POST['city'];
     $password = $_POST['password'];

     $donnees = array(
         'password'=>$password,
         'email'=>$email,
         'firstName' =>$firstName,
         'lastName' => $lastName,
         'address' => $address,
         'postalCode' => $postalCode,
         'city' => $city,
      );
     $this->user = new User($donnees);

     $this->userManager->create($this->user);
     echo "l'utilsateur a été crée";
 }
 
}

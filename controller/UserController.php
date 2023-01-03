<?php

class UserController
{
    private $userManager;
    private $user;
    private $db;

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
    public function logout()
    {
        session_start();
        session_destroy();
        header("location: index.php");
        exit();
    }

    public function doLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (
            (isset($email) && !empty($email)) &&
            (isset($password) && !empty($password))
        ) {
            $req = "SELECT * FROM user WHERE email = ?";


            $res = $this->userManager->getUserManagerDb()->prepare($req);
            $res->execute(array($email));
        } else {
            echo "erreur";
        }

        $result = $res->fetch();
        if ($result) {
            $passwordHash = $result[2];
            if (password_verify($password, $passwordHash)) {
                $info = "Connexion reussie";
                $_SESSION['user'] = $result[3];
                $page = 'home';
            } else {
                $info = "ERROR : login or password incorrect !";
                $page = 'login';
            }
        } else {
            $info = "ERROR : login or password incorrect !";
            $page = 'login';
        }
        require('./view/default.php');
    }

    public function userList()
    {
        $users_tab = $this->userManager->findAll();
        $page = 'userList';
        require('./view/default.php');
    }

   public function unauthorized()
   {
       $page = 'unauthorized';
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
     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

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
     $info = "l'utilsateur a été crée";
     $page = 'login';
     require('./view/default.php');
 }
}

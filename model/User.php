<?php

class User
{
    private $id;
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $address;
    private $postalCode;
    private $city;
    private $role;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $this->$key=$value;
        }
    }


    //getters et setters
    final public function getId()
    {
        return  $this->id;
    }
    final public function setId($id1)
    {
        $this->id=$id1;
    }
    final public function getFirstName()
    {
        return  $this->firstName;
    }


    final public function setFirstName($name)
    {
        $this->firstName=$name;
    }

    final public function getLastName()
    {
        return  $this->lastName;
    }

    final public function setLastName($lName)
    {
        $this->lastName=$lName;
    }

    final public function getPassword()
    {
        return $this->password;
    }
    final public function setPassword($userPassword)
    {
        $this->password=$userPassword;
    }

    final public function getEmail()
    {
        return $this->email;
    }

    final public function setEmail($mail)
    {
        $this->email=$mail;
    }
    final public function getAddress()
    {
        return $this->address;
    }

    final public function setAddress($userAddress)
    {
        $this->address=$userAddress;
    }
    final public function getCity()
    {
        return $this->city;
    }
    final public function setCity($userCity)
    {
        $this->city=$userCity;
    }
    final public function getPostalCode()
    {
        return $this->postalCode;
    }
    final public function setPostalCode($pCode)
    {
        $this->postalCode=$pCode;
    }
    final public function getRole()
    {
        $this->role;
    }
    final public function setRole($userRole)
    {
        $this->role=$userRole;
    }
}

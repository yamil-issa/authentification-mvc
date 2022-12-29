<?php

class UserManager
{
    private $db;
    public function __construct($db1)
    {
        $this->db = $db1;
    }
    public function login(User $user)
    {
        $id = $user->getId();
        $req = $this->db->prepare("SELECT * FROM users WHERE id=$id");
        return $req->fetch();
    }

    public function create(User $user)
    {  
        try {
            $req = $this->db->prepare(
                "INSERT INTO user (lastName, firstName, email, adress, postalCode, city, password) VALUES ( ?, ?, ?, ?, ?, ?, ?)"
            );
            $req->execute(
                array(
                $user->getLastName(),
                $user->getFirstName(),
                $user->getEmail(),
                $user->getAddress(),
                $user->getPostalCode(),
                $user->getCity(),
                $user->getPassword()
                )
            );
        } catch(PDOException $Exception) {
            echo $Exception->getCode();
        }
    }
    public function findAll()
    {
        $req = $this->db->prepare(
            'SELECT *
 FROM users'
        );
        $req->execute();
        return $req->fetchAll();
    }
    final public function findOne($id)
    {
        $req = $this->db->prepare(
            "SELECT * FROM users WHERE id=$id"
        );
        $req->execute();
        return $req->fetchAll();
    }
    final public function update(User $user)
    {
        $id = $user->getId();
        $req = $this->db->prepare(
            "UPDATE users WHERE id=$id"
        );
        $req->execute();
        return $req->fetchAll();
    }
    final public function delete(User $user)
    {
        //$req = $this->db->prepare("DELETE FROM `user`");
    }
}
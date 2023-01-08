<?php

require_once("classes/User.php");

class UserDAO implements UserDAOinterface {

    private $conn;
    private $url;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function create(User $user)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (name, lastname, email, password) VALUES (:name, :lastname, :email, :password)");
    

          $stmt->bindValue(":name", $user->getname());
          $stmt->bindValue(":lastname", $user->getlastname());
          $stmt->bindValue(":email", $user->getemail());
          $stmt->bindValue(":password", $user->getpassword());
    
          $stmt->execute();
    }


}
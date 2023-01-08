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
    
          $stmt->bindParam(":name", $user->getname());
          $stmt->bindParam(":lastname", $user->getlastname());
          $stmt->bindParam(":email", $user->getemail());
          $stmt->bindParam(":password", $user->getpassword());
    
          $stmt->execute();
    }


}
<?php

require_once("classes/User.php");

class UserDAO implements UserDAOinterface {

    private $conn;
    private $url;

    public function __construct(PDO $conn) 
    {
        $this->conn = $conn;
    }

    //Função para criar o usuario
    public function create(User $user)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (name, lastname, email, password) VALUES (:name, :lastname, :email, :password)");
    

          $stmt->bindValue(":name", $user->getname());
          $stmt->bindValue(":lastname", $user->getlastname());
          $stmt->bindValue(":email", $user->getemail());
          $stmt->bindValue(":password", $user->getpassword());
    
          $stmt->execute();
    }

    //Função pegar o usuario da DB e reconstruir ele localmente
    public function buildUser($data) 
    {

      $user = new User();

      $user->setid($data["id"]);
      $user->setname($data["name"]);
      $user->setlastname($data["lastname"]);
      $user->setemail($data["email"]);
      $user->setpassword($data["password"]);

      return $user;

    }


    //Função para buscar o email na DB
    public function GetAccountByEmail($email) 
    {

        if($email != "") 
        {
  
          $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
          
          $stmt->bindValue(":email", $email);
  
          $stmt->execute();
  
          if($stmt->rowCount() > 0) {
            $data = $stmt->fetch();
            $user = $this->buildUser($data);
            return $user;
          } else {return false;}
  
        }
  
        return false;
  
    }

    
    //Função para fazer autenticar o login
    public function AuthUserLogin($email, $password) 
    {

        $user = new User();
        $user = $this->GetAccountByEmail($email);
        if($user) {
          if (password_verify($password, $user->getpassword())){
            $token = $user->generateToken();
            $_SESSION["token"] = $token;
            $user->settoken($token);
            return true;
          }
          else{return false;}
        }
    }
}
<?php
require_once("db.php");
require_once("url.php");
require_once("dao/UserDAO.php");


$type = filter_input(INPUT_POST, "type"); // DEFINIR SE O USUARIO TENTOU FAZER REGISTRO OU LOGIN
$userDao = new UserDAO($conn, $BASE_URL);

if($type === "register") //SE O USUARIO TENTOU FAZER REGISTRO
{

    //pegando as informações que o usuario colocou
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, "password");

    // verificar se tudo ta preenchido
    if($name && $lastname && $email && $password) 
    {
        //verificar se ja existe email cadastrado
        if ($userDao->GetAccountByEmail($email) === false){

         $user = new User();
         $finalPassword = password_hash($password, PASSWORD_DEFAULT);
         $userToken = $user->generateToken();
         $user->setname($name);
         $user->setlastname($lastname);
         $user->setemail($email);
         $user->setpassword($finalPassword);
         $user->settoken($userToken);
         $userDao->create($user);
        }
        else{
            //TODO: Exibir mensagem: Esse email já está em uso
            echo "Esse email já está em uso!";
        }
    }
    else{
        //TODO: Exibir mensagem: Preencha todos os campos
        echo "preencha todos os campos!";
    }
}
elseif($type === "login") // SE O USUARIO TENTOU FAZER LOGIN
{
    //pegando as informações que o usuario colocou
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

    //Verificando se a conta existe & checando se a senha está correta
    if($userDao->AuthUserLogin($email, $password))
    {echo "Login feito com sucesso!";}
    else{echo "Login ou Senha incorreta!";}
}
?>

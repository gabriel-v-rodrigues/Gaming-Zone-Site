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

    //Debugando Variaveis
    echo $name . "\n";
    echo $lastname . "\n";
    echo $email . "\n";
    echo $password . "\n";
    echo $type . "\n";

    // verificar se tudo ta preenchido
    if($name && $lastname && $email && $password) 
    {
        //TODO: VERIFICAR SE EMAIL JA EXISTE NA DB

        $user = new User();
        $finalPassword = password_hash($password, PASSWORD_DEFAULT);
        $user->setname($name);
        $user->setlastname($lastname);
        $user->setemail($email);
        $user->setpassword($finalPassword);
        $userDao->create($user);

    }
}
elseif($type === "login") // SE O USUARIO TENTOU FAZER LOGIN
{
    //pegando as informações que o usuario colocou
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

    // Debugando Variaveis
    echo $email . "\n";
    echo $password . "\n";
    echo $type . "\n";

    //TODO: VERIFICAR AUTENTICAÇÃO NA DB E FAZER LOGIN
}
?>

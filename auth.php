<?php
require_once("db.php");
require_once("url.php");

$type = filter_input(INPUT_POST, "type"); // DEFINIR SE O USUARIO TENTOU FAZER REGISTRO OU LOGIN
  // tipo do form
if($type === "register") //SE O USUARIO TENTOU FAZER REGISTRO
{
    //pegando as informações que o usuario colocou
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, "password");

    //debugando variaveis
    echo $name . "\n";
    echo $lastname . "\n";
    echo $email . "\n";
    echo $password . "\n";
    echo $type . "\n";

    // verificar se tudo ta preenchido
    if($name && $lastname && $email && $password) 
    {
        //TODO: VERIFICAR SE EMAIL JA EXISTE NA DB
        //TODO: CRIAR USUARIO

    }
}
elseif($type === "login") // SE O USUARIO TENTOU FAZER LOGIN
{
    //pegando as informações que o usuario colocou
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

    echo $email . "\n";
    echo $password . "\n";
    echo $type . "\n";

    //TODO: VERIFICAR AUTENTICAÇÃO NA DB E FAZER LOGIN
}
?>

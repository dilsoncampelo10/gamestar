<?php
session_start();
require_once "../dao/UserDaoMysql.php";
require_once "connect.php";

$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_POST,'lastname',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$pass = filter_input(INPUT_POST,'pass');

$userDao = new UserDaoMysql($conn);

if($name && $email && $pass){
    //Criando objeto User
    $user = new User();
    $user->setName($name);
    $user->setLastname($lastname);
    $user->setEmail($email);
    $user->setPassword($pass);

    //Adicionando user ao banco
    $userDao->add($user);

    $_SESSION['register'] = "Usuário cadastrado com sucesso";
    header("Location: ../index.php");
    exit();
    
} else{
    header("Location: ../register.php");
    exit();
}
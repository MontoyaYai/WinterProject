<?php

if (isset($_POST["submit"])){

    $name= $_POST["name"];
    $email= $_POST["email"];
    $username= $_POST["ID"];
    $password= $_POST["password"];
    $confirmPassword= $_POST["passwordconfirm"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptyInputSignup($name, $email, $username, $password, $confirmPassword)!==false){
        header("location: ../LoginSystem/signup.php?error=emptyInput");
        exit();
    }

    if (invalidUid($username)!==false){
        header("location: ../LoginSystem/signup.php?error=InvalidUsername");
        exit();
    }
    if (invalidEmail($email)!==false){
        header("location: ../LoginSystem/signup.php?error=InvalidEmail");
        exit();
    }
    if (pwdMatch($password,$confirmPassword)!==false){
        header("location: ../LoginSystem/signup.php?error=PasswordsNotMatch");
        exit();
    }
    if (uidExits($conn, $username) !== false){
        header("location: ../LoginSystem/signup.php?error=UsernameExists");
        exit();
    }

    createUser($conn, $name, $email, $username, $password, $confirmPassword);


}else{
    header("location: ../LoginSystem/signup.php");
    exit();

}
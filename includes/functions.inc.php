<?php

function emptyInputSignup($name, $email, $username, $password, $confirmPassword){
    $result;
    if (empty($name)|| empty($email)|| empty($username) || empty($password) || empty($confirmPassword)){
        $result =true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidUid($username){
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result =true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result =true;
    }else{
        $result=false;
    }
    return $result;
}

function pwdMatch($password,$confirmPassword){
    if($password!==$confirmPassword){
        $result =true;
    }else{
        $result=false;
    }
    return $result;
}

function uidExits($conn, $username, $email){
   $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?";";
}


<?php
include_once('../../init.php');
$userLogin=$_POST['login'];
$userPassword=$_POST['password'];
if(userLoginCheck($userLogin)){
    $fields=[
        'user_login' => $userLogin,
        'user_password' => $userPassword
    ];
    userRegister($fields);
    echo true;
}
else
    echo false;


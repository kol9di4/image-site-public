<?php
include_once('../../init.php');

$login = $_POST['login'];
$password = $_POST['password'];
$id = userLogin($login,$password);
if($id>0){
    $_SESSION['user_id'] = $id;
    echo true;
}
else
    echo false;



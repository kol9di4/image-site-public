<?php
function userName($id_user) : string{
    $sql = "SELECT user_login FROM users WHERE id_user=$id_user";
    $query = dbQuery($sql);
    return $query->fetchAll()[0]["user_login"];
}
function userLogin($login, $password) : int{
    $sql = "SELECT id_user FROM users WHERE user_login = '$login' AND user_password = '$password'";
    $query = dbQuery($sql);
    return $query->fetchAll()[0]["id_user"]??-1;
}
function userLoginCheck($login) : bool{
    $sql = "SELECT id_user FROM users WHERE user_login = '$login'";
    $query = dbQuery($sql);
    return count($query->fetchAll())>0?false:true;
}
function userRegister(array $fields) : bool{
    $sql = "INSERT users (user_login, user_password) VALUES (:user_login, :user_password)";
    dbQuery($sql, $fields);
    return true;
}
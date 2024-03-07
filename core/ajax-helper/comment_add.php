<?php
include_once('../../init.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields = ['id_image'=>$_POST['id'], 'id_user'=>$_SESSION['user_id'],'comment_text'=>$_POST['text']];
    comentAdd($fields);
}
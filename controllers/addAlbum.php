<?php
include_once('init.php');

if(isset($_SESSION['user_id'])){
    $pageTitle = 'Добавление нового альбома';
    $pageContent = template('views/albums/v_add_album');
}
else{
    header("Location: index.php");
    exit;
}
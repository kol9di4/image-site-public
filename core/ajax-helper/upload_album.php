<?php
include_once('../../init.php');


$arr = $_POST;

$fields = ['id_user' => $_SESSION['user_id'],
 'album_name' => trim($_POST['album_name']),
  'album_description'=> trim($_POST['album_description'])
];
albumAdd($fields);

<?php
include_once('../../init.php');


$fields = [
  'album_name' => trim($_POST['album_name']),
  'album_description' => trim($_POST['album_description']),
  'id_album'=> $_POST['id_album']
];
albumUpdate($fields);

<?php
include_once('../../init.php');


$fields = [
  'id_album'=> $_POST['id_album']
];
albumDelete($fields);

<?php
include_once('../../init.php');


$fields = [
  'id_image'=> $_POST['id_image']
];
imageDelete($fields);

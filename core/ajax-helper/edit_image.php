<?php
include_once('../../init.php');


$file_arr = $_FILES;
$text_arr = $_POST;

$image_fields = [
    'image_name_text' => $text_arr['image_name_text'],
    'image_description' => $text_arr['image_description'],
    'id_image' => $text_arr['id_image']
];
imageUpdate($image_fields);
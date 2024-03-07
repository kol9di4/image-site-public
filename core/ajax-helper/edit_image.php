<?php
include_once('../../init.php');


$texArr = $_POST;

$imageFields = [
    'image_name_text' => $textArr['image_name_text'],
    'image_description' => $textArr['image_description'],
    'id_image' => $textArr['id_image']
];
imageUpdate($imageFields);
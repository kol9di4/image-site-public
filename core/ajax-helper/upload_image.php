<?php
include_once('../../init.php');


$file_arr = $_FILES;
$text_arr = $_POST;
$album_id = $text_arr['id_album']??albumLast($_SESSION['user_id']);
if ($_FILES['image_file']['type'] == "image/gif")
    $random_name = mt_rand(1000, 100000).'.gif';
if ($_FILES['image_file']['type'] == "image/jpeg")
    $random_name = mt_rand(1000, 100000).'.jpg';
if ($_FILES['image_file']['type'] == "image/png")
    $random_name = mt_rand(1000, 100000).'.png';
if ($_FILES['image_file']['type'] == "image/webp")
    $random_name = mt_rand(1000, 100000).'.webp';
$image_fields = [
    'id_album' => $album_id,
    'image_name' => $random_name, 
    'image_name_text' => $text_arr['image_name_text'],
    'image_description' => $text_arr['image_description']
];
imageAdd($image_fields);
copy($file_arr['image_file']['tmp_name'], '../../assets/img/' .$random_name);
echo $album_id;
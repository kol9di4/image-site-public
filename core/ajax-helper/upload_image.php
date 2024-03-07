<?php
include_once('../../init.php');


$fileArr = $_FILES;
$textArr = $_POST;
$albumId = $textArr['id_album']??albumLast($_SESSION['user_id']);
if ($_FILES['image_file']['type'] == "image/gif")
    $randomName = mt_rand(1000, 100000).'.gif';
if ($_FILES['image_file']['type'] == "image/jpeg")
    $randomName = mt_rand(1000, 100000).'.jpg';
if ($_FILES['image_file']['type'] == "image/png")
    $randomName = mt_rand(1000, 100000).'.png';
if ($_FILES['image_file']['type'] == "image/webp")
    $randomName = mt_rand(1000, 100000).'.webp';
$image_fields = [
    'id_album' => $albumId,
    'image_name' => $randomName, 
    'image_name_text' => $textArr['image_name_text'],
    'image_description' => $textArr['image_description']
];
imageAdd($image_fields);
copy($fileArr['image_file']['tmp_name'], '../../assets/img/' .$randomName);
echo $albumId;
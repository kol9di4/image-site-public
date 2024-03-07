<?php
include_once('../../init.php');


$id = $_POST['idImage'];
$likeType = $_POST['likeType'];

likeAdd([
    'id_image' => $id,
    'id_user' => $_SESSION['user_id'],
    'like_type' => $likeType
]);
echo json_encode([
    'likeType'=>likeCompare($id,$_SESSION['user_id']),
    'like'=>likesCount($id),
    'disLike'=>disLikesCount($id)
]);
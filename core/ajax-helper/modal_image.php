<?php
include_once('../../init.php');


$id = $_POST['id_image'];
$comments=comentsAll($id);
$comments= template('../../views/comments/v_comments', [
	'comments' => $comments
]); 
$commentsCount = comentCount($id);
echo json_encode([
	'comments' => $comments,
	'commentsCount' => $commentsCount
]);
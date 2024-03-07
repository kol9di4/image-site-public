<?php
session_start();

$id = $_GET['id_album'];
$imagesInAlbum = imagesInAlbum($id);
$hasImgs = $imagesInAlbum != null;
$pageContent = '';
$idUser = $_SESSION['user_id']??0;

if($hasImgs){
	foreach ($imagesInAlbum as $image)
	{
		$comments = comentsAll($image['id_image']);
		$pageContent .= template('views/image/v_modal', [
			'image' => $image,
			'comments' => $comments,
			'idUser' => $idUser
		]); 
	}
	$album = albumInfo($id);
	$pageContent .= template('views/albums/v_album', [
		'imagesInAlbum' => $imagesInAlbum,
		'id'=>$id,
		'album'=>$album,
		'idUser'=>$idUser
	]);
	$pageTitle = albumName($id);
}
else{
	header('HTTP/1.1 404 Not Found');
	$pageContent = template('views/errors/v_404');
}
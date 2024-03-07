<?php
session_start();

$id = $_GET['id_album'];
$imagesInAlbum = imagesInAlbum($id);
$hasImgs = $imagesInAlbum !==false;
$pageContent = '';
$imagesCard = '';
$album = albumInfo($id);
$idUser = $_SESSION['user_id']??0;

if($hasImgs && (int)$album['id_user']===(int)$idUser){
	foreach ($imagesInAlbum as $image)
	{
		$imagesCard .= template('views/edit/v_image', [
			'image' => $image
		]);
	}
	
	$pageContent .= template('views/edit/v_album', [
		'album'=>$album,
        'imagesCard'=>$imagesCard
	]);
	$pageTitle = 'Редактирование: '.albumName($id);
}
else{
	header('HTTP/1.1 404 Not Found');
	$pageContent = template('views/errors/v_404');
}
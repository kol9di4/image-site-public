<?php

$albums = albumsAll();
$idUser = $_SESSION['user_id']??0;
$pageTitle = 'All albums homepage';
$pageContent = template("views/albums/v_index", [
	'albums' => $albums,
	'idUser' => $idUser
]);


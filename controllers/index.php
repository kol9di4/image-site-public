<?php

$albums = albumsAll();
$id_user = $_SESSION['user_id']??0;
$pageTitle = 'All albums homepage';
$pageContent = template("views/albums/v_index", [
	'albums' => $albums,
	'id_user' => $id_user
]);


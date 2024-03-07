<?php

    function albumsAll() : array{
		$sql = "SELECT * FROM albums ORDER BY album_dt_add DESC";
		$query = dbQuery($sql);
		return $query->fetchAll();
	}
	function albumName($id_album) : string{
		$sql = "SELECT album_name FROM albums WHERE id_album=$id_album";
		$query = dbQuery($sql);
		return $query->fetchAll()[0]['album_name'];
	}
	function albumInfo($id_album) : array{
		$sql = "SELECT * FROM albums WHERE id_album=$id_album";
		$query = dbQuery($sql);
		return $query->fetchAll()[0];
	}
	function albumAdd(array $fields) : bool{
		$sql = "INSERT albums (id_user, album_name, album_description) VALUES (:id_user, :album_name, :album_description)";
		dbQuery($sql, $fields);
		return true;
	}
	function albumUpdate(array $fields) : bool{
		$sql = "UPDATE albums SET album_name = '".$fields['album_name']."', album_description = '".$fields['album_description']."' 
		WHERE id_album = ".$fields['id_album'];
		dbQuery($sql);
		return true;
	}
	function albumDelete(array $fields) : bool{
		$sql = "DELETE FROM albums WHERE id_album = ".$fields['id_album'];
		dbQuery($sql);
		return true;
	}
	function albumLast($id_user) : int{
		$sql = "SELECT MAX(id_album) FROM albums WHERE albums.id_user=$id_user";
		$query = dbQuery($sql);
		return $query->fetch()['MAX(id_album)'];
	}
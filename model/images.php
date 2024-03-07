<?php

	function imagesInAlbum($id_album) : array{
		$sql = "SELECT * FROM images Where id_album = $id_album ORDER BY id_image ASC";
		$query = dbQuery($sql);
		return $query->fetchAll();
	}
	function imageAdd(array $fields) : bool{
		$sql = "INSERT images (id_album, image_name, image_name_text, image_description) 
					VALUES (:id_album, :image_name, :image_name_text, :image_description)";
		dbQuery($sql, $fields);
		return true;
	}
	function imageUpdate(array $fields) : bool{
		$sql = "UPDATE images SET image_name_text = '".$fields['image_name_text']."', image_description = '".$fields['image_description']."' 
		WHERE id_image = ".$fields['id_image'];
		dbQuery($sql);
		return true;
	}
	function imageDelete(array $fields) : bool{
		$sql = "DELETE FROM images WHERE id_image = ".$fields['id_image'];
		dbQuery($sql);
		return true;
	}
	function imagesFisrtInAlbum($id_album) : string{
		$sql = "SELECT * FROM images Where id_album = $id_album ORDER BY id_image LIMIT 1";
		$query = dbQuery($sql);
		return $query->fetchAll()[0]['image_name'];
	}
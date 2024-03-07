<?php
	
    function comentsAll($id_image) : array{
		$sql = "SELECT * FROM comments WHERE id_image = $id_image ORDER BY comment_dt_add";
		$query = dbQuery($sql);
		return $query->fetchAll();
	}
	function comentCount($id_image) : int{
		$sql = "SELECT COUNT(id_comment) FROM comments WHERE id_image=$id_image";
		$query = dbQuery($sql);
		return $query->fetchAll()[0]["COUNT(id_comment)"];
	}
	function comentAdd(array $fields) : bool{
		$sql = "INSERT comments (id_image, id_user, comment_text) VALUES (:id_image, :id_user, :comment_text)";
		dbQuery($sql, $fields);
		return true;
	}
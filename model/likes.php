<?php

    function likesCount($id_image) : string{
		$sql = "SELECT COUNT(id_like) FROM likes WHERE id_image = $id_image AND like_type=1";
		$query = dbQuery($sql);
		return $query->fetchAll()[0]["COUNT(id_like)"];
	}
	function disLikesCount($id_image) : string{
		$sql = "SELECT COUNT(id_like) FROM likes WHERE id_image = $id_image AND like_type=-1";
		$query = dbQuery($sql);
		return $query->fetchAll()[0]["COUNT(id_like)"];
	}
	function likeAdd(array $fields){
        $like_now = likeCompare($fields['id_image'],$fields['id_user']);
		if($like_now !== 22){
			if ($like_now === 0)
				$sql = "UPDATE likes SET like_type = ".$fields['like_type']." WHERE id_image = ".$fields['id_image']." AND id_user = ".$fields['id_user'];
			if ($like_now === (int)$fields['like_type'])
				$sql = "UPDATE likes SET like_type = 0 WHERE id_image = ".$fields['id_image']." AND id_user = ".$fields['id_user'];
			if ($like_now === (int)$fields['like_type']*-1)
				$sql = "UPDATE likes SET like_type = ".$fields['like_type']." WHERE id_image = ".$fields['id_image']." AND id_user = ".$fields['id_user'];
			dbQuery($sql);
		}
		else{
			$sql = "INSERT likes (id_image, id_user, like_type) VALUES (:id_image, :id_user, :like_type)";
			dbQuery($sql, $fields);
		}
	}
    function likeCompare($id_image,$id_user):int{
        $sql = "SELECT like_type FROM likes WHERE id_image = $id_image and id_user = $id_user";
		$query = dbQuery($sql);
		$likeType = $query->fetchAll();
        return $likeType[0]['like_type']??22;
    }
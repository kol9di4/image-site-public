<?php
$userName = userName($_SESSION['user_id']);

$header = template("views/header/v_login", [
	'username' => $userName
]);
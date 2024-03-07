<?php
include_once('init.php');

$cname = $_GET['c'] ?? 'index';
$path = "controllers/$cname.php";
$pageTitle = 'Ошибка 404';
$pageContent = '';

$header = template('views/header/v_index');
if(checkControllerName($cname) && file_exists($path)){
	include_once($path);
}
else{
	$pageContent = template('views/errors/v_404');
}
if(isset($_SESSION['user_id']))
	include_once("controllers/header.php");

$footer = template('views/footer/v_index');

$html = template('views/base/v_main', [
	'title' => $pageTitle,
	'header'=>$header,
	'content' => $pageContent,
	'footer' => $footer
]);

echo $html;

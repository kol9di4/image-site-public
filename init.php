<?php
session_start();

const BASE_URL = '';
const DB_HOST = 'localhost';
const DB_NAME = 'site_images';
const DB_USER= 'root';
const DB_PASS = '';

include_once('core/db.php');
include_once('core/system.php');

include_once('model/albums.php');
include_once('model/comments.php');
include_once('model/images.php');
include_once('model/likes.php');
include_once('model/users.php');

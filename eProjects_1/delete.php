<?php
session_start();

require_once('utyls/utility.php');
require_once('db/dbhelper.php');


	$id = getGet('id');

	$sql = "DELETE FROM book WHERE `book`.`id` = '$id'";
	execute($sql);
	header('Location: books.php');
	die();
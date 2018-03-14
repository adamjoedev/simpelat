<?php

print_r($_GET);

$db = new PDO('mysql:host=localhost;dbname=kkw;charset=utf8mb4', 'root', '');

if(isset($_GET['table']) and isset($_GET['id']))
{
	$table = $_GET['table'];
	$id 	= $_GET['id'];
	$berhasil = $db->query("UPDATE `$table` SET `status` = 'sudah diperbaiki' WHERE `$table`.`id` = $id;");
}
header("location: /login_bootstrap/on-admin/bank_data/index.php");

?>
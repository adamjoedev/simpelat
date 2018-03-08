<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {

	header('location:./../login.php');
	exit();
}
?>
<html>
<head>

<meta name="author" content="Suckittrees">
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="shortcut icon" href="http://suckittrees.com/favicon.png">
<link rel="icon" href="http://suckittrees.com/favicon.png">
</head>
<h2>Hallo Admin <?=$_SESSION['nama'];?> Apakabar ?</h2>
<body>

</body>
</html>

<a href="./../logout.php">Logout</a>
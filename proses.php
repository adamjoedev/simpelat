<?php
	$napem		=$_POST["napem"];
	$almt		=$_POST["almt"];
	$noken		=$_POST["noken"];
	$norang		=$_POST["norang"];
	$nomes		=$_POST["nomes"];
	$merk		=$_POST["merk"];
	$jenis		=$_POST["jenis"];
	$panjang	=$_POST["panjang"];
	$tinggi		=$_POST["tinggi"];
	$lebar		=$_POST["lebar"];
	$wb			=$_POST["wb"];
	$sumbu		=$_POST["sumbu"];
	$foh		=$_POST["foh"];
	$roh		=$_POST["roh"];
	
	
	include "koneksi.php";
	$query = "INSERT INTO tabel_ujipertama(
		napem,
		almt,
		noken,
		norang,
		nomes,
		merk,
		jenis,
		panjang,
		tinggi,
		lebar,
		wb,
		sumbu,
		foh,
		roh
	) values ('$napem','$almt','$noken','$norang','$nomes','$merk','$jenis','$panjang','$tinggi','$lebar','$wb','$sumbu','$foh','$roh')";

	$result = mysql_query($query) or die('Gagal Menyimpan Data <meta http-equiv=refresh content=1;url=index.php>' );
	//echo "DATA BERHASIL DISIMPAN";
	//echo "<meta http-equiv=refresh content=1;url=index.php>' );
	
?>

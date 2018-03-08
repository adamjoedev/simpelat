<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = "INSERT INTO tabel_biodata VALUE ('', '$_POST[napem]', '$_POST[almt]', '$_POST[noken]', '$_POST[norang]', '$_POST[nomes]', '$_POST[merk]', '$_POST[jenis]', '$_POST[panjang]', '$_POST[tinggi]', '$_POST[lebar]', '$_POST[wb]', '$_POST[sumbu]', '$_POST[foh]', '$_POST[roh]')";
    $db->exec($sql);
}

header("location:index.php");
?>
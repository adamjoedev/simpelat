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
<center>Tanggal Hari Ini :	
<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
<span id="clock"></span> 
<?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
 echo "Minggu";
}elseif ($hari=="Monday") {
 echo "Senin";
}elseif ($hari=="Tuesday") {
 echo "Selasa";
}elseif ($hari=="Wednesday") {
 echo "Rabu";
}elseif ($hari=="Thursday") {
 echo("Kamis");
}elseif ($hari=="Friday") {
 echo "Jum'at";
}elseif ($hari=="Saturday") {
 echo "Sabtu";
}
?>,
<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
 echo " Januari ";
}elseif ($bulan=="February") {
 echo " Februari ";
}elseif ($bulan=="March") {
 echo " Maret ";
}elseif ($bulan=="April") {
 echo " April ";
}elseif ($bulan=="May") {
 echo " Mei ";
}elseif ($bulan=="June") {
 echo " Juni ";
}elseif ($bulan=="July") {
 echo " Juli ";
}elseif ($bulan=="August") {
 echo " Agustus ";
}elseif ($bulan=="September") {
 echo " September ";
}elseif ($bulan=="October") {
 echo " Oktober ";
}elseif ($bulan=="November") {
 echo " November ";
}elseif ($bulan=="December") {
 echo " Desember ";
}
$tahun=date('Y');
echo $tahun;

?>
<title>Halaman Menu Utama</title>
<p>MENU UTAMA ADMINISTATOR E-PAPPER</p>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto);
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300);

h1 {
	text-align: center;
	color: white;
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
	font-size: 48px;
	background: firebrick;
	margin: 20px 30px 10px;
	padding: 20px 10px;
	border-radius: 5px;
}

p {
	text-align: center;
	font-family: 'Roboto', serif;
	font-size: 20px;
	border-top: 2px solid #f18c16;
    border-bottom: 2px solid #f18c16;
    margin: 10px 50px;
    padding: 8px 0;
}
 <title>Menu Utama</title>
 <style type="text/css">
 ul, li{
  margin: 0;
  padding: 0;
  list-style-type: none;
 }

 ul.utama li{
  display: inline-block;
  width: 300px;
  height: 50px;
  background: #f18c16;
  text-align: center;
 }
 ul li:hover{
  background: #333;
 }

 ul.utama a{
   color: #fff;
   text-decoration: none;
   line-height: 30px;
 }
 ul.sub{
  display: none;
 }
 ul.utama li:hover ul.sub{
  display: block;
  position: absolute;
 }
 ul.sub li{
  display: block;
  margin-top: 1px;
 }


 </style>
</head>
<body>
<center> 
<ul class="utama">
 <li><a href="#"><a href="./../ujipertama.php">Uji Berkala Pertama</a></a></li>
 <li><a href="#"><a href="./../ujiberkala.php">Uji Berkala </a></a>

  

 </li>
 <li><a href="#"><a href="./../laporan.php">Bank Data </a></li>
 <li><a href="#"><a href="./../logout.php">Logout</a></li>
 
 
</ul>
</center>
<style type="text/css">
            
</body>

</html>
</body>
</html>
</html>


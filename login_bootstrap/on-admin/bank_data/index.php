<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DASHBOARD</title>
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	
	<!-- Template Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<!-- CSS Reset -->
	<link rel="stylesheet" href="css/normalize.css">
	
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="css/milligram.min.css">
	
	<!-- Main Styles -->
	<link rel="stylesheet" href="css/styles.css">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div class="navbar">
		<div class="row">
			<div class="column column-30 col-site-title">
			<a href="#" class="site-title float-left">
			<img height="50px"  src="/login_bootstrap/assets/img/logo.png">
			<i>SIPELAT</i></a></div>
			
			
			<div class="column column-30">
				<div class="user-section"><a href="#">

				<iframe src="http://free.timeanddate.com/clock/i65fyd8v/n108/tlid38/fn6/fs16/fcfff/tct/pct/ftb/pa8/tt0/tw1/th1/ta1/tb4" frameborder="0" width="208" height="58" allowTransparency="true"></iframe>

					
				</a></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="sidebar" class="column">
			<h5>Dashboard Mekanik</h5> <h1><?=isset($_SESSION['users']);?></h1>
			<ul>
				<li><a href="/login_bootstrap/on-admin/alat_uji/index.html"><em class="fa fa-cogs"></em> PERBAIKAN ALAT UJI  </a></li>
				<li><a href="/login_bootstrap/on-admin/alat_lain/form_alatlain.html"><em class="fa fa-cogs"></em> PERBAIKAN PERALATAN LAIN</a></li>
				<li><a href="/login_bootstrap/on-admin/perawatan/index.php"><em class="fa fa-inbox"></em> INVENTORY ALAT </a></li>
				<li><a href="/login_bootstrap/on-admin/bank_data/index.php"><em class="fa fa fa-home"></em> BANK DATA PERBAIKAN</a></li>
				<li><a href="/login_bootstrap/logout.php"><em class="fa fa-sign-out"></em> LOGOUT</a></li>
				
			</ul>
		</div>
		<section id="main-content" class="column column-offset-20">
			<div class="row grid-responsive">
				<div class="column page-heading">
					<div class="large-card">
					<script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.4857" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/file-uploader/fileuploader.js?v=3.3.4857"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.4857" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("4", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("4", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.alterTexts(undefined);
	JotForm.clearFieldOnHide="disable";
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"formPerbaikan","qid":"1","text":"FORM PERBAIKAN PERALATAN","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"namaPemeriksa","qid":"3","subLabel":"","text":"Nama Pemeriksa","type":"control_textbox"},{"description":"","name":"tanggalPeriksa","qid":"4","text":"Tanggal Periksa","type":"control_datetime"},null,{"description":"","name":"levelKerusakan","qid":"6","subLabel":"","text":"Level Kerusakan","type":"control_dropdown"},{"description":"","name":"kerusakanPada","qid":"7","subLabel":"","text":"Kerusakan Pada","type":"control_textarea"},{"description":"","name":"uploadFoto8","qid":"8","subLabel":"","text":"Upload Foto Kerusakan  ","type":"control_fileupload"},{"description":"","name":"catatanPemeriksa","qid":"9","subLabel":"","text":"Catatan Pemeriksa","type":"control_textarea"},{"description":"","name":"namaPeralatan","qid":"10","subLabel":"","text":"Nama Peralatan","type":"control_textarea"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"formPerbaikan","qid":"1","text":"FORM PERBAIKAN PERALATAN","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"description":"","name":"namaPemeriksa","qid":"3","subLabel":"","text":"Nama Pemeriksa","type":"control_textbox"},{"description":"","name":"tanggalPeriksa","qid":"4","text":"Tanggal Periksa","type":"control_datetime"},null,{"description":"","name":"levelKerusakan","qid":"6","subLabel":"","text":"Level Kerusakan","type":"control_dropdown"},{"description":"","name":"kerusakanPada","qid":"7","subLabel":"","text":"Kerusakan Pada","type":"control_textarea"},{"description":"","name":"uploadFoto8","qid":"8","subLabel":"","text":"Upload Foto Kerusakan  ","type":"control_fileupload"},{"description":"","name":"catatanPemeriksa","qid":"9","subLabel":"","text":"Catatan Pemeriksa","type":"control_textarea"},{"description":"","name":"namaPeralatan","qid":"10","subLabel":"","text":"Nama Peralatan","type":"control_textarea"}]);}, 20); 
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.4857" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.4857" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.4857" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
<style type="text/css">
.myButton2 {
	-moz-box-shadow: 0px 10px 14px -7px #3e7327;
	-webkit-box-shadow: 0px 10px 14px -7px #3e7327;
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fc0000), color-stop(1, #f50e54));
	background:-moz-linear-gradient(top, #fc0000 5%, #f50e54 100%);
	background:-webkit-linear-gradient(top, #fc0000 5%, #f50e54 100%);
	background:-o-linear-gradient(top, #fc0000 5%, #f50e54 100%);
	background:-ms-linear-gradient(top, #fc0000 5%, #f50e54 100%);
	background:linear-gradient(to bottom, #fc0000 5%, #f50e54 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fc0000', endColorstr='#f50e54',GradientType=0);
	background-color:#fc0000;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #f71313;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:6px 12px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton2:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f50e54), color-stop(1, #fc0000));
	background:-moz-linear-gradient(top, #f50e54 5%, #fc0000 100%);
	background:-webkit-linear-gradient(top, #f50e54 5%, #fc0000 100%);
	background:-o-linear-gradient(top, #f50e54 5%, #fc0000 100%);
	background:-ms-linear-gradient(top, #f50e54 5%, #fc0000 100%);
	background:linear-gradient(to bottom, #f50e54 5%, #fc0000 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f50e54', endColorstr='#fc0000',GradientType=0);
	background-color:#f50e54;
}
.myButton2:active {
	position:relative;
	top:1px;
}


    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
	.myButton {
	-moz-box-shadow: 0px 10px 14px -7px #3e7327;
	-webkit-box-shadow: 0px 10px 14px -7px #3e7327;
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
	background:-moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-o-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:-ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352',GradientType=0);
	background-color:#77b55a;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:12px;
	font-weight:bold;
	padding:8px 8px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
	background:-moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-o-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:-ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a',GradientType=0);
	background-color:#72b352;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>
<?php


$db = new PDO('mysql:host=localhost;dbname=kkw;charset=utf8mb4', 'root', '');

$data = $db->query("select * from alat_uji")->fetchAll(PDO::FETCH_ASSOC);
$data2 = $db->query("select * from alat_lain")->fetchAll(PDO::FETCH_ASSOC);
$data3 = $db->query("select * from inventory")->fetchAll(PDO::FETCH_ASSOC);


?>
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto { display: block; float: none; text-align: left; width: inherit; } /*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>
<marquee><h3>Selamat Datang di Halaman Bank Data Perbaikan & Perawatan Peralatan serta Inventaris Alat</marquee></h3>
<br>
</br>
<h3>Tabel Data Perbaikan <i><b>Alat Uji</i></b></h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pemeriksa</th>
      <th scope="col">Tanggal Pemeriksaan</th>
      <th scope="col">Nama Alat</th>
	  <th scope="col">Kerusakan </th>
	  <th scope="col">Level Kerusakan</th>
	  <th scope="col">Foto Kerusakan</th>
	  <th scope="col">Catatan Pemeriksa</th>
	  <th scope="col">Status</th>
	  <th scope="col">Print Data</th>
	  <th scope="col">Hapus Data</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $k = 0;
  foreach($data as $row)
  {$k++;
	  ?>
    <tr>
      <th scope="row"><?=$k?></th>
      <td><?=$row['nama']?></td>
      <td><?=$row['tanggal']?></td>
      <td><?=$row['nama_alat']?></td>
	  <td><?=$row['kerusakan']?></td>
	  <td><?=$row['level']?></td>
	  <td><a href="/login_bootstrap/on-admin/foto/<?=$row['foto']?>">foto</a></td>
	  <td><?=$row['catatan']?></td>
	  <td>
	  <?php
	  if($row['status'] == "sudah diperbaiki")
	  {
		  print "Sudah Diperbaiki";
	  }else{
		  ?>
	  <a href="/login_bootstrap/on-admin/status.php?table=alat_lain&id=<?=$row['id']?>"class="myButton">Konfirmasi Perbaikan</a>
	  <?php
	  }
	  ?>
	  </td>
	  <td>
	  </td>
	  <td>
	  <a href="/login_bootstrap/on-admin/hapus.php?table=alat_uji&id=<?=$row['id']?>"class="myButton2">Hapus Data</a>
	  </td>
	</tr>
  <?php
  }?>
    
  </tbody>
</table>
<br>
<br>
</br>
<h3>Tabel Data Perbaikan <i><b>Peralatan Lain</b></i></h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pemeriksa</th>
      <th scope="col">Tanggal Pemeriksaan</th>
      <th scope="col">Nama Alat</th>
	  <th scope="col">Kerusakan </th>
	  <th scope="col">Level Kerusakan</th>
	  <th scope="col">Foto Kerusakan</th>
	  <th scope="col">Catatan Pemeriksa</th>
	  <th scope="col">Status</th>
	  <th scope="col">Print Data</th>
	   <th scope="col">Hapus Data</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $k = 0;
  foreach($data2 as $row)
  {$k++;
	  ?>
    <tr>
      <th scope="row"><?=$k?></th>
      <td><?=$row['nama']?></td>
      <td><?=$row['tanggal']?></td>
      <td><?=$row['nama_alat']?></td>
	  <td><?=$row['kerusakan']?></td>
	  <td><?=$row['level']?></td>
	  <td><a href="/login_bootstrap/on-admin/foto/<?=$row['foto']?>">foto</a></td>
	  <td><?=$row['catatan']?></td>
	  <td>
	  <?php
	  if($row['status'] == "sudah diperbaiki")
	  {
		  print "Sudah Diperbaiki";
	  }else{
		  ?>
	  <a href="/login_bootstrap/on-admin/status.php?table=alat_lain&id=<?=$row['id']?>"class="myButton">Konfirmasi Perbaikan</a>
	  <?php
	  }
	  ?>
	  </td>
	  <td>
	  </td>
	  <td>
	   <a href="/login_bootstrap/on-admin/hapus.php?table=alat_uji&id=<?=$row['id']?>"class="myButton2">Hapus Data</a>
	  </td>
    </tr>
  <?php
  }?>
  
  </tbody>
</table>

<br>
</br>
<h3>Tabel <i><b>Inventaris Peralatan</b></i></h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Alat</th>
      <th scope="col">Tanggal Pembelian</th>
      <th scope="col">Jenis Alat</th>
	  <th scope="col">Jumlah </th>
	  <th scope="col">Foto</th>
	  <th scope="col">Print Data</th>
	  <th scope="col">Hapus Data</th>
    </tr>
  </thead>
  <tbody>
    <?php
  $k = 0;
  foreach($data3 as $row)
  {$k++;
	  ?>
    <tr>
      <th scope="row"><?=$k?></th>
      <td><?=$row['nama_alat']?></td>
      <td><?=$row['tanggal']?></td>
      <td><?=$row['jenis']?></td>
	  <td><?=$row['jumlah']?></td>
	  <td><a href="/login_bootstrap/on-admin/foto/<?=$row['foto']?>">foto</a></td>
	  <td>

	  </td>
	  <td>
	  <a href="/login_bootstrap/on-admin/hapus.php?table=inventory&id=<?=$row['id']?>">Hapus</a>
	  </td>
    </tr>
  	  <?php
	  }
	  ?>
  </tbody>
</table>

						</div>
				</div>
			</div>
			
			
			</div>
			<p class="credit">SIPELAT 2018 ALLRIGHT RESERVED</a></p>
		</section>
	</div>
	
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart2 = document.getElementById("bar-chart").getContext("2d");
		window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart4 = document.getElementById("pie-chart").getContext("2d");
		window.myPie = new Chart(chart4).Pie(pieData, {
		responsive: true,
		segmentShowStroke: false
		});
		var chart5 = document.getElementById("radar-chart").getContext("2d");
		window.myRadarChart = new Chart(chart5).Radar(radarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.05)",
		angleLineColor: "rgba(0,0,0,.2)"
		});
		var chart6 = document.getElementById("polar-area-chart").getContext("2d");
		window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		segmentShowStroke: false
		});
	};
	</script>			

</body>
</html> 
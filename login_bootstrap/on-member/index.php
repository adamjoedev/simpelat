<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>DASHBOARD ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>


<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Sistem Informasi Pengujian Teknis	
					
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="ti-panel"></i>
                        <p>Dashboard Admin</p>
						<li>
                            <a href="./../logout.php">
								<i class="ti-settings"></i>
								<p>Logout</p>
                            </a>
                        </li>
                    </a>
                </li>
               
             
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard Admin</a>
					
					
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                      <h4>Tanggal Hari Ini</h4>	

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
(
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
)
                       
                              
                              
						
                    </ul>

                </div>
            </div>
        </nav>

<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Menu Utama Administrator</h4>
								<div class="content">
								
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
  background: #4875a5;
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
 <li><a href="#"><a href="./../input_data.php">Input Data Uji</a></a></li>

  

 </li>
 <li><a href="#"><a href="./../laporan.php">Bank Data </a></li>

 
 
</ul>
</center>
<style type="text/css">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="#">
                                            <i class=""></i>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="numbers">
                                            <p></p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class=""></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class=""></i> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="">
                                            <i class=""></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p></p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class=""></i> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="">
                                            <i class=""></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p></p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class=""></i> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-timer"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2015 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Selamat datang..!<b> di SIMPENT</b> - Sistem informasi pengujian teknis kendaraan bermotor kota Tangerang."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>

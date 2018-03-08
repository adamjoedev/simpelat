<!DOCTYPE html>
<html lang="en">
  <center><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
		<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	

	<!-- Custom styles for this template -->
	<link href="tema/css/agency.min.css" rel="stylesheet">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><font face="century gothic">SIPELAT </font> </a>
			<font color="#fffff"><i>"Sistem Informasi Perbaikan & Perawatan Alat"</i></font>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#services">Manfaat</a>
					</li>
					
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
					</li>
					
					</li>
				</ul>
			</div>
		</div>
	</nav>
	

  </head>
  <body background="tema/img/header-bg.jpg">
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div> 	
		
    <?php endif;?>

        <div class="outter-form-login">
		<div class="intro-text">
					
			</div>
        
            <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Halaman Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
				
                
                
            </form>
			
        </div>
    </div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<!-- Services -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<font size="6" font color="#fffff" font face="century gothic"><b>MANFAAT SIPELAT</b></font> <br>
					<font size="3" font color="#fffff" font face="century gothic"><i>Menghemat, Memfasilitasi  dan Aman</i></font>
				</div>
			</div>
			<br>
			<div class="row text-center">
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-coffee fa-stack-1x fa-inverse"></i>
            </span>
					<h4 class="service-heading"><font color="#fffff" font face="century gothic">Menghemat</font></h4>
					<p class="text-muted"><font color="#fffff" >Menghemat penggunaan kertas dalam melakukan pendataan perbaikan dan penyimpanan alat uji</font></p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-wifi fa-stack-1x fa-inverse"></i>
            </span>
					<h4 class="service-heading"><font color="#fffff" font face="century gothic">Memfasilitasi</font></h4>
					<p class="text-muted"><font color="#fffff">Memfasilitasi penguji dalam melakukan pendataan perbaikan dan penyimpanan alat</font></p>
				</div>
				<div class="col-md-4">
					<span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
            </span>
					<h4 class="service-heading"><font color="#fffff" font face="century gothic">Aman</font></h4>
					<p class="text-muted"><font color="#fffff">Semua Database aman karena ter-enkripsi password</font></p>
				</div>
			</div>
		</div>
	</section>
<br>
<br>
<br>
<br>
	<!-- About -->

	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase"><font color="#fffff">Tentang SIPELAT</font></h2>
					<h3 class="section-subheading text-muted">
						<strong><font color="#fffff">SIPELAT</strong> Merupakan sistem informasi perbaikan & perawatan alat uji <strong>SIPELAT</strong> didedikasikan untuk mewujudkan proyek Tugas Akhir dan untuk mengembangkan sistem informasi pada pengujian kendaraan bermotor Kota Tangerang.
					</h3>
				</div>
			</div>
		</div>
	</section>

	<hr>


	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="copyright">Copyright &copy; SIPELAT 2018</span>
				</div>
				<div class="col-md-4">
					
				</div>

			</div>
		</div>
	</footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </center></body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>Fix Top Navigation Bar</title>
	<!-- Bagian css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ilmudetil.css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<style>
		.recent{
			padding-top:20px;
			
		}
		.info-meta{
			padding-top: 10px;
			color:#9999;
		}
		a:focus, 
		a:hover {
			text-decoration: none;
			outline: none;
			color: #9c9c9c;
		}
		.footer-bottom {
			background-color:#3b5998;
			color:#fff;
			padding-top:10px;
			padding-bottom:10px;
		}
		
		
	</style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="clr1 active"><a href="index.html">Home</a></li>
				<li class="clr2 active"><a href="">Programming</a></li>
				<li class="clr3 active"><a href="">English</a></li>
				<li class="clr4 active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Learn French <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Level A1</a></li>
                        <li><a href="">Level A2</a></li>
                        <li><a href="">Level B1</a></li>
						<li><a href="">Level B2</a></li>
                    </ul>
                </li>
				<li class="clr5 active"><a href="">Programming Android</a></li>
				
			</ul>
			<form class="navbar-form navbar-right" role="search">
                <div class="input-group"  >
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						<a><button class="btn btn-primary pemisah-btnnav">Login</button></a>
						<a><button class="btn btn-primary">Daftar</button></a>
                    </div>
                </div>
            </form>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			  <div class="panel panel-default">
			   <div class="panel-body">
				  <h3>Latih Balita Anda Dalam Merangsang Saraf Motorik</h3>
					<div class="info-meta">
						<ul class="list-inline">
							<li><i class="fa fa-clock-o"></i> Jan 5, 2016 </li>
							<li><i class="fa fa-eye"></i>21k</li>
							<li><i class="fa fa-heart-o"></i>372</li>
							<li><i class="fa fa-user"></i> Posting by Ilmu Detil</li>
							<li class="pull-right">Category : Education</li>
						</ul>
					</div>
				  <hr>
				  
					<div class = "media">
					   <a class = "pull-left" href = "#">
						  <img class = "media-object " src = "images/education.jpg" width="100%" height="200px" >
					   </a>
					   
					   <div class = "media-body">
						  
						  <p>A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles).
						  A simple shell for an h1 to appropriately space out and segment sections of content on a page.
						  </p> 
						  <p>It can utilize the h1's default small element, as well as most other components (with additional styles).
							A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles). A simple shell for an h1 to appropriately space out and segment sections of content on a page.
						 </p>
						 
					   </div>
						
					
						<p style="text-align:right;">
							<button class="btn btn-primary">Read More</button>
						</p>
					</div>
					<hr>
					<h3>Latih Balita Anda Dalam Merangsang Saraf Motorik</h3>
					<div class="info-meta">
						<ul class="list-inline">
							<li><i class="fa fa-clock-o"></i> Jan 5, 2016 </li>
							<li><i class="fa fa-eye"></i>21k</li>
							<li><i class="fa fa-heart-o"></i>372</li>
							<li><i class="fa fa-user"></i> Posting by Ilmu Detil</li>
							<li class="pull-right">Category : Technology</li>
						</ul>
					</div>
				  <hr>
				  
					<div class = "media">
					   <a class = "pull-left" href = "#">
						  <img class = "media-object" src = "images/technology.jpg" width="300px" height="200px">
					   </a>
					   
					   <div class = "media-body">
						  <p>A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles).
						  A simple shell for an h1 to appropriately space out and segment sections of content on a page.
						  </p> 
						  <p>It can utilize the h1's default small element, as well as most other components (with additional styles).
							A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles). A simple shell for an h1 to appropriately space out and segment sections of content on a page.
						 </p>  
					   </div>
						
					
						<p style="text-align:right;">
							<button class="btn btn-primary">Read More</button>
						</p>
					</div>
					
			   </div>
			   
			</div>
		 </div>
     
	 
		<div class="col-sm-3">
			<div class="panel panel-default">
			   <div class="panel-heading"><h4 class="text-center">Latest News</h4></div>
			   <div class="panel-body">
					<div class="recent">
						<a href="#"><img class="img-responsive" src="images/sport.jpg" alt="" /></a>				
						<div class="info-meta">
							<ul class="list-inline">
								<li><i class="fa fa-clock-o"></i> Jan 5, 2016 </a></li>
								<li><i class="fa fa-eye"></i>21k</li>
								<li><i class="fa fa-heart-o"></i>372</li>
							</ul>
						</div>
						<h4>
							<a href="">Pertandingan Basket NBA berlangsung sangat sengit</a>
						</h4>
					</div>
					
					<div class="recent">
						<a href="#"><img class="img-responsive" src="images/technology.jpg" alt="" /></a>							
						<div class="info-meta">
							<ul class="list-inline">
								<li><i class="fa fa-clock-o"></i> Jan 5, 2016</li>
								<li><i class="fa fa-eye"></i>21k</li>
								<li><i class="fa fa-heart-o"></i>372</li>
							</ul>
						</div>
						<h4 class="entry-title">
							<a href="">Tip dan Trik dalam memilih laptop untuk penyuka game</a>
						</h4>
					</div><!--recent-->
				</div>
			</div>		
		</div>			
	</div>			
</div>
<!--FOOTER-->
	<div class="footer-bottom">
		<div class="container-fluid text-center">
			<p>Copyright &copy; 2016,  DTC. Developed by <a href="https://ilmu-detil.blogspot.com/">Pusat Ilmu</a></p>
		</div>
	</div>		
        <script src='assets/js/jquery.js'></script>
	<script src="assets/js/bootstrap.min.js"></script>				
</body>
</html>



<?php
include "../system/sistem.php";
$me = new me;

if(!$me->cek){
	header('location: login.php');
}

include "lain/header.php";
include "lain/item.php";
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Timeline</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap core CSS -->
		<link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="/tema/css/tl.css">

		<link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<?php nav(); ?>
		<div class="container isi">
			<div class="row">
				<div class="col-sm-4">
					<?php print_user($me); ?>
					<hr>
					<div class="kotak">
						<div class="bio">
							<?php
							$set = new crud_table('pengumuman','id');
							print $set->single("bio")['isi'];
							?>
						</div>
					</div>
					<hr>
				</div>
				<div class="col-sm-8">
					<div class="kotak">
						<h2><i class="fa fa-calendar"></i> Kegiatan</h2>
						<hr>
						<?php
						$data = new crud_table("kegiatan","id");
						foreach($data->read() as $val){
							?>
							<div class="item">
								<?=item_generator($val["isi"])?>
							</div>
							<?php
						}
						?>
					</div>

				</div>

			</div>
			<hr>
			<div class="copy text-center">
				C-king &copy; 2017
			</div>
		</div>


		<!-- Bootstrap core JavaScript -->
		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

	</body>

	</html>

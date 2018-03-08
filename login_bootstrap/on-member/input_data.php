<!DOCTYPE HTML>
<html>
<head>
	<title>Input Data Kendaraan</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/bootstrap.js"></script>
</head>
<body>


<div class="container">

	<div class="row"></div>
		<div class="col-sm-8">
			<div class="page-header"><h1 align="center">Form Indentifikasi Kendaraan Bermotor Uji Berkala </h1></div>
			<form class="form-horizontal" action="proses.php" method="POST" role="form">
			<div class="form-group">
				<label for="napem" class="control-label col-sm-2">Nama Pemilik</label>
				<div class="col-sm-7">
					<input type="text" name="napem" id="napem" class="form-control" placeholder="Inputkan Nama Pemilik" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="almt" class="control-label col-sm-2">Alamat Pemilik</label>
				<div class="col-sm-7">
					<input type="text" name="almt" id="almt" class="form-control" placeholder="Inputkan Alamat Lengkap " required>
				</div>
			</div>
	
			<div class="form-group">
				<label for="noken" class="control-label col-sm-2">Nomor Kendaraan</label>
				<div class="col-sm-7">
					<input type="text" name="noken" id="noken" class="form-control" placeholder="Inputkan Nomor Kendaraan">
				</div>
			</div>
			
			<div class="form-group">
				<label for="norang" class="control-label col-sm-2">Nomor Rangka</label>
				<div class="col-sm-7">
					<input type="text" name="norang" id="norang" class="form-control" placeholder="Inputkan Nomor Rangka">
				</div>
			</div>
			
			<div class="form-group">
				<label for="Nomes" class="control-label col-sm-2">Nomor Mesin</label>
				<div class="col-sm-7">
					<input type="text" name="nomes" id="nomes" class="form-control" placeholder="Inputkan Nomor Mesin">
				</div>
			</div>
			
			<div class="form-group">
				<label for="merk" class="control-label col-sm-2">Merk dan Tipe Kendaraan</label>
				<div class="col-sm-7">
					<input type="text" name="merk" id="merk" class="form-control" placeholder="Inputkan Merk/Tipe KB">
				</div>
			</div>
			
			
			<div class="form-group">
				<label for="jenis" class="control-label col-sm-2">Jenis Kendaraan</label>
				<div class="col-sm-2">
					<select class="form-control" name="jenis" id="jenis">
						
						<option value="Mobil Penumpang">Mobil Penumpang</option>
						<option value="Mobil Barang">Mobil Barang</option>
						<option value="Mobil Bus">Mobil Bus</option>
						<option value="Mobil Tangki">Mobil Tangki</option>
						<option value="Kendaraan Khusus">KB Khusus</option>
						<option value="Kereta Gandeng">Kereta Gandengan</option>
						<option value="Kereta Tempelan">Kereta Tempelan</option>
					
					</select>
				</div>
			</div>
			
			<div class="form-group">
				
				<div class="col-sm-7">
					<button id="submit" name="submit" class="btn btn-danger btn-block">Submit</button>
				</div>

			</div>
			
		</div>
</div>



</body>

</html>
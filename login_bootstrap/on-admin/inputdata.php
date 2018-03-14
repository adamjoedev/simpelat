<?php
function thumb($path,$s){
	$info = getimagesize($path);
	$size = array($info[0],$info[1]);
	
	if($info['mime']== 'image/jpeg'){
		$src = imagecreatefromjpeg($path);
	}elseif($info['mime']== "image/png"){
		$src = imagecreatefrompng($path);
	}
	$thumb = imagecreatetruecolor($s,$s);

	if($size[0]>=$size[1]){
		$k = ($size[0]-$size[1])/2.;
		$hasil = imagecopyresampled($thumb,$src,0,0,0+$k,0,$s,$s,$size[1],$size[1]);
	}else{
		$k = ($size[1]-$size[0])/2.;
		$hasil = imagecopyresampled($thumb,$src,0,0,0,0+$k,$s,$s,$size[0],$size[0]);
	}
// print_r($size); // print $k;
	return imagepng($thumb, $path);
	
}
function upload_file($nama_barunya){
	if(isset($_FILES['file'])){
		$file = $_FILES['file'];
		$file_name = $file['name'];
		$tipe = explode('.',$file_name)[1];
		
		$boleh = array('jpg');
		if (in_array($tipe,$boleh)){
			if($file['error']===0){
				if($file['size']<=20000000){
					$nama_baru = "ava_$nama_barunya.".$tipe;
					$lokasi = 'foto/'.$nama_baru;
					//print $lokasi;
					//imagecreatefromgif()
					if(move_uploaded_file($file['tmp_name'],$lokasi)){
						//print "mantap";
						thumb($lokasi,150);
//						print "<img src=\"".$lokasi."\">";

						
					}
				}
			}
		}
	}	
}


?>




<?php
print_r($_POST);
print_r($_FILES);
$data = new stdClass();
foreach($_POST as $k=>$val)
{	if($k != "q4_tanggalPeriksa")
	{
		$data->$k =htmlentities($val);
	}
}
$data->q4_tanggalPeriksa = $_POST["q4_tanggalPeriksa"];
$tgl = $data->q4_tanggalPeriksa['year']."-".$data->q4_tanggalPeriksa['month']."-".$data->q4_tanggalPeriksa['day'];


$db = new PDO('mysql:host=localhost;dbname=kkw;charset=utf8mb4', 'root', '');

$file = $_FILES['q8_uploadFoto8'];
		$file_name = ($file['name'][0]);
		$tipe = explode('.',$file_name)[1];
		
		$boleh = array('jpg','png',);
		if (in_array($tipe,$boleh)){
			if($file['error'][0]===0){
				if($file['size'][0]<=20000000){
					$file_name = base64_encode($file_name);
					$nama_baru = "ava_".time()."$file_name.".$tipe;
					$lokasi = 'foto/'.$nama_baru;
					//print $lokasi;
					//imagecreatefromgif()
					if(move_uploaded_file($file['tmp_name'][0],$lokasi)){
						//print "mantap";
//						print "<img src=\"".$lokasi."\">";

						
					}
				}
			}
		}

$berhasil = $db->query("
insert into alat_uji(
nama,
tanggal,
nama_alat,
kerusakan,
level,
foto,
catatan)

values(
'$data->q3_namaPemeriksa',
'$tgl',
'$data->q5_namaAlat',
'$data->q7_kerusakanPada',
'$data->q6_levelKerusakan',
'$nama_baru',
'$data->q9_catatanPemeriksa'
);");
if($berhasil){
	header("location: /login_bootstrap/on-admin/bank_data/index.php");

}
?>

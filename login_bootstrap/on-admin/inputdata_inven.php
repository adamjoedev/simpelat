
<?php
print_r($_POST);
print_r($_FILES);
$data = new stdClass();
foreach($_POST as $k=>$val)
{	if($k != "q5_tanggalPembelian")
	{
		$data->$k =htmlentities($val);
	}
}
$data->q5_tanggalPembelian = $_POST["q5_tanggalPembelian"];
$tgl = $data->q5_tanggalPembelian['year']."-".$data->q5_tanggalPembelian['month']."-".$data->q5_tanggalPembelian['day'];


$db = new PDO('mysql:host=localhost;dbname=kkw;charset=utf8mb4', 'root', '');

$file = $_FILES['q7_uploadFoto'];
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
insert into inventory(
nama_alat,
tanggal,
jenis,
jumlah,
foto
)

values(
'$data->q3_namaAlat',
'$tgl',
'$data->q4_jenisPeralatan',
'$data->q6_jumlah',
'$nama_baru'
);");
if($berhasil){
	header("location: /login_bootstrap/on-admin/bank_data/index.php");

}
?>

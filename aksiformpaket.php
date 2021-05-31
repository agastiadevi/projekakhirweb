<!DOCTYPE html>
<html>
<head>
	<title>input paket</title>
</head>
<body>

<?php
$servername = 'trunojoyopython.com';
$username = 'trunojoy_kuliah';
$password = 'unijoyo2021';
$database = 'trunojoy_hotel';
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$jenis = $_POST['jenis'];
$waktu = $_POST['waktu'];
$jenisbayar = $_POST['jenisbayar'];
$sql="INSERT into 07_pemesanan (nama, nomor_tlp,jns_paket, tgl_acara,jns_pembayaran) 
values('$nama','$nomor','$jenis','$waktu','$jenisbayar')";
if (empty($nama)or empty($nomor) or empty($waktu) or !is_numeric($nomor)) {
	echo "inputan tidak valid, mohon kembali isi form";
} else {
	$result = $conn->query($sql);
	echo "Record berhasil ditambahkan";
}
?>
<a href="index.php">Kembali Ke menu Utama</a>
</body>
</html>
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
$jns_paket = $_POST['jns_paket'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$status_bayar = $_POST['status_bayar'];
$sql="INSERT into 07_pengembalian(nama, jns_paket, tgl_sewa, tgl_pengembalian, status_bayar) 
values('$nama','$jns_paket', '$tgl_sewa', '$tgl_pengembalian', '$status_bayar')";
if (empty($nama)or empty($jns_paket) or empty($tgl_sewa) or empty($tgl_pengembalian) or empty($status_bayar)) {
	echo "inputan tidak valid, mohon kembali isi form";
} else {
	$result = $conn->query($sql);
	echo "Record berhasil ditambahkan";
}
?>
</body>
</html>
<?php 

// koneksi
$conn = new mysqli('trunojoyopython.com', 'trunojoy_kuliah', 'unijoyo2021', 'trunojoy_hotel');
// simpan data
if (isset($_POST['submit'])) {
 $nb = $_POST['jns_paket'];
 $hrg = $_POST['harga'];
 $qty = $_POST['bayar_dp'];
 $q = mysqli_query($conn, "INSERT INTO 07_pembayaran (jns_paket, harga, bayar_dp) VALUES ('$nb', '$hrg', '$qty')");

 if($q) {
  header('Location: admin-pembayaran.php');
 } else {
  echo "<script>alert('Gagal menambahkan data')</script>";
 }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dream Wedding</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
  
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><span>Dream</span> Wedding Organizer</a>
      </div>
    </div>
  </nav>

  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      <div class="profile-userpic">
        <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
      </div>
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">Admin</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
      <li><a href="admin-pesanan.php">Informasi Pesanan</a></li>
      <li><a class="active" href="admin-pembayaran.php">Pembayaran</a></li>
      <li><a href="form pengembalian.php">Form Pengembalian</a></li>
      <li><a href="admin-pengembalian.php">Pengembalian</a></li>
    </ul>
  </div><!--/.sidebar-->

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li class="active">sewa</li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Informasi Pembayaran</h1>
      </div>
    </div><!--/.row-->

    <div class="container mt-5 mx-auto">

 <div class="container mt-5 mx-auto">

  <div class="card mt-5">
   <div class="card-body mx-auto">
    <form method="POST" action="" class="form-inline mt-3">
     <label for="jns_paket">Jenis Paket </label>
     <select name="jns_paket" class="form-control mr-sm-2">
        <option value="paket A">Paket A</option>
        <option value="paket B">Paket B</option>
        <option value="paket C">Paket C</option>
      </select>
     <label for="harga">Harga </label>
     <input type="number" name="harga" id="harga" class="form-control mr-sm-2">
     <label>Bayar dp </label>
     <input type="number" name="bayar_dp" id="bayar_dp" class="form-control mr-sm-2">
     <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
    </form>
    <br>
    <table class="table table-bordered mt-5">
     <tr>
      <th>#</th>
      <th>Nama Barang</th>
      <th>Harga Satuan</th>
      <th>Qty</th>
      <th>Total</th>
     </tr>

     <?php
     // perintah tampil data
     $q = mysqli_query($conn, "SELECT * FROM 07_pembayaran");
     
     $total = 0;
     $tot_bayar = 0;
     $no = 1;

     while ($r = $q->fetch_assoc()) {
      // total adalah hasil dari harga x qty
      $total = $r['harga'] - $r['bayar_dp'];
      // total bayar adalah penjumlahan dari keseluruhan total
      $tot_bayar += $total;
     ?>

     <tr>
      <td><?= $no++ ?></td>
      <td><?= ucwords($r['jns_paket']) ?></td>
      <td><?= $r['harga'] ?></td>
      <td><?= $r['bayar_dp'] ?></td>
      <td><?= $total ?></td>
     </tr>

     <?php   
     }
     ?>

     <tr>
      <th colspan="4">Total Bayar</th>
      <th><?= $tot_bayar ?></th>
     </tr>

    </table>
   </div>
  </div>
 </div>

</body>
</html>

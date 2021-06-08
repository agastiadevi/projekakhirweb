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
			<li><a href="admin-pembayaran.php">Pembayaran</a></li>
			<li><a class="active" href="form pengembalian.php">Form Pengembalian</a></li>
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
				<h1 class="page-header">Form Pengembalian</h1>
			</div>
		</div><!--/.row-->

		<center>
		<section class="col-sm-6">
    		<form method="POST" action="actionkembali.php">
		    <label>Nama Pemesan : </label>
		    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
		    <br>
		    <label>Jenis Paket yang dipilih :</label>
		    <select name="jns_paket" class="form-control">
		    	<option value="Paket A">Paket A</option>
		        <option value="Paket B">Paket B</option>
		        <option value="Paket C">Paket C</option>
		    </select>
		    <br>
      		<label>Tanggal Acara : </label>
      		<input type="date" class="form-control" name="tgl_sewa">
      		<br>
      		<label>Tanggal pengembalian </label>
      		<input type="date" class="form-control" name="tgl_pengembalian">
      		<br>
      		<label>Jenis Pembayaran :</label>
      		<select name="status_bayar" class="form-control">
        		<option value="pilih">Pilih :</option>
        		<option value="Lunas">Lunas</option>
        		<option value="Dp">DP</option>
      		</select>
		<br>
      		<label>Jumlah barang </label>
      		<input type="text" class="form-control" name="jumlah_barang">
      		<br>
      		<input type="submit" name="Submit" value="Submit">
		
    		</form>
  		</section>
  		</center>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>	
</body>
</html>

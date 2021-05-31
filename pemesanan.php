<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wedding Organizer</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Pemesanan</h2>
      </div>
    </div>
  </section>

  <center>
    <h1>Form Pemesanan</h1>
  <section class="col-sm-4">
    <form method="POST" action="aksiformpaket.php">

      <label>Nama Pemesan : </label>
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda">
      <br>
      <label>Nomor Telepon : </label>
      <input type="number" class="form-control" name="nomor" placeholder="Masukkan Nomor Telepon">
      <br>
      <label>Jenis Paket yang dipilih :</label>
      <select name="jenis" class="form-control">
        <option value="Paket A">Paket A</option>
        <option value="Paket B">Paket B</option>
        <option value="Paket C">Paket C</option>
      </select>
      <br>
      <label>Tanggal Acara : </label>
      <input type="date" class="form-control" name="waktu">
      <br>
      <label>Jenis Pembayaran :</label>
      <select name="jenisbayar" class="form-control">
        <option value="pilih">Pilih :</option>
        <option value="lunas">Lunas</option>
        <option value="dp">DP</option>
      </select>
      <br>
      <input type="submit" name="Submit" value="Submit">
    </form>
   
  </section>
  </center>

</body>
</html>
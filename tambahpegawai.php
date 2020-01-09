<?php
require_once("config.php");

if(isset($_POST['tambah'])){

    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $jabatan = filter_input(INPUT_POST, 'jabatan', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $sidikjari = filter_input(INPUT_POST, 'sidikjari', FILTER_SANITIZE_STRING);

    // menyiapkan query
    $sql = "INSERT INTO pegawai (nama, jabatan, alamat, sidikjari) 
            VALUES (:nama, :jabatan, :alamat, :sidikjari)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
        ":jabatan" => $jabatan,
        ":alamat" => $alamat,
        ":sidikjari" => $sidikjari
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: timeline.php");
}
else if(isset($_POST['back'])){
    header("Location:timeline.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Pegawai Kelurahan</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.css" rel="stylesheet">
  <!-- Javascript -->


</head>

<body id="page-top">
<!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

<!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-2" src="img/logo.png" alt="">

<!-- Masthead Sub Heading -->
    <div class="container">
        <h2 class="masthead-subheading font-weight-normal">Tambah Pegawai</h2>
        <h2 class="masthead-subheading font-weight-normal">Kelurahan Sekayu</h2>
    </div>
<!-- About Section Button -->
<form action="" method="POST">

<div class="form-group">
    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required/>
</div>
<div class="form-group">
    <input class="form-control" type="text" name="sidikjari" placeholder="Sidik Jari" required/>
</div>

<div class="form-group">
    <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap" required/>
</div>
<div class="form-group">
    <select class="select-control" name="jabatan" placeholder="Jabatan" required/>
    <option value="">Pilih Jabatan</option>
    <option value="Lurah">Lurah</option>
    <option value="Pegawai ASN">Pegawai ASN</option>
    <option value="Pegawai Non-ASN">Pegawai Non-ASN</option>
</div>

<input type="submit" class="btn btn-success btn-block" name="tambah" value="Tambah Data" />
<input type="submit" class="btn btn-danger btn-block" name="back" value="Halaman Admin" />
</form>
        

 <!-- About Section -->
 <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container"></div>

  </header>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
</body>

</html>


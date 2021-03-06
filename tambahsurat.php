<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['tambah']))
{
    $nama = $_POST['nama'];
    $namasurat = $_POST['namasurat'];
    $nomorsurat = $_POST['nomorsurat'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $foto = $_POST['foto'];

    // include database connection file
    include_once("configg.php");

    // Insert user data into table
    $result = mysqli_query($db, "INSERT INTO surat(nama,namasurat,nomorsurat,kategori,tanggal,foto) VALUES('$nama','$namasurat','$nomorsurat','$kategori','$tanggal', '$foto')");

    // Show message when user added
    echo "User added successfully. ";
    //back to page
    header("Location:tampilsurat.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Kesekretariatan Kelurahan</title>

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
        <h2 class="masthead-subheading font-weight-normal">Kesekretariatan</h2>
        <h2 class="masthead-subheading font-weight-normal">Kelurahan Sekayu</h2>
    </div>
<!-- About Section Button -->
<form action="" method="POST">

<div class="form-group">
    <input class="form-control" type="text" name="nama" placeholder="Nama Pengaju" required/>
</div>

<div class="form-group">
    <input class="form-control" type="text" name="namasurat" placeholder="Nama Surat" required/>
</div>
<div class="form-group">
    <input class="form-control" type="text" name="nomorsurat" placeholder="Nomor Surat" required/>
</div>
<div class="form-group">
    <label class="container">Tanggal Surat Masuk</label>
    <input class="form-control" type="date" name="tanggal"required/>
</div>
<div class="form-group">
    <label class="container">Upload Foto JPG, PNG Maksimal 2MB</label>
    <input class="form-control" type="file" name="foto"/>
</div>
<div class="form-group">
    <select class="select-control" name="kategori" required/>
    <option value="">Pilih Kategori Surat</option>
    <option value="Surat Masuk">Surat Masuk</option>
    <option value="Surat Keluar">Surat Keluar</option>
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


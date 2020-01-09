<?php
if(isset($_POST['pegawai'])){
  header("location: absenpegawai.php");
}
else if(isset($_POST['tamu'])){
  header("location: absentamu.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Selamat Datang di Kelurahan Sekayu</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger"  href="#page-top">Kelurahan Sekayu</a>
    </div>
  </nav>
<!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
<!-- Home Section -->
    <section class="page-section bg-primary text-white mb-0" id="home">
  <div class="container">
    <div class="row">
<!--Kiri-->
    <div class="col-lg-auto ml-auto" style="padding:30px">
<!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-3" src="img/logo.png" alt="">
<!-- Masthead Button -->  
      <div class="container">
        <form action="" method="POST">
          </br><input type="submit" class="btn btn-success btn-block" name="pegawai" value="PEGAWAI" />
        </form>
      </div>
<!-- About Section Button -->
      <div class="text-center mt-8"></div>
    </div>
<!--Kanan-->
<div class="col-lg-auto ml-auto" style="padding:30px">
<!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-3" src="img/logo.png" alt="">
<!-- Masthead Button -->
      <div class="container">
        <form action="" method="POST">
          </br><input type="submit" class="btn btn-success btn-block" name="tamu" value="PENGUNJUNG" />
        </form>
      </div>
<!-- About Section Button -->
      <div class="text-center mt-8"></div>
  </div>
    </div>
  </header>



  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-1">Kelurahan Sekayu</h4>
          <h4 class="text-uppercase mb-4">Kota Semarang</h4>
          <p class="lead mb-0">Penyelenggara Pelayanan Publik</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Social Media</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="facebook.com/naufalrio">
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="twitter.com/naufalrio">
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="gmail.com/naufalrio">
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="instagram.com/naufalrio">
          </a>
        </div>

         <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Alamat</h4>
          <p class="lead mb-0">Alamat : Jl. Sekayu Raya No.200
            <br>Telepon : (024) 355.0953</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Official Section -->
  <section class="official py-4 text-center uppercase mb-4e">
    <div class="container">
      <small>Sekayu, Semarang Tengah, Semarang, Jawa Tengah, Indonesia </small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

</body>

</html>

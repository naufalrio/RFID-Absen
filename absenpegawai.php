<?php
if(isset($_POST['login'])){
  header("location: login.php");
}
else if(isset($_POST['back'])){
  header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi Pegawai Kelurahan</title>
     <link rel="stylesheet" href="css/freelancer.css" />
</head>
<body id="page-top">
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <form action="" method="POST">
                <input type="submit" class="btn btn-success btn-block" name="login" value="Admin" />
              </form>
            </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

<!-- Home Section -->
  <section class="page-section bg-primary text-white mb-0" id="home">
    <div class="container"></div>
  </section>
<!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-3" src="img/fingerprint.png" alt="">

<!-- About Section Button -->
        <h1>Letakkan Jari Anda</h1>
        <form action="" method="POST">
          </br><input type="submit" class="btn btn-danger btn-block" name="back" value="Halaman Utama" />
        </form>
        <section class="page-section bg-primary text-white mb-0" id="about">

<!-- About Section -->    
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
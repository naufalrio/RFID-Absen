<?php
require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}
else if(isset($_POST['back'])){
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Admin Kelurahan</title>

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
        <h2 class="masthead-subheading font-weight-normal">Daftar Admin</h2>
        <h2 class="masthead-subheading font-weight-normal">Kelurahan Sekayu</h2>
    </div>
<!-- About Section Button -->
<form action="" method="POST">

<div class="form-group">
    <label for="name">Nama Lengkap</label>
    <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" />
</div>

<div class="form-group">
    <label for="username">Username</label>
    <input class="form-control" type="text" name="username" placeholder="Username" />
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" placeholder="Password" />
</div>

<input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
<input type="submit" class="btn btn-danger btn-block" name="back" value="Halaman Login" />
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


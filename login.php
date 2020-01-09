<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
    else{
        echo '<script languange="javascript">';
        echo 'alert("Anda Bukan Admin HAHAHA")';
        echo '</script>';
    }
}
else if(isset($_POST['back'])){
    header("location: absenpegawai.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Admin Kelurahan</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.css" rel="stylesheet">

</head>

<body id="page-top">
<!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

<!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-3" src="img/logo.png" alt="">

<!-- Masthead Sub Heading -->
    <div class="container">
        <h2 class="masthead-subheading font-weight-normal">Login Admin</h2>
        <h2 class="masthead-subheading font-weight-normal">Kelurahan Sekayu</h2>
    </div>
<!-- About Section Button -->
    <form action="" method="POST">

            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username"/>
            </div>


            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
            </br><input type="submit" class="btn btn-danger btn-block" name="back" value="Kembali" />
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


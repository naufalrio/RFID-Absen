<?php
session_start();
if (isset($_SESSION["login"])){
 header("Location: index.php");
 exit;
}
require 'koneksi.php';
if (isset($_POST["login"])){
 $username = $_POST["username"];
 $password = $_POST["password"];
 $hasil = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");
 if (mysqli_num_rows($hasil) === 1 ){
  $row = mysqli_fetch_assoc($hasil);
  if (password_verify($password, $row["password"]) ){
   $_SESSION["login"] = true;
   header("Location: index.php");
   exit;
  }
 }
 $error = true;
 }
?>
<!DOCTYPE html>
<html>
<head>
 <title>Halaman Login</title>
 <style>
  label{
   display: block;
  }  </style>
</head>
<body>
<h1>Halaman Login</h1>
 <?php if (isset($error)): ?>
  <p style="color : red; font-style: italic">Username / Password Salah</p>
 <?php endif; ?>
 <form action="" method="post">
 
 <ul>
  <li>
   <label for="username">Username</label>
   <input type="text" name="username" id="username" required="">
  </li>
  <li>
   <label for="password">Password</label>
   <input type="password" name="password" id="password" required="">
  </li>
  <button type="submit" name="login">Login</button>
  <input type="button" value="Sign Up" onclick="window.location.href='registrasi.php'" />
 </ul>
</form>
</body>
</html> 
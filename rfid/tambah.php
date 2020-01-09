<?php
session_start();
if (!isset($_SESSION["login"])){
 header("Location: login.php");
 exit;
}
require 'koneksi.php';

if (isset($_POST["submit"]))
{
  if (tambah ($_POST) > 0)
  {
   echo "
  <script>
   alert('Kartu Berhasil di Tambahkan');
   document.location.href = 'index.php';
  </script>
    ";
  } else
  {
   echo "
  <script>
   alert('Kartu Gagal DI Tambahkan');
   document.location.href = 'tambah.php';
  </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Tambah Kartu ID</title>
 <style>
  label{
   display: block;
  }  </style>
</head>
<body>
 <h1>Tambah ID Kartu</h1>
 <form action="" method="post">
  <ul>
   <li>
    <label for ="idcard">ID Card</label>
    <input type ="text" name="idcard" id="idcard" required="">
   </li>
   <li>
    <label for ="val">Value</label>
    <input type="Text" name="val" id="val" required="">
   </li>
   <li>
    <button type="submit" name="submit">Tambah Kartu</button>
   </li>
  </ul>
 </form>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION["login"])){
 header("Location: login.php");
 exit;
}

require 'koneksi.php';
$no = $_GET["no"];
$krt = query("SELECT * FROM rfid WHERE no = $no")[0];

if (isset($_POST["submit"]))
{
  if (ubah ($_POST) > 0)
  {
   echo "
  <script>
   alert('Kartu Berhasil di Ubah');
   document.location.href = 'index.php';
  </script>
    ";
  } else
  {
   echo "
  <script>
   alert('Kartu Gagal DI Ubah');
   document.location.href = 'ubah.php';
  </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Ubah Kartu ID</title>
 <style>
  label{
   display: block;
  }  </style>
</head>
<body>
 <h1>Ubah ID Kartu</h1>
 <form action="" method="post">
  <input type="hidden" name="no" value="<?= $krt["no"]; ?>">
  <ul>
   <li>
    <label for ="idcard">ID Card</label>
    <input type ="text" name="idcard" id="idcard" required="" value="<?= $krt["idcard"]; ?>">
   </li>
   <li>
    <label for ="val">Value</label>
    <input type="Text" name="val" id="val" required="" value="<?= $krt["val"]; ?>">
   </li>
   <li>
    <button type="submit" name="submit">Ubah Kartu</button> <input type="button" value="Cancel" onclick="window.location.href='index.php'" />
   </li>
  </ul>
 </form>
</body>
</html>
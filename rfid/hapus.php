<?php
session_start();
if (!isset($_SESSION["login"])){
 header("Location: login.php");
 exit;
}
require 'koneksi.php';
$no = $_GET ["no"];
if ( hapus($no)> 0){
 echo "
 <script>
  alert('Kartu Berhasil di Hapus');
  document.location.href = 'index.php';
 </script>
   ";
} else {
 echo "
  <script>
   alert('Kartu Gagal di Hapus');
   document.location.href = 'index.php';
  </script>
   ";
}
 ?>
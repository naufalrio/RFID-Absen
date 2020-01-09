<?php
require 'koneksi.php';
$rfid = $_GET['idcard'];
$sql = "INSERT INTO absen(idpegawai, sidikjari, tanggal)
SELECT pegawai.id, '$rfid', now() 
FROM pegawai
WHERE pegawai.sidikjari = '$rfid'";
 $result = mysqli_query($conn, $sql);
 if (!$result) {
  die('Invalid query: ');
 }
 echo "<h1>THE DATA HAS BEEN SENT!!</h1>";
 mysqli_close($conn);
?>
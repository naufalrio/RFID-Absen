<?php
require 'koneksi.php';
$idcard = $_GET["idcard"];
$hasil = mysqli_query($conn, "SELECT * FROM absens WHERE biometricdata = '$idcard' ");
$row = mysqli_fetch_array($hasil);
echo "Log :", $row["biometricdata"]," ", "Nama Pegawai :", $row["namapegawai"]," ", "Jam :", $row["jam"];
?>
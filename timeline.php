<?php 
require_once("auth.php"); 
require_once("configg.php");
if (isset($_POST['tampilpegawai']))
{
    header ("Location:timeline.php");
}
else if (isset($_POST['tampilabsen']))
{
    header ("Location: tampilabsen.php");
}
else if (isset($_POST['datatamu']))
{
    header ("Location: tampiltamu.php");
}
else if (isset($_POST['logout']))
{
    header ("Location: logout.php");
}
else if (isset($_POST['tambah']))
{
    header ("Location: tambahpegawai.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai Kelurahan Sekayu</title>
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
                <div class="row">
                    <div class="col-lg-auto ml-auto">
                        <input type="submit" class="btn btn-success btn-block" name="tampilpegawai" value="Data Pegawai"/>
                    </div>
                    <div class="col-lg-auto ml-auto">
                        <input type="submit" class="btn btn-success btn-block" name="tampilabsen" value="Data Absen"/>
                    </div>
                    <div class="col-lg-auto ml-auto">
                        <input type="submit" class="btn btn-success btn-block" name="datatamu" value="Data Tamu"/>
                    </div>
                    <div class="col-lg-auto ml-auto">
                        <input type="submit" class="btn btn-danger btn-block" name="logout" value="Keluar"/>
                    </div>
                </div>
              </form>
            </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Masthead -->
    <header class="masthead bg-primary text-white text-center">
      <div class = "container">
        <h2> Data Pegawai </h2>
        <form class="container align-items-right" action="" method="POST">
          <input type="submit" class="btn btn-success btn-block" name="tambah" value="Tambah Data"/>
        </form>
      </div>
      <div class="container d-flex align-items-center flex-column">
        <div class="container">
          <table class="table table-striped table-bordered text-white caption">
		        <thead>
			        <tr>
				        <th>No</th>
                <th>Nama</th>
				        <th>Jabatan</th>
				        <th>Alamat</th>
                <th>Keterangan</th>
			        </tr>
		        </thead>
		        <tbody>
            <?php
            //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
            $sql = mysqli_query($db, "SELECT * FROM pegawai ORDER BY id DESC") or die(mysqli_error($db));
				    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				    if(mysqli_num_rows($sql) > 0){
					  //melakukan perulangan while dengan dari dari query $sql
              while ($row = mysqli_fetch_assoc($sql)) {
              echo'
                <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['nama'].'</td>
                <td>'.$row['jabatan'].'</td>
                <td>'.$row['alamat'].'</td>
                <td>  <a href="editpegawai.php?id='.$row['id'].'" class="badge badge-warning">Edit</a>
                      <a href="hapuspegawai.php?id='.$row['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                </td>
              </tr>
              ';
              }
            }
            else
            {
              echo"Belum ada pegawai yang ditambahkan";
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
  </header>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
</body>
</html>
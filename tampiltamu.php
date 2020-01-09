<?php 
require_once("auth.php"); 
require_once("configg.php");
$refreshpage = $_SERVER['PHP_SELF'];
$sec = "10";
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
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $refreshpage?>'">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamu Kelurahan Sekayu</title>
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
                        <input type="submit" class="btn btn-success btn-block" name="tampilsurat" value="Data Surat"/>
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
        <h2> Data Pengunjung <?php echo " " . date("l"); ?></h2>
        <a href="hapustamu.php?id='.$row['id'].'" class="badge badge-success" onclick="return confirm(\'Yakin Ingin Update Data Tamu?\')">Delete</a>
      </div>
      <div class="container d-flex align-items-center flex-column">
        <div class="container">
          <table class="table table-striped table-bordered text-white caption">
		        <thead>
			        <tr>
				        <th>No</th>
				        <th>Nama</th>
				        <th>Warga</th>
				        <th>Keperluan</th>
			        </tr>
		        </thead>
		        <tbody>
            <?php
            //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
            $sql = mysqli_query($db, "SELECT * FROM tamu ORDER BY id DESC") or die(mysqli_error($db));
				    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				    if(mysqli_num_rows($sql) > 0){
					  //melakukan perulangan while dengan dari dari query $sql
              while ($row = mysqli_fetch_assoc($sql)) {
              echo'
                <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['nama'].'</td>
                <td>'.$row['warga'].'</td>
                <td>'.$row['keperluan'].'</td>
              </tr>
              ';
              }
            }
            else
            {
              echo"Belum ada tamu";
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
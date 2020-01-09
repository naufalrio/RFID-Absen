<html>
    <head>
        <title>Foto Pegawai</title>
    </head>
    <body>
        <img src="tampilfotosurat.php?id=foto" width="175" height="200" />
    </body>
</html>
<?php
require_once("auth.php"); 
require_once("configg.php");
//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
    $sql = mysqli_query($db, "SELECT foto FROM surat ORDER BY id DESC") or die(mysqli_error($db));
    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
	if(mysqli_num_rows($sql) > 0){
    //melakukan perulangan while dengan dari dari query $sql
    while ($row = mysqli_fetch_assoc($sql)) {
        header("Content-type: image/jpeg");
        echo $row['foto'];
    }
}
    else{
    echo"Belum ada pegawai yang ditambahkan";
        }
?>

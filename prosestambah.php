<?php
 include 'koneksi.php';
//var_dump($_POST);

$norm = $_POST['norm'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$jaminan = $_POST['jaminan'];


// echo $norm;
// echo "<br>";
// echo $nama;
// echo "<br>";
// echo $jk;
// echo "<br>";
// echo $alamat;
// echo "<br>";
// echo $nohp;
// echo "<br>";
// echo $jaminan;

$query = "INSERT INTO tb_pasien VALUES(null,'$norm','$nama','$jk','$alamat','$nohp','$jaminan')";

$sql = mysqli_query($koneksi, $query);

if ($sql) {
    header("location: index.php");
    //echo "Data Berhasil Ditambahkan <a href ='index.php'>[Home]</a>"; 
}
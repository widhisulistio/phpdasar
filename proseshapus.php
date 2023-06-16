<?php
 include 'koneksi.php';
//var_dump($_POST);

$id = $_GET['hapus'];

$query = "DELETE FROM tb_pasien WHERE id='$id'";
$sql = mysqli_query($koneksi, $query);

if ($sql) {
    header("location: index.php");
    //echo "Data Berhasil Ditambahkan <a href ='index.php'>[Home]</a>"; 
}
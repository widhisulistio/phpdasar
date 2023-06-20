<?php
 include 'koneksi.php';
//var_dump($_POST);

if (isset($_POST['ubah'])) {

    $id = $_POST['id'];
    $norm = $_POST['norm'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $jaminan = $_POST['jaminan'];
    
    $query = "UPDATE tb_pasien SET norm ='$norm',namapasien='$nama',jk='$jk',alamat='$alamat',nohp='$nohp',penjamin='$jaminan' WHERE id='$id'";
    $sql = mysqli_query($koneksi, $query);
    
    if ($sql) {
        header("location: index.php");
        //echo "Data Berhasil Ditambahkan <a href ='index.php'>[Home]</a>"; 
    }
}







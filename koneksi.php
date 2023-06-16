<?php 
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $db = 'db_pasien';
   
   $koneksi =  mysqli_connect($host,$user,$pass,$db);
   if ($koneksi) {
        //echo "koneksi berhasil";
   }

   mysqli_select_db($koneksi, $db);
?>
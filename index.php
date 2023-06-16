<?php 
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap-5 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- font -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>Belajar CRUD</title> 
</head>
<body>
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Aplikasi Pendaftaran Pasien
    </a>
  </div>
</nav>
<!--judul -->
<div class="container-fluid">
    <h1 class="mt-3">Data Pasien</h1>
    <figure>
        <blockquote class="blockquote">
        <p>Berisi data pasien yang telah disimpan</p>
        </blockquote>
        <figcaption class="blockquote-footer">
        CRUD <cite title="Source Title">Create Read Update Delete Data Pasien</cite>
        </figcaption>
    </figure>
    <!-- <button type="button" class="btn btn-primary mb-3" onclick="window.location.href='tambah.php';">
        <i class="fa fa-plus"></i>
        Tambah Data
    </button> -->
    <a href="kelola.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i>
        Tambah Data
    </a>
    <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No RM</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto KTP</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Penjanmin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>33-33-33</td>
                    <td>Widhi</td>
                    <td>Laki-laki</td>
                    <td>
                        <img src="img/img1.jpg" style="width: 150px;">
                    </td>
                    <td>Jl.Wonosari KM 10</td>
                    <td>081328479152</td>
                    <td>BPJS</td>
                    <td>

                        <a href="kelola.php?ubah=1" type="button-" class="btn btn-warning">
                            <i class="fa fa-pencil"></i>
                            Edit
                        </a>
                        <a href="proses.php?hapus=1" type="button" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Delete
                        </a>
                        
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
</div>

</body>
</html>
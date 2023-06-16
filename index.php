<?php 
    include 'koneksi.php';

    $query =  "Select * from tb_pasien;";
    $sql = mysqli_query($koneksi,$query);

    //$result = mysqli_fetch_row($sql); kalo mau ambil baris
    //var_dump($result);
    // $result = mysqli_fetch_assoc($sql);
    // echo $result['namapasien'];

    //untuk menampilkan semua data kita bisa pakai perulangan while

    // while ($result = mysqli_fetch_assoc($sql)) {
    //     echo $result['namapasien'];
    //     echo "<br>";
    // }

    // foreach ($sql as $key ) {
    //     echo $key['namapasien'];
    //     echo "<br>";
    // }
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
    <a href="tambah.php" type="button" class="btn btn-primary mb-3">
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
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Penjanmin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no=1;
                    foreach ($sql as $key) {?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key['norm']?></td>
                        <td><?php echo $key['namapasien']?></td>
                        <td><?php echo $key['jk']?></td>
                        <td><?php echo $key['alamat']?></td>
                        <td><?php echo $key['nohp']?></td>
                        <td><?php echo $key['penjamin']?></td>
                        <td>
                                <a href="kelola.php?ubah=<?php echo $key['id']?>" type="button-" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <a href="proseshapus.php?hapus=<?php echo $key['id']?>" type="button" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </a>

                        </td>
                    </tr>
                    
                    
                <?php } ?>
            </tbody>
        </table>
      </div>
</div>

</body>
</html>
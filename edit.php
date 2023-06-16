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
    <title>Edit Data</title> 
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        Aplikasi Pendaftaran Pasien
    </a>
  </div>
</nav>
<!--judul -->
<div class="container-fluid">
    <!-- form-control:Readonly plain text -->
    <div class="mb-3 row">
        <label for="norm" class="col-sm-2 col-form-label">No RM</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="norm" placeholder="no rekam medis pasien">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Pasien</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="contoh: widhi sulistyo">
        </div>
      </div>
      <!-- forms:select -->
      <div class="mb-3 row">
        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <select class="form-select" id="jk">
                <option selected>Jenis Kelamin</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
        </div>
      </div>
    
      <!-- forms:formcontrol:File input -->
      <div class="mb-3 row">
        <label for="ktp" class="col-sm-2 col-form-label">KTP</label>
        <div class="col-sm-10">
            <div class="mb-3">
                <input class="form-control" type="file" id="ktp">
              </div>
        </div>
      </div>

      <!-- forms:formcontrol:File input -->
      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <div class="mb-3">
                <textarea class="form-control" id="alamat" rows="3"></textarea>
            </div>
        </div>
    </div>
      <!-- form-control:Readonly plain text -->
    <div class="mb-3 row">
        <label for="hp" class="col-sm-2 col-form-label">No Handphone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="hp" placeholder="no hp pasien">
        </div>
    </div>
     <!-- forms:select -->
     <div class="mb-3 row">
        <label for="jaminan" class="col-sm-2 col-form-label">Jaminan</label>
        <div class="col-sm-10">
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="jaminan" id="jaminan">
                <label class="form-check-label" for="flexRadioDefault1">
                    Umum
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="jaminan" id="jaminan">
                <label class="form-check-label" for="flexRadioDefault1">
                    BPJS
                </label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="jaminan" id="jaminan">
                <label class="form-check-label" for="flexRadioDefault1">
                    Jasa Raharja
                </label>
            </div>
      </div>
    </div>
    <div class="mb-3 row">
        <div class="col">
            <button type="button" class="btn btn-primary">
                Simpan
            </button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='index.php';">
                <i class="fa fa-fast-backward" aria-hidden="true"></i>
                Batal
            </button>

        </div>
    </div>
</div>


</body>
</html>
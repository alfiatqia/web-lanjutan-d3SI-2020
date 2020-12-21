<!DOCTYPE html>
<html>
<head>
  <title>DATA MAHASISWA</title>
  <link rel="stylesheet" 
      href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tugas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('mahasiswa/index')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tambah data</a>
      </li>
    </ul>
        <a>Alfi Atqia Rinjani</a>
      </div>

    </nav>
    <div class="alert alert-primary" role="alert">
      <h3 align="center">ALFI ATQIA RINJANI</h3>

    </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="<?= site_url('mahasiswa/simpan_edit')?>" method="post">
          <div class="form-group">
              <label>NIM</label>
              <input type="text" readonly value="<?=$data_NIM->NIM?>" name="NIM" class="form-control">
          </div>
          <div class="form-group">
              <label>NAMA</label>
              <input type="text" value="<?=$data_NIM->NAMA?>" name="NAMA" class="form-control">
          </div>
          <div class="form-group">
              <label>ALAMAT</label>
              <textarea class="form-control" name="ALAMAT">

                <?= $data_NIM->ALAMAT?>

              </textarea>
          </div>
          <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">
                simpan data
              </button>
              <a href="<?= site_url('mahasiswa/index')?>" class="btn btn-warning">Batal</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  
</body>
</html>
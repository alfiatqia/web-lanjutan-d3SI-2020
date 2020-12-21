<!DOCTYPE html>
<html>
<head>
  <title>TAMBAH</title>
  <link rel="stylesheet" 
      href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">tambah data</a>
</nav>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1" href="<?= site_url('Acontroller/index')?>">home</span>
</nav>
    <div class="alert alert-primary" role="alert">
      <h3 align="center">ALFI ATQIA RINJANI</h3>

    </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="<?= site_url('Acontroller/simpan_data')?>" method="post">
          <div class="form-group">
              <label>id_0002</label>
              <input type="text" name="id_0002" class="form-control">
          </div>
          <div class="form-group">
              <label>merek</label>
              <input type="text" name="merek" class="form-control">
          </div>
          <div class="form-group">
              <label>jenis</label>
              <textarea type="text" name="jenis" class="form-control"></textarea>
          </div>
          <div class="form-group">
              <label>stok</label>
              <textarea type="text" name="stok" class="form-control"></textarea>
          </div>
        
          <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">
                simpan data
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  
</body>
</html>
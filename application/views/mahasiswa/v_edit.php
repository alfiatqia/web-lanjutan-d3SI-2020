
    <div class="alert alert-primary" role="alert">
      <h3 align="center">ALFI ATQIA RINJANI</h3>

    </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="<?= site_url('mahasiswa/update')?>" method="post">
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
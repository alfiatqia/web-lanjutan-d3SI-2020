
    <div class="alert alert-primary" role="alert">
      <h3 align="center">ALFI ATQIA RINJANI</h3>

    </div>

	<div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="<?= site_url('mahasiswa/simpan_data')?>" method="post">
          <div class="form-group">
              <label>NIM</label>
              <input type="text" name="NIM" class="form-control">
          </div>
          <div class="form-group">
              <label>NAMA</label>
              <input type="text" name="NAMA" class="form-control">
          </div>
          <div class="form-group">
              <label>ALAMAT</label>
              <textarea type="text" name="ALAMAT" class="form-control"></textarea>
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
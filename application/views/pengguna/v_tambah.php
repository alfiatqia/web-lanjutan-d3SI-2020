<div class="alert alert-primary" role="alert">
      <h3 align="center">ALFI ATQIA RINJANI</h3>

    </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="<?= site_url('pengguna/update')?>" method="post">
          <div class="form-group">
              <label>username</label>
              <input type="text" readonly value="<?=$data_username->username?>" name="username" class="form-control">
          </div>
          <div class="form-group">
              <label>password</label>
              <input type="text" value="<?=$data_username->password?>" name="password" class="form-control">
          </div>
          <div class="form-group">
              <label>nama lengkap</label>
              <input type="text" value="<?$data_username->nama_lengkap?>" name="nama_lengkap" class="form-control">
          </div>
          <div class="form-group">
              <label>hak akses</label>
              <input type="text" value="<?$data_username->hak_akses?>" name="hak_akses" class="form-control">
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
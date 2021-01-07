
<!DOCTYPE html>
<html>
<head>
  <title>DATA MAHASISWA</title>
  <link rel="stylesheet" 
      href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
  
<div class="alert alert-info" role="alert" align="center">
  ALFI ATQIA / 1901050002!
</div>
<div class="card">
  <div class="card-body">
    Data Mahasiswa.
    <br>
  </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NOMER</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIM</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>

    <?php $no = 1; ?>
    <?php foreach ($tbl_mahasiswa as $key) {  ?>
    <tr>
      <td class="text-center"><?= $no++ ?></td>
      <td><?= $key->NAMA ?></td>
      <td><?= $key->NIM ?></td>
      <td><?= $key->ALAMAT ?></td>
      <td class="text-center">

        <?php if ($this->session->userdata('hak_akses')== 'admin') { ?>
  

          <a href="<?=site_url('mahasiswa/hapus/' . $key->NIM)?>" 
             onclick="return confirm('Are you sure?')"
             class="btn btn-danger btn-sm">Delete</a>

          <a href="<?=site_url('mahasiswa/edit/' . $key->NIM)?>" 
             class="btn btn-danger btn-sm">edit</a>

             <?php } ?>
      </td>
  </tr>
  <?php } ?>
  
  
</tbody>
</table>
</div>

<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</div>
</body>
</html>
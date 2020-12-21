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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url ('mahasiswa/tambah') ?>" tabindex="-1">Tambah data</a>
      </li>
  </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
        Alfi Atqia</a>
      </li>
  	  </ul>
</div>
</nav>
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

          <a href="<?=site_url('mahasiswa/hapus/' . $key->NIM)?>" 
             onclick="return confirm('Are you sure?')"
             class="btn btn-danger btn-sm">Delete</a>

          <a href="<?=site_url('mahasiswa/edit/' . $key->NIM)?>" 
             class="btn btn-danger btn-sm">edit</a>
      </td>
  </tr>
  <?php } ?>
  
</tbody>
</table>
</div>
</div>
</body>
</html>
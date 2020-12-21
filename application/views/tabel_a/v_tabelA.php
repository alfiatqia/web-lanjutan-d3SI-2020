<!DOCTYPE html>
<html>
<head>
	<title>TABEL A</title>
	<link rel="stylesheet" 
	 	  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
 <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?= site_url ('Acontroller/tambah') ?>">tambah data</a>
</nav>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">home</span>
</nav>

<div class="alert alert-info" role="alert" align="center">
  TABEL A!
</div>
  	<table class="table">
  <thead>
    <tr>
      <th scope="col">id_0002</th>
      <th scope="col">merek</th>
      <th scope="col">jenis</th>
      <th scope="col">stok</th>
    </tr>
  </thead>
  <tbody>

  	<?php $no = 1; ?>
  	<?php foreach ($tbl_tabel_a as $key) {  ?>
    <tr>
      <td><?= $key->id_0002 ?></td>
      <td><?= $key->merek ?></td>
      <td><?= $key->jenis ?></td>
      <td><?= $key->stok ?></td>
    </tr>
  <?php } ?>
  
</tbody>
</table>
</div>
</div>
</body>
</html>
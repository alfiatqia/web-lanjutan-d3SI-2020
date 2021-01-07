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
  <a class="navbar-brand" href="#">WEB II</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url ('pengguna/tambah') ?>" tabindex="-1">Tambah data</a>
        <li>
        <a class="nav-link" href="<?= site_url ('login/logout') ?>" tabindex="-1">logout</a>
      </li>
      </li>
  </ul>
	  <div class="navbar-nav ml-auto">
     <a href="#" class="nav-link"><?php echo $this->session->userdata('nama_pengguna'); ?></a> 
    </div>
</div>
</nav>

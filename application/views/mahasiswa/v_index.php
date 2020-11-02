<!DOCTYPE html>

<html>

<head>

	<title>DATA MAHASISWA</title>
	<link rel="stylesheet" 
	 	  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">

</head>

<body>
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
        <a class="nav-link" href="#">Tambah data</a>
      </li>
  </ul>
</div>

<div>
	  <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Alfi Atqia</a>
      </li>
    </ul>
  </div>
</nav>
<br/>
<div class="alert alert-info" role="alert" align="center">
  ALFI ATQIA / 1901050002!
</div>
<br>
<div class="card">
  <div class="card-body">
  	Data Mahasiswa.
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
    <tr>
      <th scope="row">1</th>
      <td>Alfiy</td>
      <td>1901050002</td>
      <td>Loteng</td>
      <td> <button type="button" class="btn btn-warning">Edit</button>
      	<button type="button" class="btn btn-danger">Delete</button></td>
   </tr>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Andrian</td>
      <td>1901050024</td>
      <td>Bima</td>
      <td> <button type="button" class="btn btn-warning">Edit</button>
      	<button type="button" class="btn btn-danger">Delete</button></td>
   </tr>
    <tr>
      <th scope="row">3</th>
      <td>Irfan</td>
      <td>1901050015</td>
      <td>Bima</td>
      <td> <button type="button" class="btn btn-warning">Edit</button>
      	<button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody>
</table>
  </div>

</div>
</body>

</html>
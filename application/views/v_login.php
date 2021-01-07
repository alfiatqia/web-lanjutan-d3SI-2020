<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" 
	 	  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	
    <link rel="stylesheet"
   		  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	 <title>Login</title>
</head>
<body>
<div class="container">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				Form Login
			</div>
			<div class="card-body">

				<?php if ($this->session->flashdata('pesan')){ ?>
					<div class="alert alert-danger animate__animated animate__bounce">
						<?php echo $this->session->flashdata('pesan'); ?>
					</div>
				<?php } ?>
				
				<form action="<?= site_url('Login/proses')?>" method="post">
					
					<div class="form-group">
						<label for="">Username :</label>
						<input type="text" name="txtusername" 
									class="form-control">
						
					</div>

					<div class="form-group">
						<label for="">Password :</label>
						<input type="text" name="txtpassword" 
									class="form-control">
					</div>
					<input type="submit" class="btn btn-primary">

				</form>

			</div>
		</div>
	</div>
</div>
</body>
</html>
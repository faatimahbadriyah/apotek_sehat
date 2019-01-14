<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Mendaftar</title>
		<link href="<?php echo base_url().'assets/img/logo.png'?>" rel="shortcut icon" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'mobile/css/as.css'?>" />
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/bootstrap.min.js'?>"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	</head>
	<body >			
		<div class="container">			
			<?php
				$this->load->view('mobile/navbar');
			?>
			<div class="jumbotron">
				<div class="panel panel-default">
					<div class="panel-heading" style="font-size: 14pt; background-color: #f4511e; color:white;">Form Register</div>
					<div class="panel-body">
						<?php echo $this->session->flashdata('msg');?>
						<form action="<?php echo base_url().'mobile/member/simpan_pelanggan'?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control" type="text" name="nama" placeholder="Nama*" required>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input class="form-control" type="text" name="alamat" placeholder="Alamat*" required>
							</div>
							<div class="form-group">
								<label for="jenkel">Jenis Kelamin</label>
								<br>
								<label class="radio-inline">
									<input type="radio" name="jenkel" value="L" checked>Laki-Laki
								</label>
								<label class="radio-inline">
									<input type="radio" name="jenkel" value="P">Perempuan
								</label>
							</div>
							<div class="form-group">
								<label for="kontak">Kontak Person</label>
								<input class="form-control" type="text" name="kontak" placeholder="Kontak Person*" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control" type="email" name="email" placeholder="Email*" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control" type="password" name="pass" placeholder="Password*" required>
							</div>
							<div class="form-group">
								<label for="password">Konfirmasi Password</label>
								<input class="form-control" type="password" name="pass2" placeholder="Ulangi Password*" required>
							</div>
							<div class="form-group">
								<label for="foto">Foto</label>
								<input class="form-control" type="file" name="filefoto">
								<p class="text-danger" style="font-size:12pt;">NB: Photo harus berektensi JPG|PNG|BMP.</p>
							</div>
							<button type="submit" class="btn btn-default" style="background-color: #f4511e; color:white; border:0px; width:100%;">Submit</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer class="text-center" style="position: fixed; left: 0; bottom: 0; width: 100%; text-align: center; background-color:white;">
		  <br>
	      <p>Copyright &copy; Tugas E-Commerce Kelompok 7 2018, All rights reserved</p> 
	    </footer>
	</body>
</html>
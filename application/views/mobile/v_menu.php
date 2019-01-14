<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Menu</title>
		<link href="<?php echo base_url().'assets/img/logo.png'?>" rel="shortcut icon" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'mobile/css/as.css'?>" />
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/bootstrap.min.js'?>"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	</head>
	<body>
		<div class="container">
			<?php
				$this->load->view('mobile/navbar');
			?>
			<div class="jumbotron">
				<div class="row" style="background-color: ">
					<?php 
					foreach ($data->result_array() as $a) {
						$id=$a['menu_id'];
						$nama=$a['menu_nama'];	
						$deskripsi=$a['menu_deskripsi'];
						$harga_lama=$a['menu_harga_lama'];
						$harga_baru=$a['menu_harga_baru'];
						$harlam=$a['harga_lama'];
						$harbar=$a['harga_baru'];
						$like=$a['menu_likes'];
						$kat_id=$a['menu_kategori_id'];
						$kat_nama=$a['menu_kategori_nama'];
						$gambar=$a['menu_gambar'];

					?>
					<div class="col-md-4">	
						<a href="<?php echo base_url().'mobile/menu/detail_menu/'.$id;?>" style="color: #f4511e;">	
							<div class="col-md-12 text-center">				
								<center><img style="width:200px; height:200px;" src="<?php echo base_url().'assets/gambar/'.$gambar;?>" /></center>
								<h2><?php echo $nama;?></h2>
								<?php if(empty($harga_lama)):?>
									<span><?php echo 'Rp. '.$harga_baru;?></span>
								<?php else:?>
									<span ><?php echo 'Rp. '.$harga_baru;?></span><br>
									<span style="color: red; text-decoration: line-through;"><?php echo 'Rp. '.$harga_lama?></span>
								<?php endif;?>
							</div>
						</a>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
		<footer class="text-center" style="position: fixed; left: 0; bottom: 0; width: 100%; text-align: center; background-color:white;">
		  <br>
	      <p>Copyright &copy; Tugas E-Commerce Kelompok 7 2018, All rights reserved</p> 
	    </footer>
	</body>
</html>
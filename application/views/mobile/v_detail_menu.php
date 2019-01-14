<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Detail Menu</title>
		<link href="<?php echo base_url().'assets/img/logo.png'?>" rel="shortcut icon" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'mobile/css/as.css'?>" />
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/bootstrap.min.js'?>"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

		<?php 
			$b=$data->row_array();
			$url=base_url().'mobile/menu/detail_menu/'.$b['menu_id'];
	        $img=base_url().'assets/gambar/'.$b['menu_gambar'];
	   		$title=$b['menu_nama'];
			$deskripsi=strip_tags($b['menu_deskripsi']);
		?>

	</head>
	
	<body>
		<div class="container">
			<?php
				$this->load->view('mobile/navbar');
			?>
			<div class="jumbotron" style="border:0px;">			
				<div class="row">
					<div class="col-md-12 text-center" style="background-color:#FFDEAD; border-radius:5px;">	
						<br>	
						<img style="border-radius: 50%; width:300px; height:300px;"src="<?php echo base_url().'assets/gambar/'.$b['menu_gambar']?>" />									
						<div class="prod-single-content">
							<h2><?php echo $b['menu_nama']?></h2>
							<?php if(empty($b['menu_harga_lama'])):?>
								<span class="current-price" style="font-size:20px;"><?php echo 'Rp '.number_format($b['menu_harga_baru'])?></span>
							<?php else:?>
								<span class="current-price" style="font-size:20px;"><?php echo 'Rp '.number_format($b['menu_harga_baru'])?></span>
							<?php endif;?>
							<p><?php echo $b['menu_deskripsi']?></p>
						</div>					
						
						<div class="btn-psn">
							<a href="<?php echo base_url().'mobile/menu/add_to_cart/'.$b['menu_id'];?>" style="padding: 10px 130px;">Pesan</a>
						</div>
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
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Status Pesanan</title>
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
				<div class="panel panel-default">
					<div class="panel-heading" style="font-size: 14pt; background-color: #f4511e; color:white;">Tracking Order</div>
						<div class="panel-body">
							<?php echo $this->session->flashdata('msg');?>				
							<form class="form-inline" action="<?php echo base_url().'mobile/tracker/tracking'?>" method="post">
								<div class="form-group">
									<label for="inv">Masukan No. Invoice Anda : </label>
									<input type="text" name="no_invoice" class="form-control" id="inv" required>
								</div>													
								<button type="submit" class="btn btn-primary" style="background-color: #f4511e; color:white;border:0px;"> Cek Status</button>
							</form>
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
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Riwayat Pemesanan</title>
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
					<div class="panel-heading" style="font-size: 14pt;background-color: #f4511e; color:white;">History</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
								<tr>
									<th style="text-align:center;">Invoice</th>
									<th style="text-align:center;">Tanggal</th>
									<th style="text-align:center;">Status</th>
								</tr>
								<thead>
								<tbody>
								<?php foreach ($data->result_array() as $a) {
									$invoice=$a['inv_no'];
									$tanggal=$a['inv_tanggal'];
									$status=$a['inv_status'];
								?>
									<tr>
										<td style="text-align:center;"><?php echo $invoice;?></td>
										<td style="text-align:center;"><?php echo $tanggal;?></td>
										<td style="text-align:center;"><?php echo $status;?></td>
									</tr>
								<?php } ?>
								</tbody>
								
							</table>
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
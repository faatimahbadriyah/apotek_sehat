<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Rekening Bank</title>
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
				$b=$data->row_array();
			?>
			<div class="jumbotron">
				<div class="panel panel-default">
					<div class="panel-heading" style="font-size: 14pt; background-color: #f4511e; color:white;">Invoice</div>
					<div class="panel-body">
					<div class="row">
						<div class="col-md-6">			
							<table class="table table-bordered" style="border:0px">
									<tr style="background-color:#fff;">
										<td>No Invoice</td>
										<td>:</td>
										<td><?php echo $b['inv_no']?></td>
									</tr>
									<tr style="background-color:#fff;">
										<td>Tanggal</td>
										<td>:</td>
										<td><?php echo $b['tanggal']?></td>
									</tr>
									<tr style="background-color:#fff;">
										<td>Customer</td>
										<td>:</td>
										<td><?php echo $b['inv_plg_nama']?></td>
									</tr>
									<?php if($b['inv_rek_id']=='COD'):?>
									<tr style="background-color:#fff;">
										<td>Pembayaran</td>
										<td>:</td>
										<td><?php echo $b['inv_rek_id']?></td>
									</tr>
									<?php else:?>
									<tr style="background-color:#fff;">
										<td>Pembayaran</td>
										<td>:</td>
										<td><?php echo 'Transfer Bank '.$b['inv_rek_bank']?></td>
									</tr>
									<tr style="background-color:#fff;">
										<td>No Rekening</td>
										<td>:</td>
										<td><?php echo $b['inv_rek_no']?></td>
									</tr>
									<tr style="background-color:#fff;">
										<td>Atas Nama</td>
										<td>:</td>
										<td><?php echo $b['inv_rek_nama']?></td>
									</tr>
									<?php endif;?>
									<tr style="background-color:#fff;">
										<td>Status Order</td>
										<td>:</td>
										<td><?php echo $b['inv_status']?></td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th style="text-align:center;">Nama Obat</th>
										<th style="text-align:center;">Harga</th>
										<th style="text-align:center;">Jumlah</th>
										<th style="text-align:center;">Subtotal</th>
									</tr>
									<thead>
									<tbody>
									<?php foreach ($data->result_array() as $a) {
										$menu=$a['detail_menu_nama'];
										$harga=$a['detail_harjul'];
										$porsi=$a['detail_porsi'];
										$subtotal=$a['detail_subtotal'];
									?>
										<tr>
											<td><?php echo $menu;?></td>
											<td style="text-align:center;"><?php echo number_format($harga);?></td>
											<td style="text-align:center;"><?php echo $porsi;?></td>
											<td style="text-align:center;"><?php echo number_format($subtotal);?></td>
										</tr>
									<?php } ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="3">Total</td>
											<td style="text-align:center;"><?php echo number_format($b['inv_total'])?></td>
										</tr>
									</tfoot>
								</table>
							</div>	
						</div>
						<div>
							<p style="text-align:justify; font-size: 12pt;">Silahkan Print Screen Invoice Anda. Jika pembayaran melalui transfer bank, silahkan bayar sesuai dengan nominal yang tertera pada invoice.</p>
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
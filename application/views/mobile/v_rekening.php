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
			?>
			<div class="jumbotron">
				<div class="panel panel-default">
					<div class="panel-heading" style="font-size: 14pt;">Transfer</div>
						<div class="panel-body">			
						<table class="table">
							<thead>
							<tr>
								<th style="text-align:left;">Bank</th>
								<th style="text-align:left;">Atas Nama</th>
								<th style="text-align:center;">Aksi</th>	
							</tr>
							<thead>
							<tbody>							
								<?php foreach ($data->result_array() as $i): 
									$id=$i['rek_id'];
									$rek_no=$i['rek_no'];
									$rek_nama=$i['rek_nama'];
									$rek_bank=$i['rek_bank'];
									$rek_cabang=$i['rek_cabang'];
									$rek_logo=$i['rek_logo'];
								?>
								<tr>
									<td><img src="<?php echo base_url().'assets/img/'.$rek_logo?>"/></td>
									<td><?php echo $rek_nama?></td>
									<td style="text-align:center;vertical-align:middle;"><a href="<?php echo base_url().'mobile/menu/set_pembayaran/'.$id;?>" class="btn btn-primary">Pilih</a></td>
								</tr>								
								<?php endforeach; ?>
							</tbody>							
						</table>
						<div>
							<p style="text-align:justify; font-size: 12pt;">Jika jumlah porsi yang Anda inginkan lebih dari satu. Tambahkan jumlah porsi sesuai dengan yang Anda inginkan dan klik tombol <b>Update Keranjang</b>.<br>Jika masih ada lagi menu yang akan Anda beli selain dari tabel diatas. Klik <a href="<?php echo base_url().'mobile/menu'?>"><b>disini</b></a> untuk memilih menu lainnya.</p>
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
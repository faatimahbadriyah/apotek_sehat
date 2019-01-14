<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Keranjang Belanja</title><link href="<?php echo base_url().'assets/img/logo.png'?>" rel="shortcut icon" type="image/x-icon">

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
					<div class="panel-heading" style="font-size: 14pt; background-color: #f4511e; color:white;">Form Pemesanan</div>
						<div class="panel-body">					
						<table class="table" >
							<thead>
							<tr>
								<th style="text-align:center;">Nama Obat</th>
								<th style="text-align:center;">Jumlah</th>
								<th style="text-align:center;">Subtotal</th>
								<th style="text-align:center;">Aksi</th>
							</tr>
							<thead>
							<tbody>
							<form action="<?php echo base_url().'mobile/menu/update/'?>" method="post">
								<?php $i = 1; ?>
								<?php foreach ($this->cart->contents() as $items): ?>
									<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

									<tr>
										<td><?=$items['name'];?></td>
										<td style="padding:0px;width:15%"><input class="form-control" type="number" name="<?php echo $i.'[qty]'?>" value="<?php echo number_format($items['qty']);?>" min="1"></td>
										<td style="text-align:center;"><?php echo number_format($items['subtotal']);?></td>
										<td style="text-align:center;"><a class="btn btn-danger" href="<?php echo base_url().'mobile/menu/remove/'.$items['rowid'];?>" ><i class="fa fa-trash-o"></i></a></td>
									</tr>
								<?php $i++; ?>
								<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th style="text-align:left;" colspan="2">Total</th>
										<th style="text-align:center;"><?php echo number_format($this->cart->total());?></th>
										<th></th>
									</tr>
								</tfoot>
							</table>
							<button type="submit" class="btn btn-warning" ><i class="fa fa-refresh"></i> Update Keranjang</button>
							<a href="<?php echo base_url().'mobile/menu/check_out'?>" class="btn btn-success"><i class="fa fa-check"></i> Check Out</a>
						</form>
						<div>
							<br>
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
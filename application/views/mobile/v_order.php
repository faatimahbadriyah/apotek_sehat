<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="keywords" content="M-Food by Mfikri.com">
		<meta name="author" content="M Fikri Setiadi">
		<meta name="description" content="M-Food by Mfikri.com">
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Order</title>
		<link href="<?php echo base_url().'assets/img/logo.png'?>" rel="shortcut icon" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'mobile/css/as.css'?>" />
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/jquery.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'mobile/js/bootstrap.min.js'?>"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		
		

	</head>
	<body class="o-page p-home">
		<div id="page">
			<!-- Header -->
			<div id="header">
				<div class="header-content">
					<?php if($this->session->userdata('online')==false):?>
						<a href="<?php echo base_url().'mobile/kurir'?>" class="p-link-back"><i class="fa fa-sign-in"></i></a>
					<?php else:?>
						<a href="<?php echo base_url().'mobile/kurir/logout'?>" class="p-link-back"><i class="fa fa-sign-out"></i></a>
					<?php endif;?>
				</div>
			</div>
			<div class="bannerPane banner-bg">
				<div class="overlay"></div>
				<div class="s-banner-content">
					Data Order
				</div>
			</div>
			<!-- Content -->
			<div id="content">

			
				<?php 
					$no=0;
					foreach ($data->result_array() as $a) {
						$no++;
						$id=$a['inv_no'];
						$tanggal=$a['inv_tanggal'];
						$plg_id=$a['inv_plg_id'];
						$plg_nama=$a['inv_plg_nama'];
						$status=$a['inv_status'];
						$rek_id=$a['inv_rek_id'];
						$rek_bank=$a['inv_rek_bank'];
						$total=$a['inv_total'];	
					
				?>
			<article>	

				<a href="#" data-toggle="modal" data-target="#detail<?php echo $id;?>" >
					
					<div class="prod-pricePane">

						<span class="current-price pull-left"><p><?php echo $tanggal;?></p></span>
						<span class="current-price pull-right"><p><?php echo $plg_nama;?></p></span>
					</div>
					
				</a>

				<?php } ?>			
			</article>
			</div>
			
			<!-- Menu navigation -->
			<nav id="menu">
				<ul>
					<li class="Selected">
						<a href="#close">
							<i class="fa fa-times-circle"></i>
						</a>
					</li>
					
					<li>
						<a href="<?php echo base_url().'mobile/kurir/datapesanan'?>">
							<i class="fa fa-crosshairs"></i>Data Pesanan
						</a>
					</li>
					
					
					<?php if($this->session->userdata('online') == TRUE):?>
					
					<li>
						<a href="<?php echo base_url().'mobile/kurir/logout'?>">
							<i class="fa fa-sign-out"></i>Logout
						</a>
					</li>
					<?php else:?>
					<li>
						<a href="<?php echo base_url().'mobile/kurir'?>">
							<i class="fa fa-sign-in"></i>Login
						</a>
					</li>
					<?php endif;?>
				</ul>
			</nav>

			<!-- ============ MODAL DETAIL ORDER =============== -->
			<?php 
				foreach ($data->result_array() as $a) {
					$id=$a['inv_no'];
					$tanggal=$a['inv_tanggal'];
					$plg_id=$a['inv_plg_id'];
					$plg_nama=$a['inv_plg_nama'];
					$status=$a['inv_status'];
					$rek_id=$a['inv_rek_id'];
					$total=$a['inv_total'];
					$rek_bank=$a['inv_rek_bank'];
					$alamat=$a['plg_alamat'];
								
			?>
			<div class="modal fade" id="detail<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 class="modal-title" id="myModalLabel">#<?php echo $id;?></h3>
			    </div>
			    <form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'mobile/kurir/update_order'?>" enctype="multipart/form-data">
			        <div class="modal-body">
									<div class="form-group">
										<div class="col-sm-12">
											<table>
												<input type="hidden" name="id_inv" value="<?php echo $id;?>">
												<tr>
													<td style="width:120px;">Tanggal</td>
													<td>:</td>
													<td><?php echo $tanggal;?></td>
												</tr>
												<tr>
													<td>Pelanggan</td>
													<td>:</td>
													<td><?php echo $plg_nama;?></td>
												</tr>
												<tr>
													<td>Alamat</td>
													<td>:</td>
													<td><?php echo $alamat;?></td>
												</tr>
												<tr>
													<td>Status Order</td>
													<td>:</td>
													<td><?php echo $status;?></td>
												</tr>
												<?php if($rek_id=='COD'):?>
												<tr>
													<td>Pembayaran</td>
													<td>:</td>
													<td><?php echo $rek_id;?></td>
												</tr>
												<?php else:?>
												<tr>
													<td>Pembayaran</td>
													<td>:</td>
													<td><?php echo 'Transfer Bank '.$rek_bank;?></td>
												</tr>
												<?php endif;?>
											</table><br/>
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>Menu</th>
														<th style="text-align:center;">Harga</th>
														<th style="text-align:center;">Porsi</th>
														<th style="text-align:center;">Subtotal</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$query=$this->db->query("SELECT * FROM tbl_detail WHERE detail_inv_no='$id'");
														foreach ($query->result_array() as $j) {
															$menu_nama=$j['detail_menu_nama'];
															$menu_harjul=$j['detail_harjul'];
															$menu_porsi=$j['detail_porsi'];
															$menu_subtotal=$j['detail_subtotal'];
														
													?>
													<tr>
														<td><?php echo $menu_nama;?></td>
														<td style="text-align:center;"><?php echo number_format($menu_harjul);?></td>
														<td style="text-align:center;"><?php echo $menu_porsi;?></td>
														<td style="text-align:center;"><?php echo number_format($menu_subtotal);?></td>
													</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="3">Total</td>
														<td style="text-align:center;"><?php echo number_format($total);?></td>
													</tr>
												</tfoot>
												
											</table>
										</div>
									</div>
									
									
			        </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			        </div>
			    </form>
			    </div>
			    </div>
			</div>
			<?php } ?>

			
		</div>

		<footer class="text-center" style="position: fixed; left: 0; bottom: 0; width: 100%; text-align: center; background-color:white;">
		  <br>
	      <p>Copyright &copy; Tugas E-Commerce Kelompok 7 2018, All rights reserved</p> 
	    </footer>	
	</body>

</html>


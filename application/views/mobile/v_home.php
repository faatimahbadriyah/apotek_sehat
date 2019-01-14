<!DOCTYPE html>
<html >
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Home</title>
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
				<div class="row">
					<div class="col-md-12">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators">
						      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						      <li data-target="#myCarousel" data-slide-to="1"></li>
						    </ol>

						    <!-- Wrapper for slides -->
						    <div class="carousel-inner">
						      <div class="item active">
						        <img src="<?php echo base_url().'assets/galeries/banner (1).jpg'?>" style="width:100%;">
						      </div>

						      <div class="item">
						        <img src="<?php echo base_url().'assets/galeries/banner (2).jpg'?>" style="width:100%;">
						      </div>

						    </div>

						    <!-- Left and right controls -->
						    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						      <span class="glyphicon glyphicon-chevron-left"></span>
						      <span class="sr-only">Previous</span>
						    </a>
						    <a class="right carousel-control" href="#myCarousel" data-slide="next">
						      <span class="glyphicon glyphicon-chevron-right"></span>
						      <span class="sr-only">Next</span>
						    </a>
					    </div>	
					</div>
				</div>
				<hr style="border-top: 2px solid #f4511e;">
				
				<div id="about" style="background-color: ">
					<br>
					<h2 class="text-center" >ABOUT COMPANY</h2>
					<br>
					<div class="row">
						<div class="col-md-8">
							<p style=" font-size: 15px;">Apotek Sehat adalah perusahaan industri farmasi pertama di Indonesia yang didirikan oleh Pemerintah Hindia Belanda tahun 1817. Nama perusahaan ini pada awalnya adalah NV Chemicalien Handle Rathkamp & Co. Berdasarkan kebijaksanaan nasionalisasi atas eks perusahaan Belanda di masa awal kemerdekaan, pada tahun 1958, Pemerintah Republik Indonesia melakukan peleburan sejumlah perusahaan farmasi menjadi PNF (Perusahaan Negara Farmasi) Bhinneka Apotek Sehat. Kemudian pada tanggal 16 Agustus 1971, bentuk badan hukum PNF diubah menjadi Perseroan Terbatas, sehingga nama perusahaan berubah menjadi PT Apotek Sehat (Persero).</p>
						</div>
						<div class="col-md-4">
							<center><span class="fa fa-hospital-o" style="color: #f4511e; font-size: 150px;"></span></center>
						</div>
					</div>
				</div>
				
				<hr style="border-top: 2px solid #f4511e;">

				<div class="text-center">
					<br>
					<h2>OUR TEAM</h2>
					<br>
					<img src="<?php echo base_url().'assets/galeries/team.jpg'?>" style="width:100%; border-radius:50px;;">
				</div>

				<hr style="border-top: 2px solid #f4511e;">
				<div>
				  <h2 class="text-center">CONTACT</h2>
				  <div class="row">
				    <div class="col-sm-5">
				      <p>Hubungi kami di:</p>
				      <p style="font-size: 15px;"><span class="glyphicon glyphicon-map-marker"></span> Bandung</p>
				      <p style="font-size: 15px;"><span class="glyphicon glyphicon-phone"></span> +62 1515151515</p>
				      <p style="font-size: 15px;"><span class="glyphicon glyphicon-envelope"></span> apoteksehat@gmail.com</p>
				    </div>
				    <div class="col-sm-7 slideanim">
				      <div class="row">
				        <div class="col-sm-6 form-group">
				          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
				        </div>
				        <div class="col-sm-6 form-group">
				          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
				        </div>
				      </div>
				      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
				      <div class="row">
				        <div class="col-sm-12 form-group">
				          <button class="btn btn-default pull-right" type="submit">Send</button>
				        </div>
				      </div>
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
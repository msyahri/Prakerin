
<div class="slider">
	<!-- Slideshow -->
	<div class="callbacks_container" >
		<ul class="rslides" id="slider">
					<?php
					foreach($slider as $s){
					?>
			<li>
			<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_slider;?>" />
				<div class="caption">
					<h1><?php echo $s->text_slider ?></h1>
					<span><?php echo $s->summary ?></span>
				</div>
			</li>
					<?php } ?>
			
		</ul>
	</div>
	<div class="clear"></div>
</div>


<!--////////////////////////////////////Container-->
<section id="container">

<link href="<?php echo base_url(). 'frontend/template/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url().'frontend/admin/bower_components/bootstrap/dist/css/bootstrap.min.css';?>">
	<div class="wrap-container">
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="header">
					<h2 class="heading">
						<span>Tentang Desa</span>
					</h2>
					<p>Pelajari lebih lanjut tentang desa Pancasan</p>
				</div>
				<div class="row"><!--Start Box-->
				<?php
					
					foreach($artikel as $s){
					?>
					<div class="col-1-3 f-right">
						<div class="wrap-col item">
							<div class="zoom-container">
								<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_artikel;?>" />
							</div>
							<div class="item-content">
								<span><?php echo $s->judul_artikel ?></span>
								<p><?php echo $s->summary ?></p>
								<a class="btn" href="<?php echo base_url(). 'artikel/detail/'.$s->id; ?>">Selengkapnya</a>
							</div>
						</div>
					</div>

			  <?php } ?>
					
				</div>
			</div>
		</section>
		<section class="content-box box-2"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="header">
						<h2 class="heading">
							<span>Selamat Datang</span>
						</h2>
					</div>
					<p>Selamat datang di website desa Pancasan, silahkan baca informasi yang kami sediakan didalam web ini.</p>
				</div>
			</div>
		</section>
		<section class="content-box box-3"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="header">
						<h2 class="heading">
							<span>Informasi Desa</span>
						</h2>
					</div>
					<?php
					
					foreach($kependudukan as $s){
					?>

					<div class="post">
						<div class="col-1-2 f-right">
						<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto;?>" />
						</div>
						<div class="col-1-2">
							<div class="wrapper">
								<h3><?php echo $s->judul ?></h3>
								<p><?php echo $s->summary ?></p>
								<a class="btn" href="kependudukan">Read More</a>
							</div>
						</div>
					</div>

					<?php } ?>
					

					<?php
					
					foreach($wilayah as $s){
					?>

					<div class="post">
						<div class="col-1-2">
						<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto;?>" />
						</div>
						<div class="col-1-2">
							<div class="wrapper">
								<h3><?php echo $s->judul ?></h3>
								<p><?php echo $s->summary ?></p>
								<a class="btn" href="peta">Read More</a>
							</div>
						</div>
					</div>

					<?php } ?>


					<?php
					
					foreach($sejarah as $s){
					?>

					<div class="post">
						<div class="col-1-2 f-right">
						<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto;?>" />
						</div>
						<div class="col-1-2">
							<div class="wrapper">
								<h3><?php echo $s->judul ?></h3>
								<p><?php echo $s->summary ?></p>
								<a class="btn" href="sejarah">Read More</a>
							</div>
						</div>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</section>
		<section class="content-box box-4"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="header">
						<h2 class="heading">
							<span>Wilayah Desa</span>
						</h2>
					</div>
					<div class="col-1-4">
						<div class="wrap-col item">
							<i class="fa fa-leaf"></i>
							<h3>Mata Pencaharian</h3>
							<p>Mayoritas Penduduk desa berpencaharian Petani, industri dan pedagang</p>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col item">
							<i class='fa fa-road'></i>
							<h3>Jalan Aspal</h3>
							<p>Akses transportasi desa semakin mudah dengan jalan aspal</p>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col item">
							<i class='fa fa-tree'></i>
							<h3>Pegunungan</h3>
							<p>Wilayah dikelilingi dataran dan pegunungan menjulang tinggi</p>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col item">
							<i class='fa fa-map-marker'></i>
							<h3>Lokasi Wisata</h3>
							<p>Ada beberapa aspek wisata yang tersedia di wilayah desa</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="content-box box-5"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col item">
							<h3 class="item-header">SELAMAT DATANG</h3>
							<span>DI WEBSITE RESMI DESA PANCASAN</span>
							<img src="<?php echo base_url(). 'frontend/template/images/logo.png';?>" />
							<p>Desa Pancasan adalah salah satu desa yang terletak di kabupaten Banyumas Jawa Tengah. Wilayahnya terdiri atas dataran tinggi dan banyak terdapat sentra industri</p>
							<a class="btn" href="tentang">More</a>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col item">
							<h3 class="item-header">INFORMASI SEPUTAR DESA</h3>
							
							<p>Website ini dapat digunakan sebagai media informasi untuk warga masyrarakat desa Pancasan dan sekitarnya</p>
							<ul class="link">
								<li><a href="<?php echo base_url().'home';?>"> BERANDA</a></li>
								<li><a href="<?php echo base_url().'artikel';?>"> ARTIKEL</a></li>
								<li><a href="<?php echo base_url().'berita';?>"> INFORMASI / BERITA</a></li>
								<li><a href="<?php echo base_url().'galeri';?>"> GALERI</a></li>
								<li><a href="<?php echo base_url().'kontak';?>"> KONTAK</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col item" style="border-right: none;">
							<h3 class="item-header">Berita Terbaru</h3>
							<?php
					
							foreach($artikel as $s){
							?>
							<span><?php echo $s->judul_artikel ?></span>
							<p><?php echo $s->summary ?></p>
							<hr style="border: 1px dashed #ccc;margin: 17px 0;">
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>




<header >
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
			<link href="<?php echo base_url(). 'frontend/template/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="<?php echo base_url().'frontend/admin/bower_components/bootstrap/dist/css/bootstrap.min.css';?>">
	
				<ul>
				   <li class='active'><a href="<?php echo base_url(). 'Home';?>">Home</a></li>
				   	<li><a href="<?php echo base_url(). 'tentang';?>">Tentang</a></li>
				   <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						Informasi<span class="glyphicon glyphicon-triangle-bottom"> </a>
						<ul class="dropdown-menu">
						<li><a href="<?php echo base_url().'sejarah';?>">Sejarah Desa</a></li>
						<li><a href="<?php echo base_url().'struktur';?>">Struktur Organisasi</a></li>
						<li><a href="<?php echo base_url().'kepaladesa';?>">Kepala Desa</a></li>
						<li><a href="<?php echo base_url().'berita';?>">Berita Desa</a></li>
						<li><a href="<?php echo base_url().'kependudukan';?>">Kependudukan</a></li>
						<li><a href="<?php echo base_url().'peta';?>">Peta Wilayah</a></li>
				<!--	<li><a href="#">STAFF</a></li>
						<li><a href="#">APBD</a></li>	-->
						</ul>
					</li>
				   <li><a href="<?php echo base_url(). 'artikel';?>">Artikel</a></li>
				   <li><a href="<?php echo base_url(). 'galeri';?>">Galeri</a></li>
				   <li><a href="<?php echo base_url(). 'kontak';?>">Kontak</a></li>
				</ul>
			</div>
			<?php
					foreach($logo as $s){
					?>
			<a href='<?php echo base_url(). 'Home';?>' class="logo"><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_logo?>" /></a>
					
			<?php } ?>
		</div>
	</div>
</header>
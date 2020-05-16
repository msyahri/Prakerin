<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="sub-header ">
			<div class="zerogrid"> 
				<h1>Artikel Desa</h1>
				Beragam informasi menarik tentang desa Gumelar
			</div>
		</div>	
		<div class="zerogrid">
			<div class="row">
				<div id="main-content" class="col-2-3">
					<div class="wrap-col wrap-content">
					<?php
					foreach($artikel as $s){
					?>
						<article>
							<div class="art-header">
								<a href="#"><h3><?php echo $s->judul_artikel ?> </h3></a>
								<div class="info">Posted on <?php echo $s->tanggal_posting ?> </div>
								<div class="info"><b>ID Kategori : <?php echo $s->id_kategori_artikel ?></b> </div>
							</div>
							<div class="art-content">
							<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_artikel ?>" class="img-responsive" width='500'>
								<p><?php echo $s->summary ?></p>
							</div>
							<a href="<?php echo base_url().'artikel/detail/'?><?php echo $s->id; ?>">Read More...</a>
						</article>
					<?php } ?>
					</div>
				</div>
				<div id="sidebar" class="col-1-3">
					<div class="wrap-col wrap-sidebar">
						
					
						<!---- Start Widget ---->
						<div class="widget wid-meta">
							<div class="wid-header">
								<h4 class="color-orange">Artikel Lama</h4>
							</div>
							<div class="wid-content">
								<p><a href="<?php echo base_url().'artikel/detail/'?><?php echo $s->id; ?>"><?php echo $s->summary ?></a></p>
							</div>
						</div>

					
						<!---- Start Widget ---->
						<div class="widget wid-post">
							<div class="wid-header">
								<h5 class="color-orange">Posting Terbaru</h5>
							</div>
							<div class="wid-content">
								<ul class="link">
								<?php
									foreach($artikel as $s){
									?>
									<li><a href="<?php echo base_url().'artikel/detail/'?><?php echo $s->id; ?>"><?php echo $s->judul_artikel ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<!---- Start Widget ---->
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
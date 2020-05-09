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
					foreach($berita as $s){
					?>
						<article>
							<div class="art-header">
								<a href="#"><h3><?php echo $s->nama_berita ?> </h3></a>
								</div>
							<div class="art-content">
							<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto ?>" class="img-responsive" width='500'>
								<p><?php echo $s->isi ?></p>
							</div>
							<a href="<?php echo base_url().'berita/detail/'?><?php echo $s->id; ?>">Read More...</a>
						</article>
					<?php } ?>
					</div>
				</div>
				<div id="sidebar" class="col-1-3">
					<div class="wrap-col wrap-sidebar">
						
					
										<!---- Start Widget ---->
										<div class="widget wid-meta">
										<div class="wid-header">
											<h4 class="color-orange">Baca Juga</h4>
										</div>
										<div class="wid-content">
										<ul class="link">
											<p><li><a href="<?php echo base_url().'berita/detail/'?><?php echo $s->id; ?>"><?php echo $s->nama_berita ?></a></li></p>
										</ul>
										</div>
									</div>
			
								
						<!---- Start Widget ---->
						<div class="widget wid-post">
							<div class="wid-header">
								<h5 class="color-orange">Berita Terbaru</h5>
							</div>
							<div class="wid-content">
								<ul class="link">
								<?php
									foreach($berita as $s){
									?>
									<li><a href="<?php echo base_url().'berita/detail/'?><?php echo $s->id; ?>"><?php echo $s->nama_berita ?></a></li>
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
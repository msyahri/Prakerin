

<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="sub-header">
			<div class="zerogrid"> 
				<h1>Prestasi</h1>
			</div>
		</div>	
		<div class="zerogrid">
			<div class="row">
				<div class="col-full">
					<div class="wrap-col">
						<div id="main-content">
							<div class="wrap-content">
							<?php
								
								foreach($prestasi as $s){
								?> 
								<article>
									<div class="art-header">
										<h1 class="entry-title"><?php echo $s->nama_prestasi ?></h1>
									</div>
									<div class="art-content">
										<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto ?>" class='image-responsive' width='500'>
										<p><?php echo $s->isi ?></p>
									
								</article>

								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


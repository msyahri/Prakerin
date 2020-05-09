

<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="sub-header">
			<div class="zerogrid"> 
				<h1>Peta Wilayah</h1>
			</div>
		</div>	
		<div class="zerogrid">
			<div class="row">
				<div class="col-full">
					<div class="wrap-col">
						<div id="main-content">
							<div class="wrap-content">
							<?php
								$no = 1;
								foreach($peta as $s){
								?> 
								<article>
									<div class="art-header">
										<h1 class="entry-title"><?php echo $s->judul ?></h1>
									</div>
									<div class="art-content" align="center">
										<img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto ?>" class='image-responsive' width='630'>

                                        </div>
                                        <p><?php echo $s->summary ?></p>
									    <hr>
                      <p><?php echo $s->keterangan ?></p>
                                       
                                        <hr>
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


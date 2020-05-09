

<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div class="sub-header">
			
				<h1>Kepala Desa</h1>
			</div>
		</div>	
		<div class="zerogrid">
			<div class="row">
				<div class="col-full">
					<div class="wrap-col">
						<div id="main-content">
							<div class="wrap-content">
							

<!-- DATA TABEL AWAL -->

<table class="table table-striped table-bordered data display nowrap" id="data">
    
    <thead>
      <tr>
        
        <th width="170"><center>NAMA</center></th>
        <th><center>FOTO</center></th>
      <!-- <th><center>PENDIDIKAN</center></th> -->
        <th><center>KETERANGAN JABATAN</center></th>
        <th width="105"><center>NO. TELP</center></th>
        <th><center>ALAMAT</center></th>
      </tr>
    </thead>
    <tbody>
      <?php
  $no = 1;
  foreach($kepaladesa as $s){
  ?>
  <tr>
    
    <td><?php echo $s->nama ?></td>
    <td align="center"><img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto ?>"  width="350"</td>
  <!--  <td><?php echo $s->pendidikan ?></td> -->
    <td><?php echo $s->keterangan_jabatan ?></td>
    <td><?php echo $s->no_telp ?></td>
    <td><?php echo $s->alamat ?></td>
    
  </tr>
  <?php } ?>
    </tbody>
  </table>
  <hr>
<!-- END OF DATA TABEL -->
								<?php  ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
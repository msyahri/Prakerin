<section id="container">
	<div class="wrap-container clearfix">
		<div id="main-content">
			<div class="sub-header">
				<div class="zerogrid">
					<h1>KONTAK KAMI</h1>
					Silahkan gunakan form yang tersedia untuk menghubungi kami untuk mendapatkan informasi lebih lanjut.
				</div>
			</div>
			<div class="zerogrid">
				<div class="row">
					
					<div class="col-2-3">
						<div class="wrap-col">
							<div class="contact">
								<h5 class="color-orange">Form Kontak</h5>

								<!--Warning-->
								<center></center>
								<!---->
								<div id="contact_form">
									<form name="form1" id="ff" method="post" action="<?php echo base_url(). 'administrator/kontak/input_aksi'; ?>" enctype="multipart/form-data">
										<label class="row">
											<input type="text" name="nama" id="nama" placeholder="Nama" required="required" />
										</label>
										<label class="row">
											<input type="email" name="email" id="email" placeholder="Email" required="required" />
										</label>
										<label class="row">
											<input type="no_telp" name="no_telp" id="no_telp" placeholder="Nomor Telepon" required="required" />
										</label>
										<label class="row">
											<input type="text" name="website" id="name" placeholder="website (opsional)"  />
										</label>
										<label class="row">
											<input type="alamat" name="alamat" id="alamat" placeholder="Alamat" required="required" />
										</label>
										<label class="row">
											<textarea name="pesan" id="pesan" class="form-control" rows="4" cols="25" required="required"placeholder="Pesan"></textarea>
										</label>
										<center><input class="btn" type="submit" name="Submit" value="Kirim"></center>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1-3">
						<div class="wrap-col">
							<h5 class="color-orange">Informasi Kontak</h5>
								<span>LAYANAN UNTUK INFORMASI SERTA ADUAN MASYARAKAT DESA PANCASAN</span>
								<p>Anda dapat mengirimkan pesan Anda kepada kami melalui form di samping dengan menyantumkan informasi yang benar. Kami tidak akan menyebarluaskan atau mempublikasikan data - data yang Anda kirimkan.</p>
							<hr>
								<p>JL.Raya Desa Pancasan, Kec. Ajibarang, Kab. Banyumas, Jawa Tengah</p>
								<?php
					foreach ($info as $s){
					?>
								<p><?php echo $s->telp ?></p>
								<?php } ?>
								
								<?php
					foreach ($info as $s){
					?>
					<p><?php echo $s->email ?></p>
								<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

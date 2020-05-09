<!--////////////////////////////////////Footer-->
<footer>



	<div class='embed-container maps'>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.393548011858!2d109.07555171433262!3d-7.421624175160353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6563c254c80c33%3A0x91c72d252cdc6851!2sKantor+Kepala+Desa+Pancasan!5e0!3m2!1sid!2sid!4v1504490163703" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
			<?php
	//				foreach ($info as $s){
	//			?>
					
				
				
				<span> <a href="http://artikelklopedia.blogspot.com">M. Syahri</a></span><br>
				<span>Support by : <a href="https://www.banyu.center">Banyu Center
				<br/>
				<span>&copy; 2017 - All Right Reserved</span>
				
				</a></span><br>
				<?php // } ?> 
			</div>
		</div>
	</div>
</footer>

	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none");
	});
	</script>

</div>
</body></html>
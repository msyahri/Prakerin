<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Desa Pancasan</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	<meta name="keterangan" content="M. Syahri | artikelklopedia.net | artikelklopedia.blogspot.co.id">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS 
	================================================== -->

	<link rel="stylesheet" href="<?php echo base_url(). 'frontend/template/css/zerogrid.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'frontend/template/css/style.css';?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'frontend/template/css/galeri.css';?>">
	<link rel="stylesheet" href="<?php echo base_url(). 'frontend/template/css/responsiveslides.css';?>">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url(). 'frontend/template/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url().'frontend/admin/bower_components/bootstrap/dist/css/bootstrap.min.css';?>">

	<script src="<?php echo base_url(). 'frontend/template/js/jquery-latest.min.js';?>"></script>
	<script src="<?php echo base_url(). 'frontend/template/js/script.js';?>"></script>
	<script src="<?php echo base_url(). 'frontend/template/js/jquery183.min.js';?>"></script>
  <script src="<?php echo base_url(). 'frontend/template/js/responsiveslides.min.js';?>"></script>
  <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>

	<script>
	$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
	</script>


	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->

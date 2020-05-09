<section class="content-box box-1">
  <div class="zerogrid">
    <div class="header">
      <h2 class="heading">
        <span>Galeri</span>
      </h2>
      <p>Berikut adalah galeri foto Desa Gumelar </p>
    </div>
    <div class="row">

        <div align="center">
        <button class="btn btn-default filter-button" data-filter="all">All</button>
        <?php
        $no = 1;
        foreach($kategori as $s){
        ?>
            <button class="btn btn-default filter-button" data-filter="<?php echo $s->nama_kategori ?>"><?php echo $s->nama_kategori ?></button>  
        <?php } ?>
        </div>


        <?php
        $no = 1;
        foreach($galeri as $s){
        ?>
      <div class="col-1-3">
        <div class="wrap-col item">
          <div class="gallery_product col-lg-12 col-md-4 col-sm-4 col-xs-6 filter <?php echo $s->nama_kategori ?>">
                <img src="<?php echo base_url(). 'frontend/template/images/'?><?php echo $s->foto_galeri ?>" class="img-responsive">
            </div>
        </div>
      </div>
      
        <?php } ?>

    </div>
  </div>
</section>

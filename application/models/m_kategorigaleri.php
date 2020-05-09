<?php

class M_kategorigaleri extends CI_Model{

  var $tabel = 'tb_kategori_galeri';
  function tampil_data(){
		return $this->db->get('tb_kategori_galeri');
  }

}

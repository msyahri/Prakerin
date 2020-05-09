<?php

class M_kategoriberita extends CI_Model{

  var $tabel = 'tb_kategori_artikel';
  function tampil_data(){
		return $this->db->get('tb_kategori_artikel');
  }
  
 


 
}

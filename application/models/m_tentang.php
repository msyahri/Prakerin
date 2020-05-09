<?php

class M_tentang extends CI_Model{

  var $tabel = 'tb_tentang_desa';
  function tampil_data(){
		return $this->db->get('tb_tentang_desa');
  }
  
  function tampil_data_featured(){
		return $this->db->get('tb_tentang_desa');
	}

}

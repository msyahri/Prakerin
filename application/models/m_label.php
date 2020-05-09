<?php

class M_label extends CI_Model{

  var $tabel = 'tb_kategori_galeri';
  function tampil_data(){
		return $this->db->get('tb_kategori_galeri');
  }
  
 function input_label($data,$table){
   $this->db->insert($table,$data);
 }

function hapus_data($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
}

function edit_data($where,$table){
  return $this->db->get_where($table,$where);
}


function update_data($where,$data,$table){
  $this->db->where($where);
  $this->db->update($table,$data);

}

}
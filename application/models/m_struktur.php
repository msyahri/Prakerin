<?php

class M_struktur extends CI_Model{

  var $tabel = 'tb_struktur_organisasi';
  function tampil_data(){
		return $this->db->get('tb_struktur_organisasi');
  }
  
 function input_struktur($data,$table){
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
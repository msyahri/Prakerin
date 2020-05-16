<?php

class M_artikel extends CI_Model{

  var $tabel = 'tb_artikel';
  function tampil_data(){
    return $this->db->get('tb_artikel');
    
  }
  
  function tampil_data_featured(){
		return $this->db->get('v_artikel_featured');
  }

  function tampil_data_latest(){
    return $this->db->get('v_artikel_latest');
}
  
  function tampil_data_kependudukan(){
		return $this->db->get('tb_kependudukan');
  }
  
  function tampil_data_petawilayah(){
		return $this->db->get('tb_peta_desa');
  }
  
  function tampil_data_apbd(){
		return $this->db->get('tb_apbd');
  }
  
  function tampil_data_sejarah(){
		return $this->db->get('tb_sejarah_desa');
  }
  function tampil_data_galeri(){
    return $this->db->get('tb_galeri');
}
  function get_artikel_byid($id) {
    $this->db->from($this->tabel);
    $this->db->where('id', $id);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
        return $query->result();
    }
    }

    function input_artikel($data,$table){
    $this->db->insert($table,$data);
    }

    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
     }
   
    function get_update($data,$where){
        $this->db->where($where);
        $this->db->update($this->tabel, $data);
        return TRUE;
     }

     function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
      }

 
 function get_artikel_kategori_byid($id) {
    $this->db->from($this->tabel);
    $this->db->where('id', $id);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
        return $query->result();
    }
    }

    function input_artikel_kategori($data,$table){
    $this->db->insert($table,$data);
    }

    function edit_data_kategori($where,$table){
        return $this->db->get_where($table,$where);
     }
   
    function get_update_kategori($data,$where){
        $this->db->where($where);
        $this->db->update($this->tabel, $data);
        return TRUE;
     }

     function hapus_data_kategori($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
      }



}

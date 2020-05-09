<?php

class M_kontak extends CI_Model{

    var $tabel = 'tb_kontak';
    var $table = 'tb_kontak_info';
    
    function tampil_data(){
		return $this->db->get('tb_kontak');
    }
  
    function tampil_data_kontak(){
		return $this->db->get('tb_kontak');
    }
  
    function get_kontak_byid($id) {
    $this->db->from($this->tabel);
    $this->db->where('id', $id);

    $query = $this->db->get();
    $query = $this->db->get('info');

    if ($query->num_rows() == 1) {
    return $query->result();
    }
    }

    function input_kontak($data,$table){
    $this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

    ////////////// INFO KONTAK /////////////

    public function tampil_data_info(){
      return $this->db->get('tb_kontak_info');
    }

    function get_kontak_info_byid($id) {
      $this->db->from($this->tabel);
      $this->db->where('id', $id);
  
      $query = $this->db->get();
  
      if ($query->num_rows() == 1) {
      return $query->result();
      }
      }

      public function input_info($data,$table){
      $this->db->insert($table,$data);
      }

    public function edit_info($where,$table){
        return $this->db->get_where($table,$where);
      }
      
   public function update_data_info($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
      
      }

   public function edit_data_info($where,$table){
          return $this->db->get_where($table,$where);
       }
     
  public function get_update_info($data,$where){
          $this->db->where($where);
          $this->db->update($this->table, $data);
          
       }
  

      public function hapus_data_info($where,$table){
          $this->db->where($where);
          $this->db->delete($table);
        }
  
}
<?php

class M_setting extends CI_Model{

  var $tabel = 'tb_setting';
  var $table = 'tb_admin';  

  function tampil_data(){
		return $this->db->get('tb_setting');
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

//////////Administrator//////////
   
    public function tampil_data_admin(){
		return $this->db->get('tb_admin');
  }
    public function input_admin($data,$table){
    $this->db->insert($table,$data);
    }

    function edit_data_admin($where,$table){
        return $this->db->get_where($table,$where);
     }
   
 function get_update_admin($data,$where){
        $this->db->where($where);
        $this->db->update($this->table, $data);
        return TRUE;
     }


    public function hapus_data_admin($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
      }

 
}

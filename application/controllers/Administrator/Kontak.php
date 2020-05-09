<?php

class Kontak extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_kontak');
		$this->load->model('m_infokontak');
		$this->load->helper('url');
		
	}

  function index(){
		$data['kontak'] = $this->m_kontak->tampil_data()->result();
		$data['title'] = 'Kontak';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_kontak',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');
		
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}


	}

	function input(){
		$data['kontak'] = $this->m_kontak->tampil_data()->result();
		$data['title'] = 'Kontak';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('frontend/kontak',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');


	}

	function input_aksi(){

		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
		$website = $this->input->post('website');
        $alamat = $this->input->post('alamat');
        $pesan = $this->input->post('pesan');
		

							$data = array(
									'nama' => $nama,
									'email' => $email,
									'no_telp' => $no_telp,
                                    'website' => $website,
                                    'alamat' => $alamat,
									'pesan' => $pesan
									);
									$this->m_kontak->input_kontak($data,'tb_kontak');
									redirect('/kontak');
    }


	function hapus($id_kontak){
		$where = array('id' => $id_kontak);
		$this->m_kontak->hapus_data($where,'tb_kontak');
		redirect('administrator/kontak/index');
		
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}
////////////// INFO KONTAK //////////////
		}
		public function info(){
			$data['info'] = $this->m_infokontak->tampil_data()->result();
			$data['title'] = 'Halaman Info Kontak';
			$this->load->view('backend/header-admin',$data);
			$this->load->view('backend/main-header');
			$this->load->view('backend/main-sidebar');
			$this->load->view('backend/v_info',$data);
			$this->load->view('backend/footer-copyright');
			$this->load->view('backend/control-sidebar');
			$this->load->view('backend/footer-admin');
		
		}
		
		public function info_tambah(){
			$data['title'] = 'Halaman Tambah Info';
			$this->load->view('backend/header-admin',$data);
			$this->load->view('backend/main-header');
			$this->load->view('backend/main-sidebar');
			$this->load->view('backend/v_info_input',$data);
			$this->load->view('backend/footer-copyright');
			$this->load->view('backend/control-sidebar');
			$this->load->view('backend/footer-admin');
		
		
		}
		
		public function info_tambah_aksi() {
			$telp = $this->input->post('telp');
			$email = $this->input->post('email');
			$last = $this->input->post('last');
		
		
			$data = array(
				'telp' => $telp,
				'email' => $email,
				'last' => $last,
		
			);
		
			$this->m_infokontak->input_info($data, 'tb_kontak_info');
			redirect('administrator/kontak/info');
		
		}
		
		
		public function info_hapus($id){
			$where = array('id' => $id);
			$this->m_infokontak->hapus_data($where,'tb_kontak_info');
			   redirect('administrator/kontak/info');
		}
		
		public function info_edit($id){
			$where = array('id'=>$id);
			$data['info'] = $this->m_infokontak->edit_data($where,'tb_kontak_info')->result();
			$data['title']='Halaman Info Kontak';
			$this->load->view('backend/header-admin',$data);
			$this->load->view('backend/main-header');
			$this->load->view('backend/main-sidebar');
			$this->load->view('backend/v_info_edit',$data);
			$this->load->view('backend/footer-copyright');
			$this->load->view('backend/control-sidebar');
			$this->load->view('backend/footer-admin');
		
		} 
		
			public function info_edit_aksi(){
				$id = $this->input->post('id');
				$telp = $this->input->post('telp');
				 $email = $this->input->post('email');
				$last = $this->input->post('last');
				
		
		
				$data = array(
					'telp' => $telp,
					'email' => $email,
					'last' =>$last,
				
		
				);
		
				$where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
				$this->m_infokontak->get_update($data,$where); //akses model untuk menyimpan ke database
				redirect('administrator/kontak/info');
			}
	
}
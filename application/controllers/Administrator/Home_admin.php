<?php

class Home_admin extends CI_Controller{

	//Load data dari database dengan fungsi construct
	function __construct(){
		parent::__construct();
		//Ambil pengolahan data dari model m_artikel.php
		$this->load->model('m_artikel');

		//Cek session apakah user sudah login atau belum
		// jika belum maka diarahkan ke halaman form login kembali
		if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}
	}

	//Fungsi menampilkan halaman awal
	function index(){
		$data['title']='Home Admin';
		//Ambil data dari fungsi di m_artikel.php
		$data['artikel'] = $this->m_artikel->tampil_data()->result();
		$data['kependudukan'] = $this->m_artikel->tampil_data_kependudukan()->result();
		$data['apbd'] = $this->m_artikel->tampil_data_apbd()->result();
		$data['sejarah'] = $this->m_artikel->tampil_data_sejarah()->result();
		$data['wilayah'] = $this->m_artikel->tampil_data_petawilayah()->result();
		
		//Taruh data pada kontent
		$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/main-content');
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}

	//Fungsi untuk logout
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('administrator/login'));
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_artikel');
		$this->load->model('m_setting');
        $this->load->helper('url');
        

	}

	public function index()
	{
		$data['artikel'] = $this->m_artikel->tampil_data()->result();
		$data['latest'] = $this->m_artikel->tampil_data_latest()->result();
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/header');
		$this->load->view('frontend/artikel',$data);
		$this->load->view('frontend/footer');


	}

	public function detail($id){ //fungsi detail kategori
		$data['title'] = 'Detail Artikel'; //judul title
		$data['artikel'] = $this->m_artikel->get_artikel_byid($id); //query model kategori sesuai id
		$data['logo'] = $this->m_setting->tampil_data()->result();$this->load->view('frontend/header');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/v_detail_artikel',$data);
		$this->load->view('frontend/footer');
}
}

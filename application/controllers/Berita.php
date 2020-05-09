<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_setting');
        $this->load->helper('url');
        

	}

	public function index()
	{
		$data['berita'] = $this->m_berita->tampil_data()->result();
		$data['latest'] = $this->m_berita->tampil_data_latest()->result();
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/header');
		$this->load->view('frontend/berita',$data);
		$this->load->view('frontend/footer');


	}

	public function detail($id){ //fungsi detail kategori
		$data['title'] = 'Detail Berita'; //judul title
		$data['berita'] = $this->m_berita->get_berita_byid($id); //query model kategori sesuai id
		$data['logo'] = $this->m_setting->tampil_data()->result();$this->load->view('frontend/header');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/v_detail_berita',$data);
		$this->load->view('frontend/footer');
}
}

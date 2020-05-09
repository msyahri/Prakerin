<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_setting');
		$this->load->model('m_galeri');
		$this->load->model('m_kategorigaleri');
        $this->load->helper('url');
        

	}


	public function index()
	{
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$data['kategori'] = $this->m_kategorigaleri->tampil_data()->result();
		$data['galeri']=$this->m_galeri->tampil_data()->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/galeri');
		$this->load->view('frontend/footer');

	}
}


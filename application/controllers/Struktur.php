<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_struktur');
		$this->load->model('m_setting');
        $this->load->helper('url');
        

	}

	public function index()
	{
		$data['struktur'] = $this->m_struktur->tampil_data()->result();
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/struktur',$data);
		$this->load->view('frontend/footer');


	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_kontak');
		$this->load->model('m_infokontak');
		$this->load->model('m_setting');
        $this->load->helper('url');
        

	}


	public function index()
	{
		$data['kontak'] = $this->m_kontak->tampil_data()->result();
		$data['info'] = $this->m_infokontak->tampil_data_kontak_info()->result();
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/kontak');
		$this->load->view('frontend/footer');


	}
}

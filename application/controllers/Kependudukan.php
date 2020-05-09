<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kependudukan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_kependudukan');
		$this->load->model('m_setting');
        $this->load->helper('url');
        

	}

	public function index()
	{
		$data['kependudukan'] = $this->m_kependudukan->tampil_data()->result();
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/kependudukan',$data);
		$this->load->view('frontend/footer');


	}
}


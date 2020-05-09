<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_sejarah');
		$this->load->model('m_setting');
        $this->load->helper('url');
        

	}

	public function index()
	{
		$data['sejarah'] = $this->m_sejarah->tampil_data()->result();
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/sejarah',$data);
		$this->load->view('frontend/footer');


	}
}


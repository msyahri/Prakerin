<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_artikel');
		$this->load->model('m_setting');
		$this->load->model('m_slider');

		
	}

	public function index()
	{
		$data['artikel'] = $this->m_artikel->tampil_data_featured()->result();
		$data['slider'] = $this->m_slider->tampil_data()->result();
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$data['kependudukan'] = $this->m_artikel->tampil_data_kependudukan()->result();
		$data['apbd'] = $this->m_artikel->tampil_data_apbd()->result();
		$data['sejarah'] = $this->m_artikel->tampil_data_sejarah()->result();
		$data['wilayah'] = $this->m_artikel->tampil_data_petawilayah()->result();
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu',$data);
		$this->load->view('frontend/homepage',$data);
		$this->load->view('frontend/footer');


	}
}

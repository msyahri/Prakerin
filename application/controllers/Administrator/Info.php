<?php

class Maps extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_maps');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}

	}

  function index(){
		$data['maps'] = $this->m_maps->tampil_data()->result();
		$data['title'] = 'Halaman Setting Maps';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_maps',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

    }
    
    function logo(){
		$data['maps'] = $this->m_maps->tampil_data()->result();
		$data['title'] = 'Halaman Setting Maps';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_maps',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}


	function edit($id){
		$where = array('id' => $id);
		$data['maps'] = $this->m_maps->edit_data($where,'tb_maps')->result();
		$data['title']='Halaman Edit Maps';
		$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_maps_edit',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');
  
	  }
      function edit_aksi() {
        $url = $this->input->post('url');
        $info = $this->input->post('info');
        $last = $this->input->post('last');

        $data = array(
            'url' => $url,
            'info' => $info,
            'last' => $last,
        );

        $this->m_maps->input_maps($data, 'tb_maps');
        redirect('administrator/maps/index');

    }
}

<?php

class Strukturorganisasi extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_struktur');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}

	}

  function index(){
		$data['struktur'] = $this->m_struktur->tampil_data()->result();
		$data['title'] = 'Halaman struktur';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_struktur',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}

	function tambah(){
		$data['title'] = 'Halaman Tambah Struktur';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_struktur_input',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');


	}

    function tambah_aksi() {
        $nama = $this->input->post('nama');
        $jenis_jabatan = $this->input->post('jenis_jabatan');
        $keterangan_jabatan = $this->input->post('keterangan_jabatan');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'jenis_jabatan' => $jenis_jabatan,
            'keterangan_jabatan' => $keterangan_jabatan,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
        );

        $this->m_struktur->input_struktur($data, 'tb_struktur_organisasi');
        redirect('administrator/strukturorganisasi/index');

    }

	
function hapus($id){
    $where = array('id' => $id);
    $this->m_struktur->hapus_data($where,'tb_struktur_organisasi');
    redirect('administrator/strukturorganisasi');
}

function edit($id){
    $where = array('id'=>$id);
    $data['struktur'] = $this->m_struktur->edit_data($where,'tb_struktur_organisasi')->result();
    $data['title']='Halaman Edit Data Struktur';
    $this->load->view('backend/header-admin',$data);
	$this->load->view('backend/main-header');
	$this->load->view('backend/main-sidebar');
	$this->load->view('backend/v_struktur_edit',$data);
	$this->load->view('backend/footer-copyright');
	$this->load->view('backend/control-sidebar');
	$this->load->view('backend/footer-admin');

} 

function edit_aksi(){
    $id = $this->input->post('id');
     $nama = $this->input->post('nama');
        $jenis_jabatan = $this->input->post('jenis_jabatan');
        $keterangan_jabatan = $this->input->post('keterangan_jabatan');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'jenis_jabatan' => $jenis_jabatan,
            'keterangan_jabatan' => $keterangan_jabatan,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
        );

        $where = array('id' => $id);
        $this->m_struktur->update_data($where,$data,'tb_struktur_organisasi');
        redirect('administrator/strukturorganisasi');
}
	




	



	



}
 
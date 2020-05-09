<?php

class Kategoriartikel extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
		$this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}

	}

  function index(){
		$data['kategori'] = $this->m_kategori->tampil_data()->result();
		$data['title'] = 'Halaman Kategori';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_Kategori',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}

//ini fungsi untuk tambah menuju ke form
	function tambah(){
		$data['title'] = 'Halaman Tambah Kategori';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_kategori_input',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');


	}
//ini aksi untuk tambah

	function tambah_aksi() {
        $nama_kategori = $this->input->post('nama_kategori');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'nama_kategori' => $nama,
            'keterangan' => $keterangan,


        );

        $this->m_kategori->input_kategori ($data,'tb_kategori_artikel');
        redirect('administrator/artikel/kategori');

    }
	
//fungsi menghapus data
function hapus($id){
    $where = array('id' => $id);
    $this->m_kategori->hapus_data ($where,'tb_kategori_artikel');
    redirect('administrator/artikel/kategori');

}

//fungsi edit data
function edit($id){
    $where = array('id' =>$id);
    $data['kategori'] = $this->m_kategori->edit_data($where,'tb_kategori_artikel');
    $data['title']='Halaman Edit Data Kategori';
    $this->load->view('backend/header-admin',$data);
    $this->load->view('backend/main-header');
	$this->load->view('backend/main-sidebar');
	$this->load->view('backend/v_kategori_edit-',$data);
	$this->load->view('backend/footer-copyright');
	$this->load->view('backend/control-sidebar');
	$this->load->view('backend/footer-admin');

}

function edit_aksi(){
    $id =$this->input->post('id');
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
            'alamat' => $alamat

        );

$where = array('id' => $id);

$this->m_kategori->update_data($where,$data,'tb_kategori_artikel');
redirect('administrator/artikel//kategori');


}
}
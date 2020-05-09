<?php

class Artikel extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_artikel');
		$this->load->model('m_kategori');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}

	}

  function index(){
		$data['artikel'] = $this->m_artikel->tampil_data()->result();
		$data['title'] = 'Halaman artikel';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_artikel',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}

	function tambah(){
		$data['kategori'] = $this->m_kategori->tampil_data()->result();
		$data['title'] = 'Halaman artikel';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_artikel_input',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');


	}

	function tambah_aksi(){
		$this->load->library('upload');
		$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
    	$config['upload_path'] = './frontend/template/images/'; //path folder
    	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '4048'; //maksimum besar file 2M
		$config['max_width']  = '6238'; //lebar maksimum 1288 px
		$config['max_height']  = '3288'; //tinggi maksimu 768 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya
		   
		$this->upload->initialize($config);
		$tanggal_posting = $this->input->post('tanggal_posting');
		$kategori_id = $this->input->post('id_kategori_artikel');
		$judul = $this->input->post('judul_artikel');
		$summaries = $this->input->post('summary');
		$isi_artikel = $this->input->post('isi_artikel');
		

		if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
								$data = array(
									'tanggal_posting' => $tanggal_posting,
									'judul_artikel' => $judul,
									'foto_artikel' => $gbr['file_name'],
									'summary' => $summaries,
									'isi_artikel' => $isi_artikel,
									'id_kategori_artikel' => $kategori_id
									);
									$this->m_artikel->input_artikel($data,'tb_artikel');
									$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
							    redirect('administrator/artikel'); //jika berhasil maka akan ditampilkan view vupload
							   }
						else
						{
							   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
							    redirect('administrator/artikel/tambah'); //jika gagal maka akan ditampilkan form upload
							}
					}
	}

	function edit($id){
		$where = array('id' => $id);
		$data['artikel'] = $this->m_artikel->edit_data($where,'tb_artikel')->result();
		$data['kategori'] = $this->m_kategori->tampil_data()->result();
		$data['title']='Halaman Edit Artikel';
		$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_artikel_edit',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');
  
	  }
  
	  public function edit_aksi(){
  
		   $this->load->library('upload');// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
		   $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		   $path   = './frontend/template/images/'; //path folder
		   $config['upload_path'] = $path; //variabel path untuk config upload
		   $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		   $config['max_size'] = '4048'; //maksimum besar file 2M
		   $config['max_width']  = '5288'; //lebar maksimum 1288 px
		   $config['max_height']  = '2268'; //tinggi maksimu 768 px
		   $config['file_name'] = $nmfile; //nama yang terupload nantinya
  
		   $this->upload->initialize($config);
  
		   $id      = $this->input->post('id'); /* variabel id gambar */
		   $filelama   = $this->input->post('filelama'); /* variabel file gambar lama */
  
		   if($_FILES['filefoto']['name'])
		   {
				   if ($this->upload->do_upload('filefoto'))
				   {
					   $gbr = $this->upload->data();
					   $data = array(
						   'tanggal_posting' =>$this->input->post('tanggal_posting'),
						   'judul_artikel' =>$this->input->post('judul_artikel'),
						   'foto_artikel' =>$gbr['file_name'],
						   'summary' =>$this->input->post('summary'),
						   'isi_artikel' =>$this->input->post('isi_artikel'),
						   'id_kategori_artikel' =>$this->input->post('id_kategori_artikel')
						   
					   );
  
						   @unlink($path.$filelama);//menghapus gambar lama, variabel dibawa dari form
  
						   $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
						   $this->m_artikel->get_update($data,$where); //akses model untuk menyimpan ke database
  
						   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Edit dan Upload gambar berhasil !!</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
						   redirect('administrator/artikel'); //jika berhasil maka akan ditampilkan view vupload
  
				   }
				   else
				   {  /* jika upload gambar gagal maka akan menjalankan skrip ini */
						   $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
						   //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
						   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan upload gambar !! ".$er_upload."</div></div>");
						   redirect('administrator/artikel/edit'); //jika gagal maka akan ditampilkan form upload
				   }
		   }
		   else
		   { /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
  
				   $data = array(
					   'tanggal_posting' =>$this->input->post('tanggal_posting'),
					   'judul_artikel' =>$this->input->post('judul_artikel'),
					   'summary' =>$this->input->post('summary'),
					   'isi_artikel' =>$this->input->post('isi_artikel'),
					   'id_kategori_artikel' =>$this->input->post('id_kategori_artikel')
				   );
  
				   $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
				   $this->m_artikel->get_update($data,$where); //akses model untuk menyimpan ke database
  
				   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berhasil edit, Gambar tidak ada diupload !!</div></div>");
				   redirect('administrator/artikel'); /* jika berhasil maka akan kembali ke home upload */
		   }
	  }




	function hapus($id_artikel){
		$where = array('id' => $id_artikel);
		$this->m_artikel->hapus_data($where,'tb_artikel');
		redirect('administrator/artikel/index');
	}

	
 	public function kategori(){
		$data['kategori'] = $this->m_kategori->tampil_data()->result();
		$data['title'] = 'Halaman Kategori';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_kategori',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}

	public function kategori_tambah(){
		$data['title'] = 'Halaman Tambah Kategori';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_kategori_input',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');


	}

    public function kategori_tambah_aksi() {
        $nama_kategori = $this->input->post('nama_kategori');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'nama_kategori' => $nama_kategori,
            'keterangan' => $keterangan,

        );

        $this->m_kategori->input_kategori($data, 'tb_kategori_artikel');
        redirect('administrator/artikel/kategori');

    }

	
	public function kategori_hapus($id){
    	$where = array('id' => $id);
    	$this->m_kategori->hapus_data($where,'tb_kategori_artikel');
   		redirect('administrator/artikel/kategori');
}

	public function kategori_edit($id){
    	$where = array('id'=>$id);
    $data['kategori'] = $this->m_kategori->edit_data($where,'tb_kategori_artikel')->result();
    $data['title']='Halaman Kategori Artikel';
    $this->load->view('backend/header-admin',$data);
	$this->load->view('backend/main-header');
	$this->load->view('backend/main-sidebar');
	$this->load->view('backend/v_kategori_edit',$data);
	$this->load->view('backend/footer-copyright');
	$this->load->view('backend/control-sidebar');
	$this->load->view('backend/footer-admin');

} 

	public function kategori_edit_aksi(){
         $id = $this->input->post('id');
     	$nama_kategori = $this->input->post('nama_kategori');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'nama_kategori' => $nama_kategori,
            'keterangan' => $keterangan,

        );

        $where = array('id' => $id);
        $this->m_kategori->update_data($where,$data,'tb_kategori_artikel');
        redirect('administrator/artikel/kategori');

    }



	


}

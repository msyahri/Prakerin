<?php

class  apbd extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_apbd');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}

	}

  function index(){
		$data['apbd'] = $this->m_apbd->tampil_data()->result();
		$data['title'] = 'Halaman APBD';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_apbd',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}

	function tambah(){
		$data['apbd'] = $this->m_apbd->tampil_data()->result();
		$data['title'] = 'Halaman Prestasi Desa';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_apbd_input',$data);
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
		$judul = $this->input->post('judul');
        $tahun = $this->input->post('tahun');
		$summary = $this->input->post('summary');
		$keterangan = $this->input->post('keterangan');
		

		
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
								$data = array(
									'judul' => $judul,
									'foto' => $gbr['file_name'],
                                    'tahun' => $tahun,
									'summary' => $summary,
									'keterangan' => $keterangan
									);
									$this->m_apbd->input_apbd($data,'tb_apbd');
									$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
							    redirect('administrator/apbd'); //jika berhasil maka akan ditampilkan view vupload
							   }
						else
						{
							   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
							    redirect('administrator/apbd/tambah'); //jika gagal maka akan ditampilkan form upload
							}
					}
	}

	function edit($id){
		$where = array('id' => $id);
		$data['apbd'] = $this->m_apbd->edit_data($where,'tb_apbd')->result();
		$data['title']='Halaman Edit APBD';
		$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_apbd_edit',$data);
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
						   'judul' =>$this->input->post('judul'),
                           'tahun' =>$this->input->post('tahun'),
						   'foto' =>$gbr['file_name'],
						   'summary' =>$this->input->post('summary'),
						   'keterangan' =>$this->input->post('keterangan')
						   
					   );
  
						   @unlink($path.$filelama);//menghapus gambar lama, variabel dibawa dari form
  
						   $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
						   $this->m_apbd->get_update($data,$where); //akses model untuk menyimpan ke database
  
						   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Edit dan Upload gambar berhasil !!</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
						   redirect('administrator/apbd'); //jika berhasil maka akan ditampilkan view vupload
  
				   }
				   else
				   {  /* jika upload gambar gagal maka akan menjalankan skrip ini */
						   $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
						   //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
						   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan upload gambar !! ".$er_upload."</div></div>");
						   redirect('administrator/apbd/edit'); //jika gagal maka akan ditampilkan form upload
				   }
		   }
		   else
		   { /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
  
				   $data = array(

					   'judul' =>$this->input->post('judul'),
                       'tahun' =>$this->input->post('tahun'),
					   'summary' =>$this->input->post('summary'),
					   'keterangan' =>$this->input->post('keterangan')
				   );
  
				   $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
				   $this->m_apbd->get_update($data,$where); //akses model untuk menyimpan ke database
  
				   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berhasil edit, Gambar tidak ada diupload !!</div></div>");
				   redirect('administrator/apbd'); /* jika berhasil maka akan kembali ke home upload */
		   }
	  }




	function hapus($id_apbd){
		$where = array('id' => $id_apbd);
		$this->m_apbd->hapus_data($where,'tb_apbd');
		redirect('administrator/apbd/index');
	}
}
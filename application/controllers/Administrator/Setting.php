<?php

class Setting extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_setting');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}

	}

  function index(){
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$data['title'] = 'Halaman Setting Logo';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_logo',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

    }
    
    function logo(){
		$data['logo'] = $this->m_setting->tampil_data()->result();
		$data['title'] = 'Halaman Setting Logo';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_logo',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}


	function edit_logo($id){
		$where = array('id' => $id);
		$data['logo'] = $this->m_setting->edit_data($where,'tb_setting')->result();
		$data['title']='Halaman Edit Logo';
		$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_logo_edit',$data);
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
                        'foto_logo' =>$gbr['file_name'],
                           'keterangan' =>$this->input->post('keterangan')
						   
					   );
  
						   @unlink($path.$filelama);//menghapus gambar lama, variabel dibawa dari form
  
						   $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
						   $this->m_setting->get_update($data,$where); //akses model untuk menyimpan ke database
  
						   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Edit dan Upload gambar berhasil !!</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
						   redirect('administrator/setting/logo'); //jika berhasil maka akan ditampilkan view vupload
  
				   }
				   else
				   {  /* jika upload gambar gagal maka akan menjalankan skrip ini */
						   $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
						   //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
						   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan upload gambar !! ".$er_upload."</div></div>");
						   redirect('administrator/setting/edit'); //jika gagal maka akan ditampilkan form upload
				   }
		   }
		   else
		   { /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
  
				   $data = array(
                    'keterangan' =>$this->input->post('keterangan')
				   );
  
				   $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
				   $this->m_setting->get_update($data,$where); //akses model untuk menyimpan ke database
  
				   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berhasil edit, Gambar tidak ada diupload !!</div></div>");
				   redirect('administrator/setting'); /* jika berhasil maka akan kembali ke home upload */
		   }
	  }



 	public function admin(){
		$data['admin'] = $this->m_setting->tampil_data_admin()->result();
		$data['title'] = 'Halaman Admin';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_admin',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}

	public function admin_tambah(){
		$data['title'] = 'Halaman Tambah Admin';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_admin_input',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');


	}

    public function admin_tambah_aksi() {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
		$password = $this->input->post('password');
		$id_level = $this->input->post('id_level');

        $data = array(
            'username' => $username,
            'email' => $email,
			'password' =>$password,
			'id_level' => $id_level,

        );

        $this->m_setting->input_admin($data, 'tb_admin');
        redirect('administrator/setting/admin');

    }

	
	public function admin_hapus($id){
    	$where = array('id' => $id);
    	$this->m_setting->hapus_data($where,'tb_admin');
   		redirect('administrator/setting/admin');
}

	public function admin_edit($id){
    $where = array('id'=>$id);
    $data['admin'] = $this->m_setting->edit_data_admin($where,'tb_admin')->result();
    $data['title']='Halaman Info Admin';
    $this->load->view('backend/header-admin',$data);
	$this->load->view('backend/main-header');
	$this->load->view('backend/main-sidebar');
	$this->load->view('backend/v_admin_edit',$data);
	$this->load->view('backend/footer-copyright');
	$this->load->view('backend/control-sidebar');
	$this->load->view('backend/footer-admin');

} 

	public function admin_edit_aksi(){
		$id = $this->input->post('id');
        $username = $this->input->post('username');
     	$email = $this->input->post('email');
        $password = $this->input->post('password');
		$id_level = $this->input->post('id_level');


        $data = array(
            'username' => $username,
            'email' => $email,
			'password' =>$password,
			'id_level' => $id_level,

        );

        $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
		$this->m_setting->get_update_admin($data,$where); //akses model untuk menyimpan ke database
		redirect('administrator/setting/admin');
	}
}


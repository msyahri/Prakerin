<?php

class Galeri extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_galeri');
		$this->load->model('m_label');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("administrator/login"));
		}

	}

  function index(){
		$data['galeri'] = $this->m_galeri->tampil_data()->result();
		$data['title'] = 'Halaman galeri';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_galeri',$data);
		$this->load->view('backend/footer-copyright');
		$this->load->view('backend/control-sidebar');
		$this->load->view('backend/footer-admin');

	}

	function tambah(){
		$data['kategori'] = $this->m_kategorigaleri->tampil_data()->result();
		$data['title'] = 'Halaman Galeri';
    	$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_galeri_input',$data);
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
		
		$kategori_id = $this->input->post('id_kategori_galeri');
		$nama_galeri = $this->input->post('nama_galeri');
		$keterangan = $this->input->post('keterangan');
		

		if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
								$data = array(
									'nama_galeri' => $nama_galeri,
									'foto_galeri' => $gbr['file_name'],
									'keterangan' => $keterangan,
									'id_kategori_galeri' => $kategori_id
									);
									$this->m_galeri->input_galeri($data,'tb_galeri');
									$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
							    redirect('administrator/galeri'); //jika berhasil maka akan ditampilkan view vupload
							   }
						else
						{
							   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
							    redirect('administrator/galeri/tambah'); //jika gagal maka akan ditampilkan form upload
							}
					}
	}

	function edit($id){
		$where = array('id' => $id);
		$data['galeri'] = $this->m_galeri->edit_data($where,'tb_galeri')->result();
		$data['kategori'] = $this->m_kategorigaleri->tampil_data()->result();
		$data['title']='Halaman Edit galeri';
		$this->load->view('backend/header-admin',$data);
		$this->load->view('backend/main-header');
		$this->load->view('backend/main-sidebar');
		$this->load->view('backend/v_galeri_edit',$data);
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
						   'nama_galeri' =>$this->input->post('nama_galeri'),
						   'foto_galeri' =>$gbr['file_name'],
						   'keterangan' =>$this->input->post('keterangan'),
						   'id_kategori_galeri' =>$this->input->post('id_kategori_galeri')
						   
					   );
  
						   @unlink($path.$filelama);//menghapus gambar lama, variabel dibawa dari form
  
						   $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
						   $this->m_galeri->get_update($data,$where); //akses model untuk menyimpan ke database
  
						   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Edit dan Upload gambar berhasil !!</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
						   redirect('administrator/galeri'); //jika berhasil maka akan ditampilkan view vupload
  
				   }
				   else
				   {  /* jika upload gambar gagal maka akan menjalankan skrip ini */
						   $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
						   //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
						   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan upload gambar !! ".$er_upload."</div></div>");
						   redirect('administrator/galeri/edit'); //jika gagal maka akan ditampilkan form upload
				   }
		   }
		   else
		   { /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
  
				   $data = array(
					   'nama_galeri' =>$this->input->post('nama_galeri'),
					   'keterangan' =>$this->input->post('keterangan'),
					   'id_kategori_galeri' =>$this->input->post('id_kategori_galeri')
				   );
  
				   $where =array('id'=>$id); //array where query sebagai identitas pada saat query dijalankan
				   $this->m_galeri->get_update($data,$where); //akses model untuk menyimpan ke database
  
				   $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berhasil edit, Gambar tidak ada diupload !!</div></div>");
				   redirect('administrator/galeri'); /* jika berhasil maka akan kembali ke home upload */
		   }
	  }




	function hapus($id_galeri){
		$where = array('id' => $id_galeri);
		$this->m_galeri->hapus_data($where,'tb_galeri');
		redirect('administrator/galeri/index');
	}

	
//////////////////////////////////////// KATEGORI //////////////////////////////////////////////



public function label(){
	$data['label'] = $this->m_label->tampil_data()->result();
	$data['title'] = 'Halaman Label';
	$this->load->view('backend/header-admin',$data);
	$this->load->view('backend/main-header');
	$this->load->view('backend/main-sidebar');
	$this->load->view('backend/v_label',$data);
	$this->load->view('backend/footer-copyright');
	$this->load->view('backend/control-sidebar');
	$this->load->view('backend/footer-admin');

}

public function label_tambah(){
	$data['title'] = 'Halaman Tambah Label';
	$this->load->view('backend/header-admin',$data);
	$this->load->view('backend/main-header');
	$this->load->view('backend/main-sidebar');
	$this->load->view('backend/v_label_input',$data);
	$this->load->view('backend/footer-copyright');
	$this->load->view('backend/control-sidebar');
	$this->load->view('backend/footer-admin');


}

public function label_tambah_aksi() {
	$nama_kategori = $this->input->post('nama_kategori');
	$keterangan = $this->input->post('keterangan');


	$data = array(
		'nama_kategori' => $nama_kategori,
		'keterangan' => $keterangan,

	);

	$this->m_label->input_label($data, 'tb_kategori_galeri');
	redirect('administrator/galeri/label');

}


public function label_hapus($id){
	$where = array('id' => $id);
	$this->m_label->hapus_data($where,'tb_kategori_galeri');
	   redirect('administrator/galeri/label');
}

public function label_edit($id){
	$where = array('id'=>$id);
$data['label'] = $this->m_label->edit_data($where,'tb_kategori_galeri')->result();
$data['title']='Halaman Kategori Galeri';
$this->load->view('backend/header-admin',$data);
$this->load->view('backend/main-header');
$this->load->view('backend/main-sidebar');
$this->load->view('backend/v_label_edit',$data);
$this->load->view('backend/footer-copyright');
$this->load->view('backend/control-sidebar');
$this->load->view('backend/footer-admin');

} 

public function label_edit_aksi(){
	 $id = $this->input->post('id');
	 $nama_kategori = $this->input->post('nama_kategori');
	$keterangan = $this->input->post('keterangan');


	$data = array(
		'nama_kategori' => $nama_kategori,
		'keterangan' => $keterangan,

	);

	$where = array('id' => $id);
	$this->m_label->update_data($where,$data,'tb_kategori_galeri');
	redirect('administrator/galeri/label');

}


	



	



}

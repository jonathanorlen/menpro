<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {

/**
* Index Page for this controller.
*
* Maps to the following URL
* 		http://example.com/index.php/welcome
*	- or -
* 		http://example.com/index.php/welcome/index
*	- or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see http://codeigniter.com/user_guide/general/urls.html
*/

public function __construct()
{
parent::__construct();/*
if ($this->session->userdata('astrosession') == FALSE) {
redirect(base_url('authenticate'));			
}*/
}

public function index()

{
	$data['konten']=$this->load->view ('project/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);
}	
public function get_petugas(){
	$data = $this->input->post();

	echo ($data['petugas']);
}
public function get_tanggal(){
	$data = $this->input->post();

	echo (TanggalIndo($data['tanggal']));
}
public function generate()

{
	$tanggal=$this->input->post("tanggal_register");	
	$id = $this->input->post("id_project");

	$ambil_data = $this->db->get_where('project',array('id'  =>  $id));
	$hasil_ambil_data = $ambil_data->row();
	@$kode_klien=@$hasil_ambil_data->kode_client;

	$generate=$kode_klien.$tanggal;
	$key = paramEncrypt($generate);
	echo $key;
}

public function tambah()
{
	$data['konten']=$this->load->view ('project/tambah' , NULL, TRUE);
	$this->load->view ('general/main',$data);

}

public function simpan_tambah()
{	
	$nama_2= $this->input->post("project");
	$nama=substr($nama_2,3);
	$kode_client=($nama_2.date("YmdHis"));

	$data['kode_client']=$kode_client;
	$data['id'] = $this->input->post("id");
	$data['project'] = $this->input->post("project");
	$data['pic'] = $this->input->post("pic");
	$data['alamat'] = $this->input->post("alamat");
	$data['telp'] = $this->input->post("telp");
	$data['keterangan'] = $this->input->post("keterangan");
	$data['project_in'] = $this->input->post("project_in");
	$data['status'] ='open';

	$data['kode_kategori'] = $this->input->post("kode_kategori");
	$kode_rak= $this->db->get_where('kategori_project', array('id' => $data['kode_kategori']));
	$hasil_rak = $kode_rak->row();
	$data['nama_kategori'] = $hasil_rak->nama;

	$data['status_project'] =$this->input->post('status_project');	
	$filename = substr(date("Y"),2,4).date("mdHis");
	if(!empty($_FILES['alur_sistem']['tmp_name'])){

		move_uploaded_file(
			$_FILES['alur_sistem']['tmp_name'],
			'./component/upload/file/uploads/'.'alur_sistem_'.$filename.'.'.pathinfo($_FILES['alur_sistem']['name'], PATHINFO_EXTENSION)
			);
		$data['pid_alur_sistem'] =  'alur_sistem_'.$filename.'.'.pathinfo($_FILES['alur_sistem']['name'], PATHINFO_EXTENSION);
	}
	if(!empty($_FILES['dokumen']['tmp_name'])){

		move_uploaded_file(
			$_FILES['dokumen']['tmp_name'],
			'./component/upload/file/uploads/'.'dokumen_'.$filename.'.'.pathinfo($_FILES['dokumen']['name'], PATHINFO_EXTENSION)
			);
		$data['pid_dokumen'] =  'dokumen_'.$filename.'.'.pathinfo($_FILES['dokumen']['name'], PATHINFO_EXTENSION);
	}
	if(!empty($_FILES['mockup']['tmp_name'])){

		move_uploaded_file(
			$_FILES['mockup']['tmp_name'],
			'./component/upload/file/uploads/'.'mockup_'.$filename.'.'.pathinfo($_FILES['mockup']['name'], PATHINFO_EXTENSION)
			);
		$data['pid_mockup'] =  'mockup_'.$filename.'.'.pathinfo($_FILES['mockup']['name'], PATHINFO_EXTENSION);
	}
	if(!empty($_FILES['blue_print']['tmp_name'])){

		move_uploaded_file(
			$_FILES['blue_print']['tmp_name'],
			'./component/upload/file/uploads/'.'blue_print_'.$filename.'.'.pathinfo($_FILES['blue_print']['name'], PATHINFO_EXTENSION)
			);
		$data['pid_blueprint'] =  'blue_print_'.$filename.'.'.pathinfo($_FILES['blue_print']['name'], PATHINFO_EXTENSION);
	}


	$insert = $this->db->insert("project", $data); 
	echo '<div class="alert alert-success" style="position:fixed;z-index:9999999999;top:50px;  ">Sudah tersimpan.</div>';       
	header('location:'.base_url().'admin/project');
}	

public function detail()
{		
	$data['konten']=$this->load->view ('project/detail' , NULL, TRUE);
	$this->load->view ('general/main',$data);

}	

public function detail_key()
{		
	$data['konten']=$this->load->view ('project/detail_key' , NULL, TRUE);
	$this->load->view ('general/main',$data);

}	


public function ubah()
{
	$data['konten']=$this->load->view ('project/ubah' , NULL, TRUE);
	$this->load->view ('general/main',$data);
}	


public function simpan_ubah()
{
	$kode = $this->input->post("id");
	$filename = substr(date("Y"),2,4).date("mdHis");

	if($_FILES['alur_sistem']['tmp_name']){

		move_uploaded_file(
			$_FILES['alur_sistem']['tmp_name'],
			'./component/upload/file/uploads/'.'alur_sistem_'.$filename.'.'.pathinfo($_FILES['alur_sistem']['name'], PATHINFO_EXTENSION)
			);
		$data['pid_alur_sistem'] =  'alur_sistem_'.$filename.'.'.pathinfo($_FILES['alur_sistem']['name'], PATHINFO_EXTENSION);
	}
	if($_FILES['dokumen']['tmp_name']){

		move_uploaded_file(
			$_FILES['dokumen']['tmp_name'],
			'./component/upload/file/uploads/'.'dokumen_'.$filename.'.'.pathinfo($_FILES['dokumen']['name'], PATHINFO_EXTENSION)
			);
		$data['pid_dokumen'] =  'dokumen_'.$filename.'.'.pathinfo($_FILES['dokumen']['name'], PATHINFO_EXTENSION);
	}
	if($_FILES['mockup']['tmp_name']){

		move_uploaded_file(
			$_FILES['mockup']['tmp_name'],
			'./component/upload/file/uploads/'.'mockup_'.$filename.'.'.pathinfo($_FILES['mockup']['name'], PATHINFO_EXTENSION)
			);
		$data['pid_mockup'] =  'mockup_'.$filename.'.'.pathinfo($_FILES['mockup']['name'], PATHINFO_EXTENSION);
	}
	if($_FILES['blue_print']['tmp_name']){

		move_uploaded_file(
			$_FILES['blue_print']['tmp_name'],
			'./component/upload/file/uploads/'.'blue_print_'.$filename.'.'.pathinfo($_FILES['blue_print']['name'], PATHINFO_EXTENSION)
			);
		$data['pid_blueprint'] =  'blue_print_'.$filename.'.'.pathinfo($_FILES['blue_print']['name'], PATHINFO_EXTENSION);
	}
	$data['project'] = $this->input->post("project");
	$data['pic'] = $this->input->post("pic");
	$data['alamat'] = $this->input->post("alamat");
	$data['telp'] = $this->input->post("telp");
	$data['keterangan'] = $this->input->post("keterangan");
	$data['kode_kategori'] = $this->input->post("kode_kategori");
	$kode_rak= $this->db->get_where('kategori_project', array('id' => $data['kode_kategori']));
	$hasil_rak = $kode_rak->row();
	$data['nama_kategori'] = $hasil_rak->nama;

	$ambil_data = $this->db->get_where('project',array('id'  =>  $kode));
	$hasil_ambil_data = $ambil_data->row();


	

	$data['status'] = $this->input->post("status");
	$data['status_project'] = $this->input->post("status_project");
	$this->db->update("project", $data, array('id' => $kode));
	echo '<div class="alert alert-success">Sudah dirubah.</div>';
	// header('location:'.base_url().'admin/project');

}		


public function hapus(){
//$kode = $this->input->post("id_po");

	$key = $_GET['id'];
	$this->db->delete('project', array('id' => $key) );


	$data['konten']=$this->load->view ('project/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);             
}

public function cari()
{

	$data['key'] = $this->input->post("key");
	$data['kode_status'] = $this->input->post("sts");
	$this->load->view ('project/cari/cari');
}


}

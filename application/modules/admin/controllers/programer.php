<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class programer extends MY_Controller {

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
	$data['konten']=$this->load->view ('programer/tambah' , NULL, TRUE);
	$this->load->view ('general/main',$data);
}	

public function tambah()
{
	$data['konten']=$this->load->view ('programer/tambah' , NULL, TRUE);
	$this->load->view ('general/main',$data);

}
public function simpan_tambah()
{
	$data['idproject'] = $this->input->post("idproject");
	$data['idproduksi'] = $this->input->post("idproduksi");

	$user = $this->session->userdata('astrosession');

	$id  = $user[0]->id;


	$get = $this->db->query("SELECT * FROM karyawan where id='$id'");
	$hasil = $get->row();

	$data['idkaryawan'] = $hasil->id;
//$file = $this->input->post("file_name_upload");
// $data['file'] = $file[0];
	$filename = substr(date("Y"),2,4).date("mdHis");
	move_uploaded_file(
		$_FILES['prog']['tmp_name'],
		'./component/upload/file/uploads/'.'prog_'.$filename.'.'.pathinfo($_FILES['prog']['name'], PATHINFO_EXTENSION)
		);

	$data['file'] =  'prog_'.$filename.'.'.pathinfo($_FILES['prog']['name'], PATHINFO_EXTENSION);


	$insert = $this->db->insert("analisa", $data); 
	echo '<div class="alert alert-success">Sudah dirubah.</div>';
	header('location:'.base_url().'admin/t_produksi');
}

public function detail()
{		
	$data['konten']=$this->load->view ('t_produksi/detail' , NULL, TRUE);
	$this->load->view ('general/main',$data);

}	


public function ubah()
{
	$data['konten']=$this->load->view ('t_produksi/ubah' , NULL, TRUE);
	$this->load->view ('general/main',$data);
}	


public function simpan_ubah()
{
	$kode = $this->input->post("id");
	$data['id'] = $this->input->post("id");
	$data['id_project'] = $this->input->post("id_project");
	$data['nama_project'] = $this->input->post("nama_project");

	$untukpic = $this->input->post("untukpic");

	$data['pic']  = implode("|", $untukpic);

	$data['fitur'] = $this->input->post("fitur");
	$data['in'] = $this->input->post("in");
	$data['out'] = $this->input->post("out");
	$data['start'] = $this->input->post("start");
	$data['end'] = $this->input->post("end");
	$data['keterangan'] = $this->input->post("keterangan");

	$ambil_data = $this->db->get_where('t_produksi',array('id'  =>  $kode));
	$hasil_ambil_data = $ambil_data->row();

	// $filename = substr(date("Y"),2,4).date("mdHis");

	// if(!empty($_FILES['prog']['tmp_name'])){
	// 	move_uploaded_file(
	// 		$_FILES['prog']['tmp_name'],
	// 		'./component/upload/file/uploads'.'prog_'.$filename.'.'.pathinfo($_FILES['prog']['name'], PATHINFO_EXTENSION)
	// 		);

	// 	$data['file'] =  'prog_'.$filename.'.'.pathinfo($_FILES['prog']['name'], PATHINFO_EXTENSION);
	// }
	$data['status'] = $this->input->post("status");
	$this->db->update("t_produksi", $data, array('id' => $kode));
	echo '<div class="alert alert-success">Sudah dirubah.</div>';
	header('location:'.base_url().'admin/t_produksi');

}		


public function hapus(){
//$kode = $this->input->post("id_po");

	$key = $_GET['id_t_produksi'];
	$this->db->delete('t_produksi', array('id' => $key) );


	$data['konten']=$this->load->view ('t_produksi/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);             
}

public function modul()
{
	$data['parameter'] = $this->input->post("key");

	$this->load->view ('programer/module');
}	

}

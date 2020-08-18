<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_produksi extends MY_Controller {

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
	$data['konten']=$this->load->view ('t_produksi/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);
}	


public function tambah()
{
	$data['konten']=$this->load->view ('t_produksi/tambah' , NULL, TRUE);
	$this->load->view ('general/main',$data);

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
public function surat_tugas()
{
	$data['konten']=$this->load->view ('t_produksi/surat_tugas' , NULL, TRUE);
	$this->load->view ('general/main',$data);
}
public function cetak_t_produksi()
{
	$this->load->view('t_produksi/print_list');
}
public function cetak_surat_tugas()
{
	$this->load->view('t_produksi/print');
}
public function update_opsi()
{
	$update = $this->input->post();

	$untukopsi = $update['untukopsi'];
	$isiopsi  = implode("|", $untukopsi);

	$opsi = explode("|",$isiopsi);
	$allopsi = count($opsi);

	for($i=0; $i<$allopsi;$i++){
		$pic = $update['pic'];
		$get_user = $this->db->get_where('karyawan',array('id'=>$pic));
		$hasil_user = $get_user->row();

		$data_update['nama_karyawan']=$hasil_user->nama;
		$data_update['id_karyawan']=$pic;

		$this->db->update('opsi_tproduksi',$data_update,array('id'=>$untukopsi[$i]));
	}
	echo "sukses";
}	

public function simpan_ubah()
{	
	$produksi = $this->input->post();
	$ini_update['kode_tproduksi'] = $produksi['kode_tproduksi'];
	$untuk_project = $produksi['untukproject'];
	$kode = $produksi['id_pro'];



	$ambil_project = $this->db->query(" SELECT * FROM project where id = '$untuk_project' ");
	$hasil_ambil_project = $ambil_project->row();

	$ini_update['id_project'] = $hasil_ambil_project->id;
	$ini_update['nama_project'] = $hasil_ambil_project->project;
	$ini_update['analisa'] = $produksi['analisa'];
	$ini_update['tahapan'] = $produksi['tahapan'];
	$ini_update['keterangan'] = $produksi['keterangan'];
	$untukpic = $produksi['untukpic'];
	$ini_update['pic']  = implode("|", $untukpic);
	$this->db->update('t_produksi', $ini_update, array('id' => $kode));

}


public function hapus(){
//$kode = $this->input->post("id_po");

	$key = $_GET['id_t_produksi'];
	$kode = $this->uri->segment(4);
	$this->db->delete('t_produksi', array('id' => $key));
	$this->db->delete('opsi_tproduksi', array('kode_tproduksi' => $kode) );

	$data['konten']=$this->load->view ('t_produksi/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);             
}

public function cari()
{
	$data['parameter'] = $this->input->post("key");	
	$data['filter'] = $this->input->post("filter");
	$data['kode_status'] = $this->input->post("kode_status");
	$data['tgl_awal'] = $this->input->post("tgl_awal");		
	$data['tgl_akhir'] = $this->input->post("tgl_akhir");		
	$this->load->view ('t_produksi/cari/cari');
}	

public function simpan_item_temp()
{

	$masukan = $this->input->post();
	$isi['kode_tproduksi']=$masukan['kode_tproduksi'];
	$isi['modul']=$masukan['modul'];
	$isi['submodul']=$masukan['submodul'];
	$isi['fitur']=$masukan['fitur'];
	$isi['status']=$masukan['status'];
	$isi['start']=$masukan['start'];
	$isi['end']=$masukan['end'];
	$isi['keterangan']=$masukan['keterangan'];

	$this->db->insert('opsi_tproduksi_temp',$masukan);

	echo "sukses";				 				
}
public function simpan_item_opsi()
{

	$masukan = $this->input->post();
	$isi['kode_tproduksi']=$masukan['kode_tproduksi'];
	$isi['modul']=$masukan['modul'];
	$isi['submodul']=$masukan['submodul'];
	$isi['fitur']=$masukan['fitur'];
	$isi['status']=$masukan['status2'];
	$isi['start']=$masukan['start2'];
	$isi['end']=$masukan['end2'];
	$isi['keterangan']=$masukan['keterangan2'];

	$this->db->insert('opsi_tproduksi',$masukan);

	echo "sukses";				 				
}

public function get_tproduksi($kode){

	$data['kode'] =$kode;

	$this->load->view('t_produksi/tabel_tproduksi_temp',$data);
}
public function get_tproduksi_opsi($paramopsi){

	$data['paramopsi'] = @$paramopsi;
	$this->load->view('t_produksi/tbl_opsi',$data);
}

public function update_item_temp(){

	$id = $this->input->post('id');
	$update = $this->input->post();
	$data_update['modul']=$update['modul'];
	$data_update['submodul']=$update['submodul'];
	$data_update['fitur']=$update['fitur'];
	$data_update['status']=$update['status'];
	$data_update['start']=$update['start'];
	$data_update['end']=$update['end'];
	$data_update['keterangan']=$update['keterangan'];

	$this->db->update('opsi_tproduksi_temp',$data_update,array('id'=>$id));

// echo $this->db->last_query();

	echo "sukses";
}
public function update_item_opsi(){

	$id = $this->input->post('id');
	$update = $this->input->post();
	$data_update['modul']=$update['modul'];
	$data_update['submodul']=$update['submodul'];
	$data_update['status']=$update['status'];
	$data_update['fitur']=$update['fitur'];
	$data_update['start']=$update['start'];
	$data_update['end']=$update['end'];
	$data_update['keterangan']=$update['keterangan'];

	$this->db->update('opsi_tproduksi',$data_update,array('id'=>$id));

// echo $this->db->last_query();

	echo "sukses";
}
public function get_temp_tproduksi(){
	$id = $this->input->post('id');
	$temp = $this->db->get_where('opsi_tproduksi_temp',array('id'=>$id));
	$hasil_temp = $temp->row();
	echo json_encode($hasil_temp);
}
public function get_opsi_tproduksi(){
	$id = $this->input->post('id');
	$temp = $this->db->get_where('opsi_tproduksi',array('id'=>$id));
	$hasil_temp = $temp->row();
	echo json_encode($hasil_temp);
}

public function hapus_temp(){
	$id = $this->input->post('id');
	$this->db->delete('opsi_tproduksi_temp',array('id'=>$id));
}

public function hapus_temp_opsi(){
	$id = $this->input->post('id');
	$this->db->delete('opsi_tproduksi',array('id'=>$id));
}

public function simpan_all(){


	$produksi = $this->input->post();
	$get_temp = $this->db->get_where('opsi_tproduksi_temp',array('kode_tproduksi'=>$produksi['kode_tproduksi']));
	$hasil_get_temp=$get_temp->result_array();

	foreach ($hasil_get_temp as $item ) {

		$data_opsi['kode_tproduksi']=$item['kode_tproduksi'];
		$data_opsi['modul']=$item['modul'];
		$data_opsi['submodul']=$item['submodul'];
		$data_opsi['fitur']=$item['fitur'];
		$data_opsi['start']=$item['start'];
		$data_opsi['status']=$item['status'];
		$data_opsi['end']=$item['end'];
		$data_opsi['keterangan']=$item['keterangan'];
		$insert_opsi = $this->db->insert("opsi_tproduksi", $data_opsi);
	}

	$isi['kode_tproduksi'] = $produksi['kode_tproduksi'];
	$untuk_project = $this->input->post("untukproject");



	$ambil_project = $this->db->query(" SELECT * FROM project where id = '$untuk_project' ");
	$hasil_ambil_project = $ambil_project->row();

	$isi['id_project'] = $hasil_ambil_project->id;
	$isi['nama_project'] = $hasil_ambil_project->project;
	$isi['in'] = $hasil_ambil_project->project_in;

	$isi['keterangan'] = $produksi['keterangan'];
	$isi['analisa'] = 'belum';
	$isi['tahapan'] = 'belum';
	$isi['status'] = 'pending';
// $file = $this->input->post("file_name_upload");
// $isi['file'] = $file[0];

	$untukpic = $produksi['untukpic'];
	$isi['pic']  = implode("|", $untukpic);



	$insert_all = $this->db->insert("t_produksi", $isi);
	$this->db->delete('opsi_tproduksi_temp',array('kode_tproduksi' => $produksi['kode_tproduksi']));
}	

}

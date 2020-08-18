<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends MY_Controller {

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
	parent::__construct();
	if ($this->session->userdata('astrosession') == FALSE) {
		redirect(base_url('authenticate'));			
	}
}

public function index()
{
	$data['konten']=$this->load->view ('karyawan/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);
}	


public function tambah()
{
	$data['konten']=$this->load->view ('karyawan/tambah' , NULL, TRUE);
	$this->load->view ('general/main',$data);

}

public function simpan_tambah()
{
	$data['id'] = $this->input->post("id");
	$data['nama'] = $this->input->post("nama");
	$data['jekel'] = $this->input->post("jekel");
	$data['alamat'] = $this->input->post("alamat");
	$data['telp'] = $this->input->post("telp");
	$data['jabatan'] = $this->input->post("jabatan");
	$jabatan = $this->input->post("jabatan");
	echo $jabatan;
	if ($jabatan == 'admin'){

		$data['akses'] = 'karyawan|project|t_produksi|crm|rev_klien|testing';

	}if ($jabatan == 'spv'){

		$data['akses'] = 'admin|karyawan|project|h_project|t_produksi|crm|rev_klien|testing';
	}
	if ($jabatan == 'programer'){

		$data['akses'] = 't_produksi|rev_klien|testing';
	}
	if ($jabatan == 'leader'){

		$data['akses'] = 'admin|karyawan|project|h_project|t_produksi|crm|rev_klien|testing';
	}

	$data['uname'] = $this->input->post("uname");
	$data['upass'] = paramEncrypt($this->input->post("upass"));
	$data['ttl'] = $this->input->post("ttl");
	$data['status'] = 'aktif';
	$data['tanggal_masuk'] = $this->input->post("tanggal_masuk");
	$data['tanggal_selesai_kontrak'] = $this->input->post("tanggal_selesai_kontrak");
	$insert = $this->db->insert("karyawan", $data); 
	echo '<div class="alert alert-success" style="position:fixed;z-index:9999999999;top:50px;  ">Sudah tersimpan.</div>';       
	header('location:'.base_url().'admin/karyawan');
}	

public function detail()
{		
	$data['konten']=$this->load->view ('karyawan/detail' , NULL, TRUE);
	$this->load->view ('general/main',$data);

}	


public function ubah()
{
	$data['konten']=$this->load->view ('karyawan/ubah' , NULL, TRUE);
	$this->load->view ('general/main',$data);
}	


public function simpan_ubah()
{
	$kode = $this->input->post("id");
	$data['nama'] = $this->input->post("nama");
	$data['jekel'] = $this->input->post("jekel");
	$data['alamat'] = $this->input->post("alamat");
	$data['telp'] = $this->input->post("telp");
	$data['jabatan'] = $this->input->post("jabatan");
	$data['ttl'] = $this->input->post("ttl");
	$data['uname'] = $this->input->post("uname");
	$data['upass'] = paramEncrypt($this->input->post("upass"));
	$data['status'] = $this->input->post("status");
	$data['tanggal_masuk'] = $this->input->post("tanggal_masuk");
	$data['tanggal_selesai_kontrak'] = $this->input->post("tanggal_selesai_kontrak");
	$this->db->update("karyawan", $data, array('id' => $kode));
	echo '<div class="alert alert-success">Sudah dirubah.</div>';
	header('location:'.base_url().'admin/karyawan');

}		


public function hapus(){
//$kode = $this->input->post("id_po");

	$key = $_GET['id'];
	$this->db->delete('karyawan', array('id' => $key) );


	$data['konten']=$this->load->view ('karyawan/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);             
}

public function cari()
{
	$data['parameter'] = $this->input->post("key");
	$this->load->view ('karyawan/cari/cari');
}

		}



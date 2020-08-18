<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crm extends MY_Controller {

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
		$data['konten']=$this->load->view ('crm/daftar' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function tambah()
	{
		$data['konten']=$this->load->view ('crm/tambah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}

	public function simpan_tambah()
	{
		$untuk_project = $this->input->post("untukproject");
		$ambil_project = $this->db->query(" SELECT * FROM project where id = '$untuk_project' ");
		$hasil_ambil_project = $ambil_project->row();
        $data['id_project'] = $hasil_ambil_project->id;
        $data['nama_project'] = $hasil_ambil_project->project;
        $data['waktu'] = date("h:i:sa");
		$data['id'] = $this->input->post("id");
        $data['tgl'] = $this->input->post("tgl");
        $data['hari'] = $this->input->post("hari");
        $data['keterangan'] = $this->input->post("keterangan");
        $data['hasil'] = $this->input->post("hasil");
        $data['status'] = 'pending';
        $insert = $this->db->insert("crm", $data); 
        echo '<div class="alert alert-success" style="position:fixed;z-index:9999999999;top:50px;  ">Sudah tersimpan.</div>';       
		header('location:'.base_url().'admin/crm');
	}	

	public function detail()
	{		
		$data['konten']=$this->load->view ('crm/detail' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}	


	public function ubah()
	{
		$data['konten']=$this->load->view ('crm/ubah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function simpan_ubah()
	{
		$kode= $this->input->post("id");
        $data['id_project'] = $this->input->post("id_project");
        $data['nama_project'] = $this->input->post("nama_project");
        $data['tgl'] = $this->input->post("tgl");
        $data['hari'] = $this->input->post("hari");
        $data['keterangan'] = $this->input->post("keterangan");
        $data['hasil'] = $this->input->post("hasil");
        $data['status'] = $this->input->post("status");

       $filename = substr(date("Y"),2,4).date("mdHis");
	move_uploaded_file(
		$_FILES['crmfile']['tmp_name'],
		'./component/upload/file/uploads/'.'crmfile_'.$filename.'.'.pathinfo($_FILES['crmfile']['name'], PATHINFO_EXTENSION)
		);

	$data['file'] =  'crmfile_'.$filename.'.'.pathinfo($_FILES['crmfile']['name'], PATHINFO_EXTENSION);
        
       	$this->db->update("crm", $data, array('id' => $kode));
        echo '<div class="alert alert-success">Sudah dirubah.</div>';
        header('location:'.base_url().'admin/crm');
      	 
	}		


	public function hapus(){
    //$kode = $this->input->post("id_po");

    $key = $_GET['id'];
    $this->db->delete('crm', array('id' => $key) );
    
	
	$data['konten']=$this->load->view ('crm/daftar' , NULL, TRUE);
	$this->load->view ('general/main',$data);             
	}

	public function cari()
	{
		// $data['parameter'] = $this->input->post("key");
		// $this->load->view ('crm/cari/cari');

		$data['parameter'] = $this->input->post("key");	
		$data['filter'] = $this->input->post("filter");
		$data['kode_status'] = $this->input->post("kode_status");
		$data['tgl_awal'] = $this->input->post("tgl_awal");		
		$data['tgl_akhir'] = $this->input->post("tgl_akhir");		
		$this->load->view ('crm/cari/cari');
	}
	public function notif()
	{
		$this->load->view ('general/notif');
	}
	
}

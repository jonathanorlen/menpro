<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_project extends MY_Controller {

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
		$data['konten']=$this->load->view ('h_project/daftar' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function tambah()
	{
		$data['konten']=$this->load->view ('h_project/tambah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}

	public function detail()
	{		
		$data['konten']=$this->load->view ('h_project/detail' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}	


	public function ubah()
	{
		$data['konten']=$this->load->view ('h_project/ubah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function simpan_ubah()
	{
		$produksi = $this->input->post();
		$ini_update['kode_histori'] = $produksi['kode_histori'];
		$untuk_project = $produksi['namaproject'];
		$kode = $produksi['id'];



		$ambil_project = $this->db->query(" SELECT * FROM project where id = '$untuk_project' ");
		$hasil_ambil_project = $ambil_project->row();

		$ini_update['id_project'] = $hasil_ambil_project->id;
		$ini_update['nama_project'] = $hasil_ambil_project->project;
		$ini_update['tgl'] = $produksi['tgl'];
		$ini_update['versi'] = $produksi['versi'];
		$ini_update['update'] = $produksi['update'];
		$ini_update['keterangan'] = $produksi['keterangan'];
		$this->db->update('h_project', $ini_update, array('id' => $kode));

	}		


	public function hapus(){
    //$kode = $this->input->post("id_po");

		$key = $_GET['id'];
		$this->db->delete('h_project', array('id' => $key) );
		$this->db->delete('opsi_hproject', array('id' => $key) );

		$data['konten']=$this->load->view ('h_project/daftar' , NULL, TRUE);
		$this->load->view ('general/main',$data);             
	}

	public function cari_project()
	{
		$data['parameter'] = $this->input->post("key");	
		$data['filter'] = $this->input->post("filter");
		$data['tgl_awal'] = $this->input->post("tgl_awal");		
		$data['tgl_akhir'] = $this->input->post("tgl_akhir");		
		$this->load->view ('h_project/cari/cari');
	}	

	//<--------------------------------------------Data Temp---------------------------------------------------------->

	public function simpan_item_temp()
	{

		$masukan = $this->input->post();
		$isi['kode_histori']=$masukan['kode_histori'];
		$isi['modul']=$masukan['modul'];
		$isi['file']=$masukan['file'];
		$isi['keterangan']=$masukan['keterangan'];
		$isi['tglopsi']=$masukan['tglopsi'];

		$this->db->insert('opsi_hproject_temp',$masukan);
		
		echo "sukses";				 				
	}
	public function simpan_item_opsi()
	{

		$masukan = $this->input->post();
		$isi['kode_tproduksi']=$masukan['kode_tproduksi'];
		$isi['modul']=$masukan['modul'];
		$isi['file']=$masukan['file'];
		$isi['tglopsi']=$masukan['tglopsi'];
		$isi['keterangan']=$masukan['keterangan2'];

		$this->db->insert('opsi_hproject',$masukan);
		
		echo "sukses";				 				
	}

	public function get_hproject($kode){

		$data['kode'] =$kode;
		$this->load->view('h_project/tabel_hproject_temp',$data);
	}
	public function get_hproject_opsi($paramopsi){

		$data['paramopsi'] = @$paramopsi;
		$this->load->view('h_project/tabel_update',$data);
	}

	public function update_item_temp(){
		
		$id = $this->input->post('id');
		$update = $this->input->post();
		$data_update['modul']=$update['modul'];
		$data_update['file']=$update['file'];
		$data_update['tglopsi']=$update['tglopsi'];
		$data_update['keterangan']=$update['keterangan'];
		
		$this->db->update('opsi_hproject_temp',$data_update,array('id'=>$id));
		
		// echo $this->db->last_query();

		echo "sukses";
	}
	public function update_item_opsi(){
		
		$id = $this->input->post('id');
		$update = $this->input->post();
		$data_update['modul']=$update['modul'];
		$data_update['file']=$update['file'];
		$data_update['tglopsi']=$update['tglopsi'];
		$data_update['keterangan']=$update['keterangan'];
		
		$this->db->update('opsi_hproject',$data_update,array('id'=>$id));
		
		// echo $this->db->last_query();

		echo "sukses";
	}
	public function get_temp_hproject(){
		$id = $this->input->post('id');
		$temp = $this->db->get_where('opsi_hproject_temp',array('id'=>$id));
		$hasil_temp = $temp->row();
		echo json_encode($hasil_temp);
	}
	public function get_opsi_hproject(){
		$id = $this->input->post('id');
		$temp = $this->db->get_where('opsi_hproject',array('id'=>$id));
		$hasil_temp = $temp->row();
		echo json_encode($hasil_temp);
	}

	public function hapus_temp(){
		$id = $this->input->post('id');
		$this->db->delete('opsi_hproject_temp',array('id'=>$id));
	}

	public function hapus_temp_opsi(){
		$id = $this->input->post('id');
		$this->db->delete('opsi_hproject',array('id'=>$id));
	}

	public function simpan_all(){

		
		$produksi = $this->input->post();
		$get_temp = $this->db->get_where('opsi_hproject_temp',array('kode_histori'=>$produksi['kode_histori']));
		$hasil_get_temp=$get_temp->result_array();

		foreach ($hasil_get_temp as $item ) {

			$data_opsi['kode_histori']=$item['kode_histori'];
			$data_opsi['modul']=$item['modul'];
			$data_opsi['file']=$item['file'];
			$data_opsi['tglopsi']=$item['tglopsi'];
			$data_opsi['keterangan']=$item['keterangan'];
			$insert_opsi = $this->db->insert("opsi_hproject", $data_opsi);
		}

		$isi['kode_histori'] = $produksi['kode_histori'];
		$project = $this->input->post("namaproject");



		$ambil_project = $this->db->query(" SELECT * FROM project where id = '$project' ");
		$hasil_ambil_project = $ambil_project->row();

		$isi['id_project'] = $hasil_ambil_project->id;
		$isi['nama_project'] = $hasil_ambil_project->project;
		$isi['tgl'] = $produksi['tgl'];
		$isi['versi'] = $produksi['versi'];
		$isi['update'] = $produksi['update'];
		$isi['keterangan'] = $produksi['keterangan'];
		$insert_all = $this->db->insert("h_project", $isi);
		$this->db->delete('opsi_hproject_temp',array('kode_histori' => $produksi['kode_histori']));
	}	

}

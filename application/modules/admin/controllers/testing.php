<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends MY_Controller {

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
		$data['konten']=$this->load->view ('testing/daftar' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function tambah()
	{
		$data['konten']=$this->load->view ('testing/tambah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}
	public function detail()
	{
		
		$data['konten'] = $this->load->view('testing/detail', NULL, TRUE);
		$this->load->view ('general/main', $data);		
	}

	public function simpan_item_temp()
	{
	//Insert Opsi Transaksi Stok Out Temp
		$masukan = $this->input->post();
		$data['kode_form_testing']=$masukan['kode_form_testing'];
		$data['modul']=$masukan['modul'];
		$data['fitur']=$masukan['fitur'];
		$data['sub_modul']=$masukan['submodul'];
		$data['keterangan']=$masukan['keterangan'];
		$data['pic']=$masukan['pic'];




		
		$this->db->insert('opsi_form_testing_temp',$data);
		
		echo "sukses";				 				
	}
	public function get_testing($kode){

		$data['kode'] =$kode;

		$this->load->view('testing/tabel_testing_temp',$data);
	}

	public function get_temp_testing(){
		$id = $this->input->post('id');
		$temp = $this->db->get_where('opsi_form_testing_temp',array('id'=>$id));
		$hasil_temp = $temp->row();
		echo json_encode($hasil_temp);
	}
	public function update_item_temp()
	{
	//Insert Opsi Transaksi Stok Out Temp
		
		$masukan = $this->input->post();
		
		$update['id'] = $masukan['id'];
		$update['kode_form_testing']=$masukan['kode_form_testing'];
		$update['modul']=$masukan['modul'];
		$update['fitur']=$masukan['fitur'];
		$update['sub_modul']=$masukan['submodul'];
		$update['keterangan']=$masukan['keterangan'];
		$update['pic']=$masukan['pic'];

		$this->db->update('opsi_form_testing_temp',$update,array('id'=>$masukan['id']));
		
		echo "sukses";				 				
	}
	public function simpan_simpan(){
		
		$masukan = $this->input->post();
		$get_temp = $this->db->get_where('opsi_form_testing_temp',array('kode_form_testing'=>$masukan['kode_form_testing']));
		$hasil_get_temp=$get_temp->result_array();

		foreach ($hasil_get_temp as $item ) {

			$data_opsi['kode_form_testing']=$item['kode_form_testing'];
			$data_opsi['modul']=$item['modul'];
			$data_opsi['fitur']=$item['fitur'];
			$data_opsi['sub_modul']=$item['sub_modul'];
			$data_opsi['keterangan']=$item['keterangan'];
			$data_opsi['pic']=$item['pic'];
			$insert_opsi = $this->db->insert("opsi_form_testing", $data_opsi);
		}

		$insert_ini['kode_form_testing'] = $masukan['kode_form_testing'];
		$insert_ini['id_proyek'] = $masukan['idproyek'];
		$getproject = $this->db->get('project',array('id' =>$masukan['idproyek']));
		$hasil_getproject = $getproject->row();
		$insert_ini['nama_proyek'] = $hasil_getproject->project;
		$insert_ini['tanggal'] = $masukan['tanggal'];
		$insert_ini['git'] = $masukan['git'];
		$insert_ini['username'] = $masukan['username'];
		$insert_ini['password'] = $masukan['userpass'];
		$insert_testing = $this->db->insert("form_testing", $insert_ini);
		$this->db->delete('opsi_form_testing_temp',array('kode_form_testing' => $masukan['kode_form_testing']));

	}


	public function hapus_test_temp(){
		$id = $this->input->post('id');
		$this->db->delete('opsi_form_testing_temp',array('id'=>$id));
	}

	public function cari()
	{
		$data['parameter'] = $this->input->post("key");
		$this->load->view ('testing/cari/cari');
	}

}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class review_klien extends MY_Controller {

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
		$data['konten']=$this->load->view ('review_klien/daftar' , NULL, TRUE);
		$this->load->view ('general/main',$data);
	}	


	public function tambah()
	{
		$data['konten']=$this->load->view ('review_klien/tambah' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
	}
	public function detail()
	{
		$data['konten']=$this->load->view ('review_klien/detail' , NULL, TRUE);
		$this->load->view ('general/main',$data);
		
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
		$this->load->view ('review_klien/cari/cari');
	}


	public function simpan_item_temp()
	{

		$masukan = $this->input->post();
		$isi['kode_form_review_klien']=$masukan['kode_form_review_klien'];
		$isi['uraian']=$masukan['uraian'];
		$isi['keterangan']=$masukan['keterangan'];

		$this->db->insert('opsi_form_review_klien_temp',$masukan);
		
		echo "sukses";				 				
	}

	public function update_item_temp(){
		
		$id = $this->input->post('id');
		$update = $this->input->post();
		$data_update['uraian']=$update['uraian'];
		$data_update['keterangan']=$update['keterangan'];
		
		$this->db->update('opsi_form_review_klien_temp',$update,array('id'=>$id));
		
		// echo $this->db->last_query();

		echo "sukses";
	}

	public function get_review_klien($kode){

		$data['kode'] =$kode;

		$this->load->view('admin/review_klien/tabel_review_temp',$data);
	}

	public function get_temp_review_klien(){
		$id = $this->input->post('id');
		$temp = $this->db->get_where('opsi_form_review_klien_temp',array('id'=>$id));
		$hasil_temp = $temp->row();
		echo json_encode($hasil_temp);
	}
	
	public function hapus_review_temp(){
		$id = $this->input->post('id');
		$this->db->delete('opsi_form_review_klien_temp',array('id'=>$id));
	}

	public function simpan_all(){

		
		$review = $this->input->post();
		$get_temp = $this->db->get_where('opsi_form_review_klien_temp',array('kode_form_review_klien'=>$review['kode_form_review_klien']));
		$hasil_get_temp=$get_temp->result_array();

		foreach ($hasil_get_temp as $item ) {

			$data_opsi['kode_form_review_klien']=$item['kode_form_review_klien'];
			$data_opsi['uraian']=$item['uraian'];
			$data_opsi['keterangan']=$item['keterangan'];
			$insert_opsi = $this->db->insert("opsi_form_review_klien", $data_opsi);
		}

		$insert['kode_form_review_klien'] = $review['kode_form_review_klien'];
		$insert['id_proyek'] = $review['id_proyek'];
		$getproject = $this->db->get('project',array('id' =>$review['id_proyek']));
		$hasil_getproject = $getproject->row();
		$insert['nama_proyek'] = $hasil_getproject->project;
		$insert['tanggal'] = $review['tanggal'];
		$insert['via'] = $review['via'];
		$insert_all = $this->db->insert("form_review_klien", $insert);
		$this->db->delete('opsi_form_review_klien_temp',array('kode_form_review_klien' => $review['kode_form_review_klien']));
	}	
}

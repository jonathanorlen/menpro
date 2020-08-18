<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticate extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->module = 'authenticate';
		$this->cname = 'authenticate';
		$this->load->model('Mdl_login');
	}

	public function index()
	{
		$data['cname'] = $this->module;
		$data['title'] = "Halaman Login";
		$this->load->view('/login', $data);
	}

	public function dashboard()
	{
		$data['cname'] = $this->module;
		$data['title'] = "Dashboard";
		$this->load->view('/dasboard', $data);
	}

	public function login()
	{
		$param = $this->input->post();
		$exist = $this->Mdl_login->login($param);
		// echo $this->db->last_query();exit;
		if (!empty($exist)) {
			$module = json_decode($exist[0]->module);
			$this->session->set_userdata('astrosession',$exist);
			$redirect = 'admin';
		}else{
			$redirect = $this->cname;
		}
		redirect($redirect);
	}	

	public function logout()
	{
		$this->session->unset_userdata('astrosession');
		redirect($this->cname);
	}

	public function decode($value='')
	{
		echo paramDecrypt($value);
	}
}

/* End of file signin.php */
/* Location: ./application/modules/authenticate/controllers/authenticate.php */
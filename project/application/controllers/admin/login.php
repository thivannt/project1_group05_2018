<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->has_userdata('admin'))
		{
			redirect('admin/Dashboard');
		}
		$this->load->model('Admin');
	}

	public function index()
	{	
	
		$this->load->view('admin/login');

	}
	public function verify()
	{
		$check=$this->Admin->validate();

		if($check)
		{
			$this->session->set_userdata('admin','1');
			redirect('admin/Dashboard');
		}
		else{

			redirect('admin/login');
		}
	}


}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('admin'))
		{
			redirect('admin/login','refresh');
		}
		
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
		
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
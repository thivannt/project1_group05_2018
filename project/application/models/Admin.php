<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function validate()
	{
		$arr['email']=$this->input->post('email');
		$arr['password']=md5($this->input->post('password'));

		return $this->db->get_where('login',$arr)->row();

	}

}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */
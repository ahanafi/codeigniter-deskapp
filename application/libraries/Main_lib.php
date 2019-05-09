<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_lib
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function getAdminTemplates($view, $data = [])
	{
		$this->ci->load->view('templates/header', $data);
		$this->ci->load->view('templates/sidebar');
		$this->ci->load->view($view);
		$this->ci->load->view('templates/footer');
	}

}

/* End of file Main_lib.php */
/* Location: ./application/libraries/Main_lib.php */

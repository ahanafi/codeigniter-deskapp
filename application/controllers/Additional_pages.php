<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additional_pages extends CI_Controller {

	public function video_player()
	{
		$this->main_lib->getAdminTemplates("additional-pages/video-player");
	}

	public function login()
	{
		$this->load->view("additional-pages/login");
	}

	public function forgot_password()
	{
		$this->load->view("additional-pages/forgot-password");
	}

	public function reset_password()
	{
		$this->load->view("additional-pages/reset-password");
	}

	public function _403()
	{
		$this->load->view("additional-pages/403");
	}

	public function _404()
	{
		$this->load->view("additional-pages/404");
	}

	public function _500()
	{
		$this->load->view("additional-pages/500");
	}


}

/* End of file Additional_pages.php */
/* Location: ./application/controllers/Additional_pages.php */
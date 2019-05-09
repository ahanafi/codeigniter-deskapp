<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Other_pages extends CI_Controller {

	public function sitemap()
	{
		$this->main_lib->getAdminTemplates('others/sitemap');
	}

	public function chat()
	{
		$this->main_lib->getAdminTemplates('others/chat');
	}

	public function invoice()
	{
		$this->main_lib->getAdminTemplates('others/invoice');
	}

	public function calendar()
	{
		$this->main_lib->getAdminTemplates('others/calendar');
	}

}

/* End of file Other_pages.php */
/* Location: ./application/controllers/Other_pages.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icons extends CI_Controller {

	public function font_awesome()
	{
		$this->main_lib->getAdminTemplates("icons/font-awesome");
	}

	public function foundation()
	{
		$this->main_lib->getAdminTemplates("icons/foundation");
	}

	public function ionicons()
	{
		$this->main_lib->getAdminTemplates("icons/ionicons");
	}

	public function themify()
	{
		$this->main_lib->getAdminTemplates("icons/themify");
	}


}

/* End of file Icons.php */
/* Location: ./application/controllers/Icons.php */
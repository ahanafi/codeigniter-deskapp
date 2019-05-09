<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->main_lib->getAdminTemplates('home/index');
	}

	public function second_index()
	{
		$this->main_lib->getAdminTemplates('home/index2');
	}
}

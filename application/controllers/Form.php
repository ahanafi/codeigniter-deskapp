<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function form_basic()
	{
		$this->main_lib->getAdminTemplates("form/form-basic");
	}

	public function advanced_components()
	{
		$this->main_lib->getAdminTemplates("form/advanced-components");
	}

	public function form_wizard()
	{
		$this->main_lib->getAdminTemplates("form/form-wizard");
	}

	public function html5_editor()
	{
		$this->main_lib->getAdminTemplates("form/html5-editor");
	}

	public function form_pickers()
	{
		$this->main_lib->getAdminTemplates("form/form-pickers");
	}

	public function image_cropper()
	{
		$this->main_lib->getAdminTemplates("form/image-cropper");
	}

	public function image_dropzone()
	{
		$this->main_lib->getAdminTemplates("form/image-dropzone");
	}

}

/* End of file Form.php */
/* Location: ./application/controllers/Form.php */
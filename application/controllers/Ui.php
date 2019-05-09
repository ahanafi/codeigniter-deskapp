<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ui extends CI_Controller {

	public function buttons()
	{
		$this->main_lib->getAdminTemplates("ui/ui-buttons");
	}
	
	public function cards()
	{
		$this->main_lib->getAdminTemplates("ui/ui-cards");
	}
	
	public function cards_hover()
	{
		$this->main_lib->getAdminTemplates("ui/ui-cards-hover");
	}
	
	public function modals()
	{
		$this->main_lib->getAdminTemplates("ui/ui-modals");
	}
	
	public function tabs()
	{
		$this->main_lib->getAdminTemplates("ui/ui-tabs");
	}
	
	public function tooltip_popover()
	{
		$this->main_lib->getAdminTemplates("ui/ui-tooltip-popover");
	}
	
	public function sweet_alert()
	{
		$this->main_lib->getAdminTemplates("ui/ui-sweet-alert");
	}
	
	public function notification()
	{
		$this->main_lib->getAdminTemplates("ui/ui-notification");
	}
	
	public function timeline()
	{
		$this->main_lib->getAdminTemplates("ui/ui-timeline");
	}
	
	public function progressbar()
	{
		$this->main_lib->getAdminTemplates("ui/ui-progressbar");
	}
	
	public function typography()
	{
		$this->main_lib->getAdminTemplates("ui/ui-typography");
	}
	
	public function list_group()
	{
		$this->main_lib->getAdminTemplates("ui/ui-list-group");
	}
	
	public function range_slider()
	{
		$this->main_lib->getAdminTemplates("ui/ui-range-slider");
	}
	
	public function carousel()
	{
		$this->main_lib->getAdminTemplates("ui/ui-carousel");
	}
	

}

/* End of file User_interface.php */
/* Location: ./application/controllers/User_interface.php */
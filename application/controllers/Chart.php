<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function highchart()
	{
		$this->main_lib->getAdminTemplates("charts/highchart");
	}
	
	public function knob_chart()
	{
		$this->main_lib->getAdminTemplates("charts/knob-chart");
	}
	
	public function jvectormap()
	{
		$this->main_lib->getAdminTemplates("charts/jvectormap");
	}
	

}

/* End of file Chart.php */
/* Location: ./application/controllers/Chart.php */
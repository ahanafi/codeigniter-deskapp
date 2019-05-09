<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function basic_table()
	{
		$this->main_lib->getAdminTemplates("tables/basic-table");
	}

	public function datatable()
	{
		$this->main_lib->getAdminTemplates("tables/datatable");
	}

}

/* End of file Table.php */
/* Location: ./application/controllers/Table.php */
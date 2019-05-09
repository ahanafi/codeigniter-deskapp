<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extra_pages extends CI_Controller {

	public function blank()
	{
		$this->main_lib->getAdminTemplates("extra-pages/blank");
	}

	public function contact_directory()
	{
		$this->main_lib->getAdminTemplates("extra-pages/contact-directory");
	}

	public function blog()
	{
		$this->load->view("extra-pages/blog");
	}

	public function blog_detail()
	{
		$this->load->view("extra-pages/blog-detail");
	}

	public function product()
	{
		$this->load->view("extra-pages/product");
	}

	public function product_detail()
	{
		$this->load->view("extra-pages/product-detail");
	}

	public function faq()
	{
		$this->load->view("extra-pages/faq");
	}

	public function profile()
	{
		$this->main_lib->getAdminTemplates("extra-pages/profile");
	}

	public function gallery()
	{
		$this->main_lib->getAdminTemplates("extra-pages/gallery");
	}

	public function pricing_table()
	{
		$this->main_lib->getAdminTemplates("extra-pages/pricing-table");
	}


}

/* End of file Extra_pages.php */
/* Location: ./application/controllers/Extra_pages.php */
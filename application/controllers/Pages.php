<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['content'] = "pages/prime";
		$data['title'] = "Grid One";
		$data['header'] = "Grid Page 1";
		$this->load->view("template/template", $data);
	}

	public function blog()
	{
		$data['content'] = "pages/blog";
		$data['title'] = "Grid Two";
		$data['header'] = "Grid Page 2";
		$this->load->view("template/template", $data);
	}

	public function three()
	{
		$data['content'] = "pages/page3";
		$data['title'] = "Grid Three";
		$data['header'] = "Grid Page 3";
		$this->load->view("template/template", $data);
	}

}


/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */

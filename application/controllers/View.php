<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function index()
	{
		$id = $this->uri->segment(3);
		$this->db->select("id, slug, title, date, content, last_date");
		$this->db->where('id', $id);
  	$query = $this->db->get('posts');
  	if($query->result()) {
  		$data["full"] = $query->result();
  	}
  	//$data["heading"] = "title";
  	$data["main_content"] = "template/full";
  	$this->load->view("template/template", $data);

	}

}

/* End of file View.php */
/* Location: ./application/controllers/View.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data["title"]        = "Index Page";
		$data["heading"]      = "Our Family";
		$data['main_content'] = "pages/prime";
		$this->db->where("parent", "main");
		$this->db->select("id, title, date, last_date, slug");
    $this->db->order_by("date", "asc");
    $query = $this->db->get("posts");
    if($query->result()) {
      $data['slug'] = $query->result();
    }

		$this->load->view("template/template", $data);
	}

	public function van()
	{
		$data['title']   = "The VanHorn's";
		$data['heading'] = "The VanHorn's";
		$data['menu'] = "VanHorn Pages";
		$data['main_content'] = "pages/van";
		$this->db->where("parent", "VanHorn");
		$this->db->select("id, title, date, last_date, slug");
    $this->db->order_by("date", "asc");
    $query = $this->db->get("posts");
    if($query->result()) {
      $data['van'] = $query->result();
    }

		$this->load->view("template/template", $data);
	}
	//todo list
	public function todo()
	{
		$data['title']   = "ToDo List";
		$data['heading'] = "ToDo List";
		$data['menu'] = "Todo List";
		$data['main_content'] = "pages/todolist";

		$this->load->view("template/template", $data);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */

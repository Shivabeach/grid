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
    $clug = "2016-12-1";
    $this->db->where("last_date >", $clug);
    $this->db->select_max('last_date');
    $this->db->select("id, title");
    $this->db->group_by('last_date', 'desc');
    $this->db->limit(3);
    $query = $this->db->get('posts');
    if($query->result()) {
      $data['pug'] = $query->result();
    }
    // recent post updates
    $plug = "2017-12-1";
    $this->db->where("date >", $plug);
    $this->db->select_max("date");
    $this->db->select("id, title");
    $this->db->group_by("date", "desc");
    $this->db->limit(3);
    $query = $this->db->get('posts');
    if($query->result()) {
      $data['mug'] = $query->result();
    }
    // Newest posts

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
    $this->db->order_by("id", "desc");
    $query = $this->db->get("posts");
    if($query->result()) {
      $data['van'] = $query->result();
    }

		$this->load->view("template/template", $data);
	}

	public function bos()
	{
		$data['title']   = "The Bosticks's";
		$data['heading'] = "The Bosticks's";
		$data['menu'] = "Bostick Pages";
		$data['main_content'] = "pages/bos";
		$this->db->where("parent", "Bostick");
		$this->db->select("id, title, date, last_date, slug");
    $this->db->order_by("id", "desc");
    $query = $this->db->get("posts");
    if($query->result()) {
      $data['bos'] = $query->result();
    }

		$this->load->view("template/template", $data);
	}

	public function data_list()
	{
		$data['title'] = "Data List";
		$data['heading'] = "Data List";
		$data["main_content"] = "pages/datafile";
		$this->load->view("template/template", $data);
	}

	public function poster()
	{
		$data['title'] = "Create";
		$data['heading'] = "Create Posts";
		$data['main_content'] = "admin/create";
		$this->load->view("template/template", $data);
	}



}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */

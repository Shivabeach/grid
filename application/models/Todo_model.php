<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->return_as = "object";
	}

	public function get_all()
	{
		$this->db->order_by('id', 'asc');
		$query = $this->db->get("todos");
		return $query->result();
	}

	public function insert()
	{
		$this->db->insert("todos");
	}


}

/* End of file Todo_model.php */
/* Location: ./application/models/Todo_model.php */

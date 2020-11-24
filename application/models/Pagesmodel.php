<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagesmodel extends CI_Model {

	var $posting = "posts";

	public function get_recent($value)
	{
		$this->db->select('id, title, date, content, last_date, slug, parent,status');
		$this->db->where('title', $value);
		$query = $this->db->get($this->posting);
		return $query->result();
	}







}

/* End of file Pagesmodel.php */
/* Location: ./application/models/Pagesmodel.php */

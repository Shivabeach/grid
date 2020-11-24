<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dna_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function ydna()
	{
		$this->db->select('id, top, content, family');
		$this->db->where('family', 'vanhorn');
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('dna');
		return $query->result();
	}


}

/* End of file Dna_model.php */
/* Location: ./application/models/Dna_model.php */

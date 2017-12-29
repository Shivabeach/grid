<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/entry');
	}



public function process()
  {
    $data = array(
      'name'      => html_escape($this->input->post('name')),
      'pass'  => html_escape($this->input->post('pass')),
      'email'     => html_escape($this->input->post('email')),
      );

      $this->form_validation->set_rules('name', 'name', 'required');
      $this->form_validation->set_rules('pass', 'pass', 'required');

      $this->form_validation->set_rules('email', 'email', 'required|valid_email');

      if( $this->form_validation->run() == FALSE) {
  			echo validation_errors();
  		}else
  		{
        $options = [
           'cost' => 10
          ];
        $data1 = [
          'name'  => html_escape($this->input->post('name')),
          'pass'  => password_hash($this->input->post('pass'), PASSWORD_BCRYPT, $options),
          'email' => html_escape($this->input->post('email'))
        ];
  			$this->db->insert('check', $data1);
  			echo "grand shit";
  		}
    }
}
/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */

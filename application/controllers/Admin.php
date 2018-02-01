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

public function legal()
{
      $time = date("l jS \of F Y h:i:s A");
      $data = [
        'name'  => trim(html_escape($this->input->post('name'))),
        'email' => trim(html_escape($this->input->post('email'))),
        'pass'  => trim(html_escape($this->input->post('pass')))
      ];
      $this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[10]');
      $this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]|max_length[32]');
      $this->form_validation->set_rules('email', 'email', 'required');

      if( $this->form_validation->run() == FALSE) {
        //do this if you are not using ajax

        echo "errors";
  		}else{
  		  $name  = html_escape($this->input->post('name'));
        $email = html_escape($this->input->post('email'));
        $pass = html_escape($this->input->post('pass'));
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $limit  = 1;
      $offset = 0;
      $query = $this->db->get_where('check',
      array(
        'email'   => $email,
        'name'    => $name,
        'approve' => 'yes'
      ),$limit, $offset);

      if ($query->num_rows() != 1){
        //die("Sorry");
        echo "Dinna Happen";

      }else
      {
        $row    = $query->row();
        $stored = $row->pass;
        if (password_verify($pass, $stored))
        {
        $data = array(
					'name'         => $row->name,
					'is_logged_in' => TRUE
       );
       	$this->session->set_userdata($data);
       	$this->db->insert("incomming", $data);
       	redirect("pages/", 'location');
      }
    }
  }
}
public function is_logged_in()
{
  $is_logged_in = $this->session->userdata('is_logged_in');
  if (!isset($is_logged_in) || $is_logged_in != true)
  {
    redirect("Pages/entry");
  }
}

public function create()
{
	$data = [
		"title"     => $this->input->post('title'),
		"date"      => $this->input->post('date'),
		"content"   => $this->input->post('content'),
		"parent"    => $this->input->post('parent'),
		"status"    => $this->input->post('status'),
		"last_date" => $this->input->post('last_date'),
		"slug"      => $this->input->post('slug')
	];

	$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]|max_length[50]');

	$this->form_validation->set_rules('date',	'Date', 'trim|required|min_length[5]|max_length[12]');

	$this->form_validation->set_rules('content', 'Content', 'trim|required|min_length[5]');

	$this->form_validation->set_rules('parent', 'Parent', 'trim|required|min_length[3]|max_length[12]');

	$this->form_validation->set_rules('status', 'Status', 'trim|required|min_length[5]|max_length[12]');

	$this->form_validation->set_rules('last_date', 'Last Date', 'trim|min_length[5]|max_length[12]');

	$this->form_validation->set_rules('slug', 'Slug', 'trim|required|min_length[5]');

	If($this->form_validation->run() == FALSE) {
		echo validation_errors();
	} else {

	$this->db->insert("posts", $data);
	echo "success";
	}

}

public function fill_form()
{
  //$this->is_logged_in();
  $id = $this->uri->segment(3);
  $this->db->where('id', $id);
  $query = $this->db->get('posts');

  if ($query->result())
  {
      $data['records'] = $query->result();
  }
  $data["title"] = "Post update";
  $data['head']  = "Post update";
  $data['heading'] = "Update Post";
  $data['edit'] = $id;
  $data['main_content'] = "admin/update";
  $this->load->view("template/template", $data);
}

public function update()
{
	$data = [
		"title"     => $this->input->post('title'),
		"date"      => $this->input->post('date'),
		"content"   => $this->input->post('content'),
		"parent"    => $this->input->post('parent'),
		"status"    => $this->input->post('status'),
		"last_date" => $this->input->post('last_date'),
		"slug"      => $this->input->post('slug')
	];

	$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]|max_length[50]');

	$this->form_validation->set_rules('date',	'Date', 'trim|required|min_length[5]|max_length[12]');

	$this->form_validation->set_rules('content', 'Content', 'trim|required|min_length[5]');

	$this->form_validation->set_rules('parent', 'Parent', 'trim|required|min_length[3]|max_length[12]');

	$this->form_validation->set_rules('status', 'Status', 'trim|required|min_length[5]|max_length[12]');

	$this->form_validation->set_rules('last_date', 'Last Date', 'required|trim|min_length[5]|max_length[12]');

	$this->form_validation->set_rules('slug', 'Slug', 'trim|required|min_length[5]');

	If($this->form_validation->run() == FALSE) {
		echo validation_errors();
	} else {
		$id = html_escape($this->input->post('id'));
    $this->db->where('id', $id);
		if($this->db->update("posts", $data))
		{
			echo "success";
		}

}
}

public function logout()
    {
      $items = ['name', 'is_logged_in']; //was email
      $this->session->unset_userdata($items);
      $this->session->sess_destroy();
      redirect('Pages', 'refresh');
    }

}
/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */

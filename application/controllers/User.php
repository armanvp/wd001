<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
    $this->load->library('session');
		$this->load->library('form');
	}

	public function create() {
		$user = $this->input->post('user', TRUE);
		$pass = $this->input->post('password', TRUE);

	  $return = $this->user_model->user_save($user, $pass);

    if($return == FALSE){
		  $this->form->msg_set('user_create','user','User already exists','E');
			$this->session->css_class = 'class="error"';
    }else{
      $this->form->msg_unset('user_create','user');
			$this->session->unset_userdata('css_class');
    }
		redirect('/page/view/user_create');
	}

	public function login() {
		$user = $this->input->post('user', TRUE);
		$pass = $this->input->post('password', TRUE);

		if($this->user_model->user_auth($user, $pass)) {
			echo "Login sucessfully";
		}else{
			echo "Login failed";
		}
	}

	public function test() {
		$user = $this->input->post('user', TRUE);
		$pass = $this->input->post('password', TRUE);
		echo $user." : ".$pass."<br />";
		print_r($this->user_model->user_get($user));
	}

}

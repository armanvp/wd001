<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
    $this->load->library('session');
	}

	public function create() {
		$user = $this->input->post('user', TRUE);
		$pass = $this->input->post('password', TRUE);

	  $return = $this->user_model->user_save($user, $pass);
    
    if($return == FALSE){
      $this->session = array('form' => array('user' => array('message' => 'User already exists') ) );
      print_r($this->session);
    }else{
      $this->session->unset_userdata('form');
    }
		//redirect('/page/view/user_create');
	}

	public function test() {
		$user = $this->input->post('user', TRUE);
		$pass = $this->input->post('password', TRUE);
		echo $user." : ".$pass."<br />";
		print_r($this->user_model->user_get($user));
	}

}

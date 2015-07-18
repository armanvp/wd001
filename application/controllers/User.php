<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
	}

	public function create() {
		$user = $this->input->post('user', TRUE);
		$pass = $this->input->post('password', TRUE);

		$this->user_model->user_save($user, $pass);
		redirect('/page/view/home');
	}

}

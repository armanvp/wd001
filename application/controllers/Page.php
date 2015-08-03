<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->helper('date');
    $this->load->library('session');
		$this->load->library('userManager');
	}

	public function index()
	{
		$this->view('home');
	}

	public function view($page = 'home',$param2 = FALSE) {
    $data['content'] = $page;
		$data['blog_recent'] = $this->blog_model->get_recent();

    switch($page) {
      case "home":
        $data['blog'] = $this->blog_model->get_blog();
        break;
      case "blog":
        $data['blog'] = $this->blog_model->get_blog($param2);
        if($data['blog'] == NULL) {
          $data['blog'] = $this->blog_model->get_blog();
        }
        break;
		  case 'user_create' || 'user_login':
				$this->load->library('form');
				break;
    }

		$this->load->view('base',$data);

		/* Cleanup Functions */

		switch ($page) {
			case 'user_create' || 'user_login':
				$this->session->unset_userdata('form');
				$this->session->unset_userdata('css_class');
				break;

			default:
				# code...
				break;
		}
	}
}

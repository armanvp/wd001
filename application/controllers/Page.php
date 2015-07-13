<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->helper('date');
	}

	public function index()
	{
		$this->view('home');
	}

	public function view($page = 'home',$param2 = FALSE) {
    $data['content'] = $page;
    
    switch($page) {
      case "home":
        $data['blog'] = $this->blog_model->get_blog();
        $data['blog_recent'] = $this->blog_model=>get_recent();
        break;
      case "blog":
        $data['blog'] = $this->blog_model->get_blog($param2);
        $data['blog_recent'] = $this->blog_model=>get_recent();
        if($data['blog'] == NULL) {
          $data['blog'] = $this->blog_model->get_blog();
        }
        break;
    }
    
		$this->load->view('base',$data);
	}
}

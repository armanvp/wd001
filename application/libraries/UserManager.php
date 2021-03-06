<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserManager {

  protected $CI;
  private   $session;
  private   $user;

  /* Class Constructor */
  public function __construct() {

    /* Get the CodeIgniter's instance */
    $this->CI =& get_instance();

    /* StartUp Items */
    $this->CI->load->library('session');

    /* Extract user's data from Session */
    $this->user = $this->CI->session->userdata('user');

    /* Set Default User Data */
    $this->initialize();

  }

  /* Initialize User Data */
  private function initialize() {

    /* Initialize User's Data */
    if( empty($this->user) ) {
      $this->set_user('Arman');
    }

  }

  /* Set's User's Data */
  private function set_user($user) {
    $this->user = array(
      'user' => $user
    );
  }

}

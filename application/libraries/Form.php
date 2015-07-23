<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form {

  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
    $this->CI->load->library('session');
  }



}

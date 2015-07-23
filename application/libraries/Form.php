<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form {

  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
    $this->CI->load->library('session');
  }

  /* Set Form Field Message */
  public function msg_set($form, $field, $msg) {
    $this->CI->session->set_userdata(
      array('form'.$form.'.'.$field.'.msg' => $msg)
    );
  }

  /* UnSet Form Field Message */
  public function msg_unset($form, $field) {
    $this->CI->session->unset_userdata(
      'form.'.$form.'.'.$field
    );
  }

  /* Get Form Field Message */
  public function msg_get($form, $field) {
    return $this->CI->session->userdata(
      'form.'.$form.'.'.$field
    );
  }

}

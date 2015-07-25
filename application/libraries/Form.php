<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form {

  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
    $this->CI->load->library('session');
  }

  /* Set Form Field Message */
  public function msg_set($form, $field, $msg, $msgty) {
    $this->CI->session->set_userdata(
      array(
        $this->id_get($form, $field, 'msg') => $msg,
        $this->id_get($form, $field, 'msgty') => $msgty
      )
    );
  }

  /* UnSet Form Field Message */
  public function msg_unset($form, $field) {
    $this->CI->session->unset_userdata(
      array(
        $this->id_get($form, $field, 'msg'),
        $this->id_get($form, $field, 'msgty')
      )
    );
  }

  /* Get Form Field Message */
  public function msg_get($form, $field) {
    return $this->CI->session->userdata(
      $this->id_get($form, $field, 'msg')
    );
  }

  /* Retrieves the message type */
  public function msg_get_type($form, $field) {
    return $this->CI->session->userdata(
      $this->id_get($form, $field, 'msgty')
    );
  }

  /* Retrieves the CSS class */
  public function msg_get_css_class($form, $field) {
    if($this->msg_get_type($form, $field) == 'E') {
      return 'class="error"';
    }
  }

  /* Builds a form session id */
  private function id_get($form, $field, $prop) {
    return 'form.'.$form.'.'.$field.'.'.$prop;
  }

}

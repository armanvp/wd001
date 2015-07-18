<?php
class User_model extends CI_Model {

  public function __construct() {
    $this->load->database();
    $this->load->library("user");
  }

  /* Retrieves user data */
  public function user_get($user) {

    /* If User was supplied */
    if(isset($user)) {
      $where_cond = array('user' => $user);
    }else{
      return NULL;
    }

    $query = $this->db->get_where('user', $where_cond);
    return $query;

  }

  /* Saves the user to the master user table */
  public function user_save($user, $password) {

    /* Validate if the both the user and password are filled */
    if($user == NULL || $password == NULL){
      return FALSE;
    }

    /* Check if the user exits first */
    if($this->user_get($user) != NULL) {
      return FALSE;
    }

    /* Prepare values for insert */
    $db_user = $this->db->escape($user);
    $db_password_hash = $this->authenticator->password_hash_generate($password);
    $db_password_salt = $this->authenticator->salt_get();

    /* Prepare SQL statement */
    $sql = "INSERT INTO user (user, password, password_salt) ".
           "VALUES($db_user, $db_password_hash, $db_password_salt)";

    /* Insert the user in the table */
    return $this->db->query($sql);

  }

}
?>

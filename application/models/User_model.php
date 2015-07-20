<?php
class User_model extends CI_Model {

  public function __construct() {
    $this->load->database();
    $this->load->library("authenticator");
  }

  /* Retrieves user data */
  public function user_get($user) {

    /* Build WHERE condition */
    $where_cond = array('user' => $user);

    $query = $this->db->get_where('user', $where_cond);
    return $query;

  }

  /* Saves the user to the master user table */
  public function user_save($user, $password) {

    /* Validate if the both the user and password are filled */
    if($user == NULL || $password == NULL){
      return FALSE;
    }
    $result = $this->user_get($user);

    /* Check if the user exits first */
    if($result->num_rows > 0) {
      echo "Pasok";
      return FALSE;
    }

    print_r($result);

    /* Prepare values for insert */
    $db_user = $this->db->escape($user);
    $db_password_hash = $this->authenticator->password_hash_get($password);
    $db_password_salt = $this->authenticator->salt_generate();

    /* Prepare SQL statement */
    $sql = "INSERT INTO user (user, password, password_salt) ".
           "VALUES($db_user, '$db_password_hash', '$db_password_salt')";

    /* Insert the user in the table */
    return $this->db->query($sql);

  }

}
?>

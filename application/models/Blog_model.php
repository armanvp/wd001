<?php
class Blog_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_blog($id = FALSE) {

    if($id === FALSE) {
      $query = $this->db->get('blog');
      return $query->result_array();
    }

    $query = $this->db->get_where('blog',array('id' => $id));
    return $query->result_array();
  }
  
  public function get_recent($no = 5) {
    $this->db->order_by('id','DESC');
    $this->db->limit(5);
    $query = $this->db->get('blog');
    
    return $query->result_array();
  }
}
?>

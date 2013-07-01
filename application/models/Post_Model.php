<?php
 
// File ini ada di application/controllers/post_model.php
 
class Post_Model extends CI_Model
{
  
  public function getAll()
  {
    $this->db->where('status', 1);
    $this->db->from('tb_posts');
    return $this->db->get()->result();
  }
  
  public function getById($id)
  {
    $this->db->where('status', 1);
    $this->db->where('id', $id);
    $this->db->from('tb_posts');
    return $this->db->get()->row();
  }
 
}
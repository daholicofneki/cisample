<?php
 
// File ini ada di application/controllers/post.php
 
class Post extends CI_Controller 
{
  public function index()
  {
    $this->load->model('post_model');
    $data['posts'] = $this->post_model->getAll();
    return $this->load->view('index', $data);
  }
  
  public function add()
  {
    if ($_POST){
      $this->load->library('form_validation');
      
      $this->form_validation->set_rules('title','Judul','required');
      $this->form_validation->set_rules('body','Isi post','required');
      
      if ($this->form_validation->run() == TRUE) {
        $this->db->insert('tb_posts', array(
          'title' => $this->input->post('title'),
          'body'  => $this->input->post('body')
        ));
      }
    }
    return $this->load->view('add');
  }
  
  public function edit($id)
  {
    $this->load->model('post_model');
    if ($_POST) {
      $this->load->library('form_validation');
      
      $this->form_validation->set_rules('title','Judul','required');
      $this->form_validation->set_rules('body','Isi post','required');
      
      if ($this->form_validation->run() == TRUE) {
        $this->db->update('tb_posts', array(
          'title' => $this->input->post('title'),
          'body'  => $this->input->post('body')
        ), array(
          'id'  => $id  
        ));
      }
    }
    
    $data['post'] = $this->post_model->getById($id);
    return $this->load->view('edit', $data);
  }
  
  public function delete($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('tb_posts');
  }
}
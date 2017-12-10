<?php 
class Mkatpost extends CI_Model{
 
	function __construct(){
            parent::__construct();
    }

    function create(){
        $slug = $this->input->post('kategori_post');
        $slug = strtolower($slug);
        $slug = str_ireplace(" ", "-", $slug);
        $data = array(
            'kategori_post' => $this->input->post('kategori_post'),
            'slug_katpost' => $slug
        );
        return $this->db->insert('pc_katpost', $data);
    }

    function read(){
        $this->db->order_by("kategori_post","asc");
        return $this->db->get('pc_katpost')->result();
    }

    function read_id($id){ 
        $this->db->where("id_katpost", $id); 
        return $this->db->get('pc_katpost')->result();
    }

    function read_slug($slug){ 
        $this->db->where("slug_katpost", $slug); 
        return $this->db->get('pc_katpost')->result();
    }
    
    function list_kategori(){
        $this->db->order_by('kategori_post', 'asc');
        $result = $this->db->get('pc_katpost');
        if ($result->num_rows()>0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function update($id){
        $slug = $this->input->post('kategori_post');
        $slug = strtolower($slug);
        $slug = str_ireplace(" ", "-", $slug);
        $data = array(
            'kategori_post' => $this->input->post('kategori_post'),
            'slug_katpost' => $slug
        );
        $this->db->where('id_katpost', $id);
        $this->db->update('pc_katpost', $data);
    }

    function delete($id){
        $this->db->where('id_katpost', $id);
        $this->db->delete('pc_katpost');
    }
        
}
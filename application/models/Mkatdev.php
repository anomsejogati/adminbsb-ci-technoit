<?php 
class Mkatdev extends CI_Model{
 
	function __construct(){
            parent::__construct();
    }

    function create(){
        $slug = $this->input->post('kategori_develop');
        $slug = strtolower($slug);
        $slug = str_ireplace(" ", "-", $slug);
        $data = array(
            'kategori_develop' => $this->input->post('kategori_develop'),
            'slug_katdev' => $slug,
        );
        return $this->db->insert('pc_katdev', $data);
    }

    function read(){
        $this->db->order_by("kategori_develop","asc");
        return $this->db->get('pc_katdev')->result();
    }

    function read_id($id){ 
        $this->db->where("id_katdev", $id); 
        return $this->db->get('pc_katdev')->result();
    }

    function read_slug($slug){ 
        $this->db->where("slug_katpost", $slug); 
        return $this->db->get('pc_katdev')->result();
    }
    
    function list_kategori(){
        $this->db->order_by('kategori_develop', 'asc');
        $result = $this->db->get('pc_katdev');
        if ($result->num_rows()>0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function update($id){
        $slug = $this->input->post('kategori_develop');
        $slug = strtolower($slug);
        $slug = str_ireplace(" ", "-", $slug);
        $data = array(
            'kategori_develop' => $this->input->post('kategori_develop'),
            'slug_katdev' => $slug,
        );
        $this->db->where('id_katdev', $id);
        $this->db->update('pc_katdev', $data);
    }

    function delete($id){
        $this->db->where('id_katdev', $id);
        $this->db->delete('pc_katdev');
    }
        
}
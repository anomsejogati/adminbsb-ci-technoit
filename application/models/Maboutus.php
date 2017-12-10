<?php 
class Maboutus extends CI_Model{
 
	function __construct(){
            parent::__construct();
    }

    function create(){
        $slug = $this->input->post('judul');
        $slug = strtolower($slug);
        $slug = str_ireplace(" ", "-", $slug);
        $data = array(
            'judul' => $this->input->post('judul'),
            'slug_judul' => $slug,
            'deskripsi' => $this->input->post('deskripsi')
        );
        return $this->db->insert('pc_aboutus', $data);
    }

    function read(){
        $this->db->order_by("judul","asc");
        return $this->db->get('pc_aboutus')->result();
    }

    function read_id($id){ 
        $this->db->where("id_about", $id); 
        return $this->db->get('pc_aboutus')->result();
    }

    function read_slug($slug){ 
        $this->db->where("slug_judul", $slug); 
        return $this->db->get('pc_aboutus')->result();
    }
    
    function list_about(){
        $this->db->order_by('judul', 'asc');
        $result = $this->db->get('pc_aboutus');
        if ($result->num_rows()>0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function update($id){
        $slug = $this->input->post('judul');
        $slug = strtolower($slug);
        $slug = str_ireplace(" ", "-", $slug);
        $data = array(
            'judul' => $this->input->post('judul'),
            'slug_judul' => $slug,
            'deskripsi' => $this->input->post('deskripsi')
        );
        $this->db->where('id_about', $id);
        $this->db->update('pc_aboutus', $data);
    }

    function delete($id){
        $this->db->where('id_about', $id);
        $this->db->delete('pc_aboutus');
    }
        
}
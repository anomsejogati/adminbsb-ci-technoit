<?php 
class Mpost extends CI_Model{
 
	function __construct(){
            parent::__construct();
                
    }

    function create($data){
        return $this->db->insert('pc_post', $data);
    }

    function read() {
        $this->db->select('*');
        $this->db->from('pc_post a');
        $this->db->join('pc_katpost b', 'a.id_katpost = b.id_katpost');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $query = $this->db->get(); return $query->result();
    }

    function read_id($id) {
        $this->db->select('*');
        $this->db->from('pc_post a');
        $this->db->join('pc_katpost b', 'a.id_katpost = b.id_katpost');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $this->db->where('id_post', $id);
        $query = $this->db->get(); return $query->result();
    }

    function read_slug($slug) {
        $this->db->select('*');
        $this->db->from('pc_post a');
        $this->db->join('pc_katpost b', 'a.id_katpost = b.id_katpost');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $this->db->where('slug_post', $slug);
        $query = $this->db->get(); return $query->result();
    }
    
    function postAktif($id) {
        $data = array(
            'post_aktif' => 1
            );
        $this->db->where('id_post', $id);
        $this->db->update('pc_post', $data); 
    }
    
    function postNonAktif($id) {
        $data = array(
            'post_aktif' => 0
            );
        $this->db->where('id_post', $id);
        $this->db->update('pc_post', $data); 
    }
    
    function update($id){
        $data = array(
                'judul' => $this->input->post('judul'),
                'slug_post' => $this->input->post('slug_post'),
                        //'foto_header' => $this->input->post('foto_header'),
                'headline' => $this->input->post('headline'),
                'isi_post' => $this->input->post('isi_post'),
                'tgl_post' => date('Y-m-d', strtotime($this->input->post('tgl_post'))),
                'id_katpost' => $this->input->post('id_katpost'),
                'id_admin' => $this->session->userdata('id_admin')
                );
        $this->db->where('id_post', $id);
        $this->db->update('pc_post', $data); 
    }
    
    function delete($id){
        $this->db->where('id_post', $id);
        $this->db->delete('pc_post');
    }
    
    function count_post(){
        return $this->db->get('pc_post')->num_rows();
    }
        
        
}
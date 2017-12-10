<?php 
class Mlayanan extends CI_Model{
 
	function __construct(){
            parent::__construct();
                
    }

    function create($data){
        $slug = $this->input->post('nama_layanan');
        $slug = strtolower($slug);
        $slug = str_ireplace(" ", "-", $slug);
        $data = array(
            'id_katlay' => $this->input->post('id_katlay'),
            'nama_layanan' => $this->input->post('nama_layanan'),
            'detail_layanan' => $this->input->post('detail_layanan'),
            'slug_layanan' => $slug,
            'id_admin' => $this->session->userdata('id_admin')
            );
        return $this->db->insert('pc_layanan', $data);
    }

    function read() {
        $this->db->select('*');
        $this->db->from('pc_layanan a');
        $this->db->join('pc_katlayanan b', 'a.id_katlay = b.id_katlay');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $query = $this->db->get(); return $query->result();
    }

    function read_id($id) {
        $this->db->select('*');
        $this->db->from('pc_layanan a');
        $this->db->join('pc_katlayanan b', 'a.id_katlay = b.id_katlay');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $this->db->where('id_layanan', $id);
        $query = $this->db->get(); return $query->result();
    }

    function read_slug($slug) {
        $this->db->select('*');
        $this->db->from('pc_layanan a');
        $this->db->join('pc_katlayanan b', 'a.id_katlay = b.id_katlay');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $this->db->where('slug_layanan', $slug);
        $query = $this->db->get(); return $query->result();
    }
    
    function update($id){
        $slug = $this->input->post('nama_layanan');
        $slug = strtolower($slug);
        $slug = str_ireplace(" ", "-", $slug);
        $data = array(
                'id_katlay' => $this->input->post('id_katlay'),
                'nama_layanan' => $this->input->post('nama_layanan'),
                'detail_layanan' => $this->input->post('detail_layanan'),
                'slug_layanan' => $slug,
                'id_admin' => $this->session->userdata('id_admin')
                );
        $this->db->where('id_layanan', $id);
        $this->db->update('pc_layanan', $data); 
    }
    
    function delete($id){
        $this->db->where('id_layanan', $id);
        $this->db->delete('pc_layanan');
    }
    
    function count_post(){
        return $this->db->get('pc_layanan')->num_rows();
    }
        
        
}
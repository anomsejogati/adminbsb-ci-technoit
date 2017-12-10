<?php 
class Mdevelop extends CI_Model{
 
	function __construct(){
            parent::__construct();
                
    }

    function create($data){
        $data = array(
            'id_katdev' => $this->input->post('id_katdev'),
            'des_produk' => $this->input->post('des_produk'),
            'harga' => $this->input->post('harga'),
            'id_admin' => $this->session->userdata('id_admin')
            );
        return $this->db->insert('pc_develop', $data);
    }

    function read() {
        $this->db->select('*');
        $this->db->from('pc_develop a');
        $this->db->join('pc_katdev b', 'a.id_katdev = b.id_katdev');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $query = $this->db->get(); return $query->result();
    }

    function read_id($id) {
        $this->db->select('*');
        $this->db->from('pc_develop a');
        $this->db->join('pc_katdev b', 'a.id_katdev = b.id_katdev');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $this->db->where('id_dev', $id);
        $query = $this->db->get(); return $query->result();
    }

    function read_slug($slug) {
        $this->db->select('*');
        $this->db->from('pc_develop a');
        $this->db->join('pc_katdev b', 'a.id_katdev = b.id_katdev');
        $this->db->join('pc_admin c', 'a.id_admin = c.id_admin');
        $this->db->where('slug_dev', $slug);
        $query = $this->db->get(); return $query->result();
    }
    
    function update($id){
        $data = array(
            'id_katdev' => $this->input->post('id_katdev'),
            'des_produk' => $this->input->post('des_produk'),
            'harga' => $this->input->post('harga'),
            'id_admin' => $this->session->userdata('id_admin')
            );
        $this->db->where('id_dev', $id);
        $this->db->update('pc_develop', $data); 
    }
    
    function delete($id){
        $this->db->where('id_dev', $id);
        $this->db->delete('pc_develop');
    }
    
    function count_develop(){
        return $this->db->get('pc_develop')->num_rows();
    }
        
        
}
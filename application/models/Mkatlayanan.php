<?php 
class Mkatlayanan extends CI_Model{
 
	function __construct(){
            parent::__construct();
    }

    function create(){
        $data = array(
            'kategori_layanan' => $this->input->post('kategori_layanan')
        );
        return $this->db->insert('pc_katlayanan', $data);
    }

    function read(){
        $this->db->order_by("kategori_layanan","asc");
        return $this->db->get('pc_katlayanan')->result();
    }

    function read_id($id){ 
        $this->db->where("id_katlay", $id); 
        return $this->db->get('pc_katlayanan')->result();
    }
    
    function list_kategori(){
        $this->db->order_by('kategori_layanan', 'asc');
        $result = $this->db->get('pc_katlayanan');
        if ($result->num_rows()>0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function update($id){
        $data = array(
            'kategori_layanan' => $this->input->post('kategori_layanan')
        );
        $this->db->where('id_katlay', $id);
        $this->db->update('pc_katlayanan', $data);
    }

    function delete($id){
        $this->db->where('id_katlay', $id);
        $this->db->delete('pc_katlayanan');
    }
        
}
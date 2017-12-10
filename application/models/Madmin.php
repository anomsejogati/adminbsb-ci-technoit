<?php 
class Madmin extends CI_Model{
 
	function __construct(){
            parent::__construct();
                
	}
        
        function create($data){            
            return $this->db->insert('pc_admin', $data);
        }
        
        function read(){
            $this->db->order_by("nama_admin","asc"); 
            return $this->db->get('pc_admin')->result();
        }

        function read_id($id){
            $this->db->where("id_admin", $id); 
            return $this->db->get('pc_admin')->result();
        }
        
        function update($id){
            $data = array(
		        'id_admin' => $this->input->post('id_admin'),
                'nama_admin' => $this->input->post('nama_admin'),
                'level' => $this->input->post('level'),
                'status_login' => 'off',
                'aktif' => '1',
                'foto' => $this->input->post('foto')
            );
            $this->db->where('id_admin', $id);
            $this->db->update('pc_admin', $data);
        }

        function reset_password($id){
            $data = array(
                'pass' => md5($this->input->post('123456'))
            );
            $this->db->where('id_admin', $id);
            $this->db->update('pc_admin', $data);
        }

        function set_aktif($id){
            $data = array(
                'aktif' => '1'
            );
            $this->db->where('id_admin', $id);
            $this->db->update('pc_admin', $data);
        }

        function set_non_aktif($id){
            $data = array(
                'aktif' => '0'
            );
            $this->db->where('id_admin', $id);
            $this->db->update('pc_admin', $data);
        }
        
        function delete($id){
            $this->db->where('id_admin', $id);
            $this->db->delete('pc_admin');
        }
        
        function check_login($id_admin, $pass){
            $this->db->where('id_admin', $id_admin);
            $this->db->where('pass', $pass);
            return $this->db->get('pc_admin');
        }
        
        function setstatus_login($id){
            $data = array(
                'status_login' => 'login'
            );
            $this->db->where('id_admin', $id);
            $this->db->update('pc_admin', $data);
        }
        
        function setstatus_off($id){
            $data = array(
                'status_login' => 'off'
            );
            $this->db->where('id_admin', $id);
            $this->db->update('pc_admin', $data);
        }
        
        
}
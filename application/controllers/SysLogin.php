<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SysLogin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
        if ($this->session->userdata('id_admin')) {
            if($this->session->userdata('level') == 'Administrator'){
                redirect('sysadmin');
            }elseif($this->session->userdata('level') == 'Operator'){
                redirect('sysadmin');
            }
        }  
    }
	
	function index(){
            $data['title'] = "Sign In | TechnoIT";
            $data['error'] = "";
            $this->load->view('view_admin/login', $data);
	}
        
        function auth(){
            $id_admin = $this->input->post('id_admin');
            $pass = md5($this->input->post('pass'));
            //calling chech_user() function in Login_model.php
            $result = $this->Madmin->check_login($id_admin, $pass); 
            
            if($result->num_rows() > 0){
                foreach ($result->result() as $row) {
                    $id_admin = $row->id_admin;
                    $nama_admin = $row->nama_admin;
                    $level = $row->level;
                    $foto = $row->foto;
                }
                
                $newdata = array(
                    'id_admin' => $id_admin,
                    'nama_admin' => $nama_admin,
                    'level' => $level,
                    'foto' => $foto
                        );
                
                $this->Madmin->setstatus_login($id_admin);
                //set up session data
                    $this->session->set_userdata($newdata);
                    if($this->session->userdata('level')=='Administrator') {
                        redirect('sysadmin');
                    }elseif ($this->session->userdata('level')=='Operator') {
                        redirect('sysadmin');
                    }elseif ($this->session->userdata('level')=='CS') {
                        redirect('sysadmin');
                    }elseif ($this->session->userdata('level')=='Mentor') {
                        redirect('sysadmin');
                    }
		}else{
                    $data['title'] = "Sign In | TechnoIT";
                    $data['error'] = "ID. Admin dan Password anda salah...";
                    $this->load->view('view_admin/login', $data);
                }
	}
        
        
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class SysAdmin extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Madmin');
            $this->load->model('Mpost');
            $this->load->model('Mdevelop');
            $this->load->model('Morder');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
            $data['title'] = "Sys | TechnoIT";
            $data['content'] = "dashboard";
            $data['js'] = "view_admin/js_home";
            $data['countpost'] = $this->Mpost->count_post();
            $data['countdevelop'] = $this->Mdevelop->count_develop();
            $data['countorder'] = $this->Morder->count_order();
            $this->load->view('view_admin/admintechnoit', $data);
    }

    function data_aboutus(){
        redirect('aboutus');
    }

    function data_kategori_post(){
        redirect('kategoripost');
    }

    function data_post(){
        redirect('post');
    }

    function data_kategori_layanan(){
        redirect('kategorilayanan');
    }

    function data_layanan(){
        redirect('layanan');
    }

    function data_kategori_develop(){
        redirect('kategoridevelop');
    }

    function data_develop(){
        redirect('develop');
    }

    function data_order(){
        redirect('order');
    }

    function data_admin(){
        redirect('admin');
    }
    
    function logout() {
        $this->Madmin->setstatus_off($this->session->userdata('id_admin'));
        $this->session->unset_userdata('no_admin');
        $this->session->unset_userdata('nama_admin');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('syslogin');
	}
        
        
}
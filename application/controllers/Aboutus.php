<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Aboutus extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Maboutus');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
        $data['title'] = "About | TechnoIT";
        $data['content'] = "tabel-aboutus";
        $data['js'] = "view_admin/js_tabel";
        $data['data_aboutus'] = $this->Maboutus->read();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function add(){
        $data['title'] = ".: Tambah Aboutus ";
        $data['content'] = "add-aboutus";
        $data['js'] = "view_admin/js_tabel";
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function create(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('aboutus/add');
        }else{
            $this->Maboutus->create();
            redirect('aboutus');
        }
    }

    function edit($id){
        $data['title'] = ".: Ubah Aboutus ";
        $data['content'] = "edit-aboutus";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Maboutus->read_id($id);
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function update(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('aboutus/edit');
        }else{
            $id = $this->input->post('id_about');
            $this->Maboutus->update($id);
            redirect('aboutus');
        }
    }

    function delete($id){
        $this->Maboutus->delete($id);
        redirect('aboutus');
    }
        
        
}
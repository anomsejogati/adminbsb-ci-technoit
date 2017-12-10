<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class KategoriPost extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Mkatpost');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
        $data['title'] = "Kategori Post | TechnoIT";
        $data['content'] = "tabel-kategori-post";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mkatpost->read();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function add(){
        $data['title'] = ".: Tambah Kategori Post ";
        $data['content'] = "add-kategori-post";
        $data['js'] = "view_admin/js_tabel";
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function create(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('kategori_post', 'Kategori Post', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('kategoripost/add');
        }else{
            $this->Mkatpost->create();
            redirect('kategoripost');
        }
    }

    function edit($id){
        $data['title'] = ".: Ubah Kategori Post ";
        $data['content'] = "edit-kategori-post";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mkatpost->read_id($id);
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function update(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('kategori_post', 'Kategori Post', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('kategoripost/edit');
        }else{
            $id = $this->input->post('id_katpost');
            $this->Mkatpost->update($id);
            redirect('kategoripost');
        }
    }

    function delete($id){
        $this->Mkatpost->delete($id);
        redirect('kategoripost');
    }
        
        
}
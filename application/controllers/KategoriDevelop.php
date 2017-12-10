<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class KategoriDevelop extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Mkatdev');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
        $data['title'] = "Kategori Develop | TechnoIT";
        $data['content'] = "tabel-kategori-develop";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mkatdev->read();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function add(){
        $data['title'] = ".: Tambah Kategori Develop ";
        $data['content'] = "add-kategori-develop";
        $data['js'] = "view_admin/js_tabel";
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function create(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('kategori_develop', 'Kategori Develop', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('kategoridevelop/add');
        }else{
            $this->Mkatdev->create();
            redirect('kategoridevelop');
        }
    }

    function edit($id){
        $data['title'] = ".: Ubah Kategori Develop ";
        $data['content'] = "edit-kategori-develop";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mkatdev->read_id($id);
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function update(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('kategori_develop', 'Kategori Develop', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('kategoridevelop/edit');
        }else{
            $id = $this->input->post('id_katdev');
            $this->Mkatdev->update($id);
            redirect('kategoridevelop');
        }
    }

    function delete($id){
        $this->Mkatdev->delete($id);
        redirect('kategoridevelop');
    }
        
        
}
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class KategoriLayanan extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Mkatlayanan');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
        $data['title'] = "Kategori Layanan | TechnoIT";
        $data['content'] = "tabel-kategori-layanan";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mkatlayanan->read();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function add(){
        $data['title'] = ".: Tambah Kategori Layanan ";
        $data['content'] = "add-kategori-layanan";
        $data['js'] = "view_admin/js_tabel";
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function create(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('kategori_layanan', 'Kategori Layanan', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('kategorilayanan/add');
        }else{
            $this->Mkatlayanan->create();
            redirect('kategorilayanan');
        }
    }

    function edit($id){
        $data['title'] = ".: Ubah Kategori Layanan ";
        $data['content'] = "edit-kategori-layanan";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mkatlayanan->read_id($id);
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function update(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('kategori_layanan', 'Kategori Layanan', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('kategorilayanan/edit');
        }else{
            $id = $this->input->post('id_katlay');
            $this->Mkatlayanan->update($id);
            redirect('kategorilayanan');
        }
    }

    function delete($id){
        $this->Mkatlayanan->delete($id);
        redirect('kategorilayanan');
    }
        
        
}
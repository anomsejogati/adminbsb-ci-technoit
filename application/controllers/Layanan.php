<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Layanan extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Mkatlayanan');
            $this->load->model('Mlayanan');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
        $data['title'] = "Layanan | TechnoIT";
        $data['content'] = "tabel-layanan";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mlayanan->read();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function add(){
        $data['title'] = ".: Tambah Layanan ";
        $data['content'] = "add-layanan";
        $data['js'] = "view_admin/js_tabel";
        $data['list1'] = $this->Mkatlayanan->list_kategori();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function create(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('layanan/add');
        }else{
            $this->Mlayanan->create();
            redirect('layanan');
        }
    }

    function edit($id){
        $data['title'] = ".: Ubah Layanan ";
        $data['content'] = "edit-layanan";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mlayanan->read_id($id);
        $data['list1'] = $this->Mkatlayanan->list_kategori();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function update(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('layanan/edit');
        }else{
            $id = $this->input->post('id_layanan');
            $this->Mlayanan->update($id);
            redirect('layanan');
        }
    }

    function delete($id){
        $this->Mlayanan->delete($id);
        redirect('layanan');
    }
        
        
}
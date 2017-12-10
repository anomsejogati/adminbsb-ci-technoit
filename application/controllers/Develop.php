<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Develop extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Mkatdev');
            $this->load->model('Mdevelop');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
        $data['title'] = "Develop | TechnoIT";
        $data['content'] = "tabel-develop";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mdevelop->read();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function add(){
        $data['title'] = ".: Tambah Develop ";
        $data['content'] = "add-develop";
        $data['js'] = "view_admin/js_tabel";
        $data['list1'] = $this->Mkatdev->list_kategori();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function create(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('des_produk', 'Deskripsi Produk', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('develop/add');
        }else{
            $this->Mdevelop->create();
            redirect('develop');
        }
    }

    function edit($id){
        $data['title'] = ".: Ubah Develop ";
        $data['content'] = "edit-develop";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mdevelop->read_id($id);
        $data['list1'] = $this->Mkatdev->list_kategori();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function update(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('des_produk', 'Deskripsi Produk', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('develop/edit');
        }else{
            $id = $this->input->post('id_dev');
            $this->Mdevelop->update($id);
            redirect('develop');
        }
    }

    function delete($id){
        $this->Mdevelop->delete($id);
        redirect('develop');
    }
        
        
}
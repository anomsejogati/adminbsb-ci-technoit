<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Madmin');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
        $data['title'] = "Admin | TechnoIT";
        $data['content'] = "tabel-admin";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Madmin->read();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function add(){
        $data['title'] = ".: Tambah Admin";
        $data['content'] = "add-admin";
        $data['js'] = "view_admin/js_tabel";
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function create(){
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './media/foto-admin/source/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '1200'; //maksimum besar file 
        $config['max_width']  = '2000'; //lebar maksimum  px
        $config['max_height']  = '2000'; //tinggi maksimu  px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);
        if($_FILES['foto']['name']){
            if ($this->upload->do_upload('foto')){
                $data_upload = $this->upload->data();
                $this->image_lib->initialize(array(
                    'image_library' => 'gd2',
                    'source_image' => './media/foto-admin/source/'. $data_upload['file_name'],
                    'new_image' => './media/foto-admin/thumbs/'. $data_upload['file_name'],
                    'maintain_ratio' => false,
                    'create_thumb' => true,
                    'quality' => '20%',
                    'width' => 172,
                    'height' => 240
                ));
                $this->image_lib->resize();
                $data = array(
                'id_admin' => $this->input->post('id_admin'),
                'nama_admin' => $this->input->post('nama_admin'),
                'pass' => md5('123456'),
                'level' => $this->input->post('level'),
                'foto' => $data_upload['file_name'],
                'thumbs' => $nmfile.'_thumb'.$data_upload['file_ext'],
                'status_login' => 'off',
                'aktif' => '0'
                );
                $this->Madmin->create($data);
                redirect('admin');
                }
            }else{
                redirect('admin/add');
            }
    }

    function edit($id){
        $data['title'] = ".: Ubah Admin";
        $data['content'] = "edit-admin";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Madmin->read_id($id);
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function update(){
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('admin/edit');
        }else{
            $id = $this->input->post('id_admin');
            $this->Madmin->update($id);
            redirect('admin');
        }
    }

    function reset_password($id){
        $this->Madmin->reset_password($id);
        redirect('admin');
    }

    function aktif($id){
        $this->Madmin->set_aktif($id);
        redirect('admin');
    }

    function non_aktif($id){
        $this->Madmin->set_non_aktif($id);
        redirect('admin');
    }

    function delete($id){
        $this->Madmin->delete($id);
        redirect('admin');
    }
        
        
}
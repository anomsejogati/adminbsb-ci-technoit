<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Post extends CI_Controller{
 
	public function __construct(){
            parent::__construct();
            $this->load->model('Mkatpost');
            $this->load->model('Mpost');
            $this->load->model('Madmin');
            if ($this->session->userdata('id_admin')=="") {
                redirect('syslogin');
            }
	}
 
	function index() {
        $data['title'] = "Post | TechnoIT";
        $data['content'] = "tabel-post";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mpost->read();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function add(){
        $data['title'] = ".: Tambah Post ";
        $data['content'] = "add-post";
        $data['js'] = "view_admin/js_form";
        $data['list1'] = $this->Mkatpost->list_kategori();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function create(){
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './media/foto-header/source/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);
        if($_FILES['foto_header']['name']){
            if ($this->upload->do_upload('foto_header')){
                $data_upload = $this->upload->data();
                $this->image_lib->initialize(array(
                    'image_library' => 'gd2',
                    'source_image' => './media/foto-header/source/'. $data_upload['file_name'],
                    'new_image' => './media/foto-header/thumbs/'. $data_upload['file_name'],
                    'maintain_ratio' => false,
                    'create_thumb' => true,
                    'quality' => '20%',
                    'width' => 240,
                    'height' => 172
                ));
                $this->image_lib->resize();
                $slug = $this->input->post('judul');
                $slug = strtolower($slug);
                $slug = str_ireplace(" ", "-", $slug);
                $data = array(
                'judul' => $this->input->post('judul'),
                'slug_post' => $slug,
                'foto_header' => $data_upload['file_name'],
                'thumbs' => $nmfile.'_thumb'.$data_upload['file_ext'],
                'headline' => $this->input->post('headline'),
                'isi_post' => $this->input->post('isi_post'),
                'tgl_post' => date('Y-m-d', strtotime($this->input->post('tgl_post'))),
                'id_katpost' => $this->input->post('id_katpost'),
                'id_admin' => $this->session->userdata('id_admin'),
                'jml_like' => '0',
                'post_aktif' => '0'
                );
                $this->Mpost->create($data);
                redirect('post');
                }
            }else{
                redirect('post/add');
            }
    }

    function edit($id){
        $data['title'] = ".: Ubah Post ";
        $data['content'] = "edit-post";
        $data['js'] = "view_admin/js_tabel";
        $data['getdata'] = $this->Mpost->read_id($id);
        $data['list1'] = $this->Mkatpost->list_kategori();
        $this->load->view('view_admin/admintechnoit', $data);
    }

    function update(){
        $id = $this->input->post('id_post');
        $this->form_validation->set_message('required', '%s mohon diisi.');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        
        if ($this->form_validation->run() === FALSE){
            redirect('post/edit/'.$id);
        }else{
            $this->Mpost->update($id);
            redirect('post');
        }
    }

    function delete($id){
        $this->Mpost->delete($id);
        redirect('post');
    }
        
        
}
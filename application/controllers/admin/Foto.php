<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Foto extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
        	$data['foto']   = $this->db->order_by('id','desc')->get('tb_foto');
            $this->load->view('admin/v_foto',$data);
        }

    public function store(){
        $upload_foto = $_FILES['file'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/galery/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $data = [
            'nama'			=> $this->input->post('nama'),
            'deskripsi'		=> $this->input->post('deskripsi'),  
            'file'          => $foto
        ];
        $this->db->insert('tb_foto',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Foto !</div>');
        redirect(base_url('admin/foto'));
    }

    public function edit($id){
    	$data['blog']		= $this->db->where('id',$id)->get('tb_blog')->row_array();
    	$data['kategori']	= $this->db->get('tb_blog_kategori');
    	$data['kategori1']	= $this->db->get('tb_blog_kategori');
    	$data['title'] 		= "Tambah Artikel | KaffAdmin";
        $this->load->view('admin/blog/v_edit',$data);

    }

    public function update($id){
        $foto = $_FILES['file']['name'];

        $data = [
            'nama'         => $this->input->post('nama'),
            'deskripsi'     => $this->input->post('deskripsi'),

        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/galery/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file')) {
            $gambarLama = $this->input->post('file_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/galery/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('file', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_foto',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Foto !</div>');
        redirect(base_url('admin/foto'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_foto where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/galery/'.$u->file);
        } 
        $this->db->where('id',$id)->delete('tb_foto');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Foto !</div>');
        redirect(base_url('admin/foto'));
    }
}
        
    /* End of file  User.php */
        
                            

		 
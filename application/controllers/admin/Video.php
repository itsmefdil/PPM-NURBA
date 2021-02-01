<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Video extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
            $data['video']   = $this->db->order_by('id','desc')->get('tb_video');
            $this->load->view('admin/v_video',$data);
        }

    public function store(){
        $upload_foto = $_FILES['file'];
            if ($upload_foto) {
                $config['allowed_types'] = 'mp4|3gp|mkv|avi';
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
            'nama'          => $this->input->post('nama'),
            'deskripsi'     => $this->input->post('deskripsi'),  
            'file'          => $foto
        ];
        $this->db->insert('tb_video',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Video !</div>');
        redirect(base_url('admin/video'));
    }

    public function update($id){
        $foto = $_FILES['file']['name'];

        $data = [
            'nama'         => $this->input->post('nama'),
            'deskripsi'     => $this->input->post('deskripsi'),

        ];
        $config['allowed_types'] = 'mp4|3gp|mkv|avi';
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
        $this->db->update('tb_video',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Video !</div>');
        redirect(base_url('admin/video'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_video where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/galery/'.$u->file);
        } 
        $this->db->where('id',$id)->delete('tb_video');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Video !</div>');
        redirect(base_url('admin/video'));
    }
}
        
    /* End of file  User.php */
        
                            

         
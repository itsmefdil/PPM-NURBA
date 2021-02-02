<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Pelajaran extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
        	$data['pelajaran']   = $this->db->order_by('id','desc')->get('tb_pelajaran');
            $this->load->view('admin/v_pelajaran',$data);
        }

    public function store(){
        $upload_foto = $_FILES['icon'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/pelajaran/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('icon')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $data = [
            'nama'			=> $this->input->post('nama'),
            'deskripsi'		=> $this->input->post('deskripsi'),  
            'icon'          => $foto
        ];
        $this->db->insert('tb_pelajaran',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Pelajaran !</div>');
        redirect(base_url('admin/pelajaran'));
    }

    public function update($id){
        $foto = $_FILES['file']['name'];

        $data = [
            'nama'         => $this->input->post('nama'),
            'deskripsi'     => $this->input->post('deskripsi'),

        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/pelajaran/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('icon')) {
            $gambarLama = $this->input->post('icon_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/pelajaran/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('icon', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_pelajaran',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Pelajaran !</div>');
        redirect(base_url('admin/pelajaran'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_pelajaran where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/pelajaran/'.$u->file);
        } 
        $this->db->where('id',$id)->delete('tb_pelajaran');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Pelajaran !</div>');
        redirect(base_url('admin/pelajaran'));
    }
}
        
    /* End of file  User.php */
        
                            


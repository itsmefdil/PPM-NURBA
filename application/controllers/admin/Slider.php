<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Slider extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		$role = $this->session->userdata('role');
		if ($role != 'Administrator') {
			echo "<script> alert('Anda tidak mempunyai akses untuk membuka halaman ini !') ; window.location.href='../admin'; </script>";
		}
    }

    public function index()
        {
        	$data['foto']   = $this->db->order_by('id','desc')->get('tb_slider');
            $this->load->view('admin/v_slider',$data);
        }

    public function store(){
        $upload_foto = $_FILES['foto'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/slider/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $data = [
            'judul'			=> $this->input->post('judul'),
            'subjudul'		=> $this->input->post('subjudul'),  
            'link'          => $this->input->post('link'),
            'foto'          => $foto
        ];
        $this->db->insert('tb_slider',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Foto !</div>');
        redirect(base_url('admin/slider'));
    }

    public function update($id){
        $foto = $_FILES['file']['name'];

        $data = [
            'judul'         => $this->input->post('judul'),
            'subjudul'     => $this->input->post('subjudul'),
            'link'          => $this->input->post('link'),

        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/slider/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file')) {
            $gambarLama = $this->input->post('file_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/slider/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('file', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_slider',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Foto !</div>');
        redirect(base_url('admin/slider'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_slider where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/slider/'.$u->file);
        } 
        $this->db->where('id',$id)->delete('tb_foto');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Foto !</div>');
        redirect(base_url('admin/foto'));
    }
}
        
    /* End of file  User.php */
        
                            

		 
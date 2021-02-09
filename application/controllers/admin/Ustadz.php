<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Ustadz extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
        	$data['ustadz']   = $this->db->order_by('id','desc')->get('tb_ustadz');
            $this->load->view('admin/v_ustadz',$data);
        }

    public function store(){
        $upload_foto = $_FILES['foto'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/ustadz/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $data = [
            'nama'			=> $this->input->post('nama'),
            'mengajar'		=> $this->input->post('mengajar'),  
            'foto'          => $foto
        ];
        $this->db->insert('tb_ustadz',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan ustadz !</div>');
        redirect(base_url('admin/ustadz'));
    }

    public function update($id){
        $foto = $_FILES['file']['name'];

        $data = [
            'nama'         => $this->input->post('nama'),
            'mengajar'     => $this->input->post('mengajar'),

        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/ustadz/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/ustadz/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_ustadz',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui ustadz !</div>');
        redirect(base_url('admin/ustadz'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_ustadz where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/ustadz/'.$u->file);
        } 
        $this->db->where('id',$id)->delete('tb_ustadz');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus ustadz !</div>');
        redirect(base_url('admin/ustadz'));
    }
}
        
    /* End of file  User.php */
        
                            


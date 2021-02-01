<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('upload');

		$role = $this->session->userdata('role');
		if ($role != 'Administrator') {
			echo "<script> alert('Anda tidak mempunyai akses untuk membuka halaman ini !') ; window.location.href='../admin'; </script>";
		}
	}

	// List all your items
	public function index()
	{
		$data['p']	= $this->db->order_by('id','desc')->get('tb_pengurus');
		$this->load->view('admin/v_pengurus',$data);
	}

	// Add a new item
	public function add()
	{

		$this->load->view('admin/v_pengurus-add');
	}	

	public function edit($id)
	{
		$data['p']	= $this->db->order_by('id','desc')->get('tb_pengurus')->row_array();
		$this->load->view('admin/v_pengurus-edit',$data);
	}	

	public function store(){
		$upload_foto = $_FILES['foto'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/pengurus/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $data = [
            'nama'			=> $this->input->post('nama'),
            'jabatan'		=> $this->input->post('jabatan'),  
            'kontak'		=> $this->input->post('kontak'),
            'foto'          => $foto
        ];
        $this->db->insert('tb_pengurus',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Menambahkan Pengurus !</div>');
        redirect(base_url('admin/pengurus'));
	}

	//Update one item
	public function update( $id = NULL )
	{
		$foto       = $_FILES['foto']['name'];
        $data = [
             'nama'			=> $this->input->post('nama'),
            'jabatan'		=> $this->input->post('jabatan'),  
            'kontak'		=> $this->input->post('kontak'),
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/pengurus/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/pengurus/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_pengurus',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Pengurus !</div>');
        redirect(base_url('admin/pengurus'));
	}

	//Delete one item
	public function delete( $id = NULL )
	{
        $data = $this->db->query("SELECT * FROM tb_pengurus where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/pengurus/'.$u->foto);
        } 
        $this->db->where('id',$id)->delete('tb_pengurus');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Pengurus !</div>');
        redirect(base_url('admin/pengurus'));
	}
}

/* End of file Pengurus.php */
/* Location: ./application/controllers/admin/Pengurus.php */

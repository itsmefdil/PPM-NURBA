<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$id = $this->session->userdata('id');
		$data['p']	= $this->db->where('id',$id)->get('tb_user')->row_array();
		$this->load->view('admin/v_profile',$data);
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update()
	{
		$foto       = $_FILES['foto']['name'];
		$id = $this->session->userdata('id');
		$data = [
			'nama'	=> $this->input->post('nama'),
			'email'	=> $this->input->post('email'),
		];
		$config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/pengguna/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/pengguna/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }

		$this->db->where('id',$id)->update('tb_user',$data);
		$this->session->set_flashdata('sukses','<div class="alert alert-success">Berhasil Memperbahrui Profile</div>');
		redirect (base_url('admin/profile'));
	}

	//Delete one item
	public function password()
	{
		$id = $this->session->userdata('id');
		$data = [
			'password'	=> md5($this->input->post('password')),
		];
		$this->db->where('id',$id)->update('tb_user',$data);
		$this->session->set_flashdata('sukses','<div class="alert alert-success">Berhasil Memperbahrui Password</div>');
		redirect (base_url('admin/profile'));
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/admin/Profile.php */

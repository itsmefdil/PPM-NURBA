<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		$role = $this->session->userdata('role');
		if ($role != 'Administrator') {
			echo "<script> alert('Anda tidak mempunyai akses untuk membuka halaman ini !') ; window.location.href='../admin'; </script>";
		}
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['s']	= $this->db->where('id',1)->get('tb_sejarah')->row_array();
		$this->load->view('admin/v_sejarah',$data);
	}

	// Add a new item
	public function add()
	{
		$foto       = $_FILES['foto']['name'];
        $data = [
           'sejarah'	=> $this->input->post('sejarah')
		];
		
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/images/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/images/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',1);
        $this->db->update('tb_sejarah',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Sejarah !</div>');
        redirect(base_url('admin/sejarah'));
		
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Sejarah.php */
/* Location: ./application/controllers/admin/Sejarah.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

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
		$data['s']	= $this->db->get('tb_setting')->row_array();
		$this->load->view('admin/v_setting',$data);
	}

	// Add a new item
	public function update()
	{
		$foto       = $_FILES['favicon']['name'];
		$data = [
             	'nama'			=> $this->input->post('nama'),
            	'tentang'		=> $this->input->post('tentang'),  
            	'peta'			=> $this->input->post('peta'),
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/images/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('favicon')) {
            $gambarLama = $this->input->post('fav_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/images/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('favicon', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',1);
        $this->db->update('tb_setting',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Setting !</div>');
        redirect(base_url('admin/setting'));
	}


}

/* End of file Setting.php */
/* Location: ./application/controllers/admin/Setting.php */

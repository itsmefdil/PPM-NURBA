<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sosmed extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$role = $this->session->userdata('role');
		if ($role != 'Administrator') {
			echo "<script> alert('Anda tidak mempunyai akses untuk membuka halaman ini !') ; window.location.href='../admin'; </script>";
		}
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$this->load->view('admin/v_sosmed',$data);
	}	

	//Update one item
	public function update()
	{
		$data=[
			'facebook'	=> $this->input->post('facebook'),
			'instagram'	=> $this->input->post('instagram'),
			'youtube'	=> $this->input->post('youtube'),
			'email'		=> $this->input->post('email'),
		];

		$this->db->where('id',1)->update('tb_sosmed',$data);
		redirect(base_url('admin/sosmed'));
	}

}

/* End of file Sosmed.php */
/* Location: ./application/controllers/admin/Sosmed.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['k']	= $this->db->get('tb_blogkategori');
		$this->load->view('admin/v_kategori',$data);
	}

	// Add a new item
	public function add()
	{
		$data = [
			'nama'		=> $this->input->post('nama'),
			'deskripsi'	=> $this->input->post('deskripsi')
		];

		$this->db->insert('tb_blogkategori',$data);
		$this->session->set_flashdata('sukses','Berhasil Menambahkan Kategori');
		redirect (base_url('admin/kategori'));
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id',$id)->delete('tb_blogkategori');
		$this->session->set_flashdata('sukses','Berhasil Menghapus Kategori');
		redirect (base_url('admin/kategori'));
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */

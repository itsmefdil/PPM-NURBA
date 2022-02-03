<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

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
	public function index()
	{	
		$data['p']	= $this->db->order_by('id','desc')->get('tb_user');
		$this->load->view('admin/v_pengguna',$data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('admin/v_pengguna-add');
	}

	public function store(){
		$upload_foto = $_FILES['foto'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/pengguna/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $pwd = $this->input->post('password');
        $data = [
            'nama'			=> $this->input->post('nama'),
            'email'			=> $this->input->post('email'),  
            'password'		=> md5($pwd),
            'role'			=> $this->input->post('role'),
            'foto'          => $foto
        ];
        $this->db->insert('tb_user',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Menambahkan Pengurus !</div>');
        redirect(base_url('admin/pengguna'));
	}

	//Update one item
	public function edit( $id = NULL )
	{
		$data['p'] = $this->db->where('id',$id)->get('tb_user')->row_array();
		$this->load->view('admin/v_pengguna-edit',$data);
	}

	public function update($id){
		$foto       = $_FILES['foto']['name'];
		$data = [
             'nama'			=> $this->input->post('nama'),
            'email'			=> $this->input->post('email'),  
            'role'			=> $this->input->post('role'),
          
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
        $this->db->where('id',$id);
        $this->db->update('tb_user',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Pengguna!</div>');
        redirect(base_url('admin/pengguna'));
       
	}

	public function password($id){

		$pwd = $this->input->post('password');
		$data= [
			'password' => md5($pwd),
		];

		$this->db->where('id',$id)->update('tb_user',$data);
		redirect(base_url('admin/pengguna/edit/'.$id));
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$data = $this->db->query("SELECT * FROM tb_user where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/pengguna/'.$u->foto);
        } 
        $this->db->where('id',$id)->delete('tb_user');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Pengguna !</div>');
        redirect(base_url('admin/pengguna'));
	}
}

/* End of file Pengguna.php */
/* Location: ./application/controllers/admin/Pengguna.php */

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['sosmed']			= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']			= $this->db->get('tb_kontak')->row_array();
		$data['k']				= $this->db->get('tb_blogkategori');
		$data['b']				= $this->db->order_by('id','desc')->get('tb_blog',4);
		$data['bf']				= $this->db->order_by('id','desc')->get('tb_blog',3);
		$data['s']				= $this->db->get('tb_setting')->row_array();
		$data['slider']			= $this->db->get('tb_slider');
		$data['pelajaran']		= $this->db->order_by('id','asc')->get('tb_pelajaran');
		$data['foto']			= $this->db->order_by('id','desc')->get('tb_foto')->result();
		$data['ustadz']			= $this->db->order_by('id','desc')->get('tb_ustadz')->result();
		$data['title'] 			= 'Home';
		$this->load->view('frontend/home',$data);
	}

	// Add a new item
	public function blog()
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']	= $this->db->get('tb_kontak')->row_array();
		$data['k']		= $this->db->get('tb_blogkategori');
		$data['b']		= $this->db->order_by('id','desc')->get('tb_blog',4);
		$data['bf']		= $this->db->order_by('id','desc')->get('tb_blog',3);
		$data['post']	= $this->db->order_by('id','desc')->get('tb_blog');
		$data['s']		= $this->db->get('tb_setting')->row_array();
		$data['title'] 	= 'Blog';
		$this->load->view('home/v_blog',$data);
	}

	public function kategori($kategori)
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']	= $this->db->get('tb_kontak')->row_array();
		$data['k']		= $this->db->get('tb_blogkategori');
		$data['b']		= $this->db->order_by('id','desc')->get('tb_blog',4);
		$data['bf']		= $this->db->order_by('id','desc')->get('tb_blog',3);
		$data['post']	= $this->db->where('kategori',$kategori)->order_by('id','desc')->get('tb_blog');
		$data['s']		= $this->db->get('tb_setting')->row_array();
		$data['kat']	= $kategori ; 
		$data['title'] 	= 'Kategori'.$kategori;
		$this->load->view('home/v_kategori',$data);
	}

	public function baca($slug)
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']	= $this->db->get('tb_kontak')->row_array();
		$data['k']		= $this->db->get('tb_blogkategori');
		$data['b']		= $this->db->order_by('id','desc')->get('tb_blog',4);
		$data['bf']		= $this->db->order_by('id','desc')->get('tb_blog',3);
		$data['post']	= $this->db->where('slug',$slug)->get('tb_blog')->row_array();
		$post 			= $this->db->where('slug',$slug)->get('tb_blog')->row_array();
		$data['s']		= $this->db->get('tb_setting')->row_array();
		$data['title'] 	= $post['judul'];
		$this->load->view('home/v_blog-baca',$data);
	}

	public function foto()
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']	= $this->db->get('tb_kontak')->row_array();
		$data['s']		= $this->db->get('tb_setting')->row_array();
		$data['bf']		= $this->db->get('tb_blog',3);
		$data['k']		= $this->db->get('tb_blogkategori');
		$data['foto']	= $this->db->order_by('id','desc')->get('tb_foto');
		$data['video']	= $this->db->order_by('id','desc')->get('tb_video');
		$data['title'] 	= 'Galery Foto';
		$this->load->view('home/v_foto',$data);
	}

	public function video()
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']	= $this->db->get('tb_kontak')->row_array();
		$data['s']		= $this->db->get('tb_setting')->row_array();
		$data['bf']		= $this->db->get('tb_blog',3);
		$data['k']		= $this->db->get('tb_blogkategori');
		$data['foto']	= $this->db->order_by('id','desc')->get('tb_foto');
		$data['video']	= $this->db->order_by('id','desc')->get('tb_video');
		$data['title'] 	= 'Galery Video';
		$this->load->view('home/v_video',$data);
	}

	public function tentang()
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']	= $this->db->get('tb_kontak')->row_array();
		$data['s']		= $this->db->get('tb_setting')->row_array();
		$data['bf']		= $this->db->get('tb_blog',3);
		$data['k']		= $this->db->get('tb_blogkategori');
		$data['sjr']	= $this->db->where('id',1)->get('tb_sejarah')->row_array();
		$data['title'] 	= 'Tentang Kami';
		$this->load->view('frontend/about',$data);
	}

	public function kontak()
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']	= $this->db->get('tb_kontak')->row_array();
		$data['s']		= $this->db->get('tb_setting')->row_array();
		$data['bf']		= $this->db->get('tb_blog',3);
		$data['k']		= $this->db->get('tb_blogkategori');
		$data['sjr']	= $this->db->where('id',1)->get('tb_sejarah')->row_array();
		$data['title'] 	= 'Kontak';
		$this->load->view('frontend/contact',$data);
	}

	public function pengurus()
	{
		$data['sosmed']	= $this->db->get('tb_sosmed')->row_array();
		$data['kontak']	= $this->db->get('tb_kontak')->row_array();
		$data['s']		= $this->db->get('tb_setting')->row_array();
		$data['bf']		= $this->db->get('tb_blog',3);
		$data['k']		= $this->db->get('tb_blogkategori');
		$data['p']		= $this->db->get('tb_pengurus');
		$data['title'] 	= 'Pengurus';
		$this->load->view('home/v_pengurus',$data);
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies

    }

    // List all your items
    public function index( $offset = 0 )
    {
        $data['blog'] = $this->db->order_by('id','desc')->get('tb_blog');
        $this->load->view('sitemap', $data);
        
    }

}

/* End of file Controllername.php */


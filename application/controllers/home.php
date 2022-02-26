<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// CI VER 3.10
// BS VER 3.4

class Home extends CI_Controller {

	public function index()
	{

        $data['page_title'] = 'Home Page';
        $this->load->library('mongo_db');

		$this->load->view('common/header',$data);
		$this->load->view('common/home',$data);
		$this->load->view('common/footer');
	}
}

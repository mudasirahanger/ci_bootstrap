<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CI_Controller {

	public function index()
	{

        $data['page_title'] = 'Home Page';


		$this->load->view('common/header',$data);
		
	}
}

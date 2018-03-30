<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
        
	public function login()
	{
                 redirect(site_url('dashboard'));
	}
        
        public function logout()
	{
                redirect(site_url('auth'));
	}
}

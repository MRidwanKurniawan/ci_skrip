<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilihrkpp extends CI_Controller {

	public function index()
	{
		
		$data = array();

		$data['content'] = $this->load->view('pilihrkpp',$data,true);
        $this->load->vars($data);
		$this->load->view('default_view');
		//$this->load->view('dashboard');
	}
}

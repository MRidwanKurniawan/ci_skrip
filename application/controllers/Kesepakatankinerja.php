<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesepakatankinerja extends CI_Controller {

	public function index()
	{
		
		$data = array();

		$data['content'] = $this->load->view('kesepakatankinerja',$data,true);
        $this->load->vars($data);
		$this->load->view('default_view');
		//$this->load->view('dashboard');
	}
}

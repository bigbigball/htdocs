<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opinion extends CI_Controller {

	public function index()
	{
		$this->load->view('mypc.html');
	}
	
	public function modify()
	{
		$this->load->view('mypcmf.html');
	}
}
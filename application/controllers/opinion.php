<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opinion extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('opinions');
	}
	
	public function edit()
	{
		$session_id = $this->session->userdata('session_id');
		$info = $this->user_model->get_user($session_id);
		$this->load->view('edit', array('info' => $info));
	}
	
	public function personal()
	{
		$mobile = '17600878830';
		$this->session->set_userdata(array('session_id' => $mobile));
		$info = $this->user_model->get_user($mobile);
		$this->load->view('personal', array('info' => $info));
	}
	
	public function myop()
	{
		$session_id = $this->session->userdata('session_id');
		$info = $this->user_model->get_user($session_id);
		$this->load->view('myop', array('info' => $info));
	}
	
	public function myopmf()
	{
		$session_id = $this->session->userdata('session_id');
		$info = $this->user_model->get_user($session_id);
		$this->load->view('myopmf', array('info' => $info));
	}
	
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['overwrite'] = 'true';
		$session_id = $this->session->userdata('session_id');
		$config['file_name'] = $session_id . '_photo.jpg';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('edit', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$base_dir = 'D:/xampp/htdocs';
			$dir = $data['upload_data']['full_path'];
			$output['photo'] = str_replace($base_dir , '' , $dir);
			$this->user_model->update_user($session_id, $output);	
			$info = $this->user_model->get_user($session_id);
			$this->load->view('edit', array('info' => $info));
		}
	}
	function do_edit()
	{
		$session_id = $this->session->userdata('session_id');
		$data['user_name'] = $this->input->post('name');
		$data['brief'] = $this->input->post('brief');
			
		$this->user_model->update_user($session_id, $data);
		$info = $this->user_model->get_user($session_id);
		redirect('/opinion/personal');
	}
}
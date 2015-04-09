<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opinion extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('opinion_model');
		$this->load->model('comment_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}

	public function index()
	{
		$session_id = $this->session->userdata('session_id');
		$info = $this->user_model->get_user($session_id);
		$alluser = $this->user_model->get_alluser();
		$allopinion = $this->opinion_model->get_allopinion();
		$output['info'] = $info;
		$output['alluser'] = $alluser;
		$output['allopinion'] = $allopinion;
		$this->load->view('opinions', $output);
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
	
	function do_edit()
	{
		$session_id = $this->session->userdata('session_id');
		$data['user_name'] = $this->input->post('name');
		$data['brief'] = $this->input->post('brief');
			
		$this->user_model->update_user($session_id, $data);
		redirect('/opinion/personal');
	}
	
	public function myop()
	{
		$session_id = $this->session->userdata('session_id');
		$info = $this->user_model->get_user($session_id);
		$opinion = $this->opinion_model->get_opinion($info['id']);
		$output['info'] = $info;
		$output['opinion'] = $opinion;
		$output['pictures'] = explode(',', $opinion['pictures']);
		$this->load->view('myop', $output);
	}
	
	public function myopmf()
	{
		$session_id = $this->session->userdata('session_id');
		$info = $this->user_model->get_user($session_id);
		$opinion = $this->opinion_model->get_opinion($info['id']);
		$output['info'] = $info;
		$output['opinion'] = $opinion;
		$output['pictures'] = explode(',', $opinion['pictures']);
		$this->load->view('myopmf', $output);
	}
	
	function do_modify()
	{
		$session_id = $this->session->userdata('session_id');
		$info = $this->user_model->get_user($session_id);

		$data['stars'] = $this->input->post('stars');
		$data['score'] = $this->input->post('score');
		$data['view'] = $this->input->post('web_description');

		$this->opinion_model->update_opinion($info['id'], $data);
		redirect('/opinion/myop');
	}
	
	function upload_photo()
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
		
		$info = $this->user_model->get_user($session_id);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$error['info'] = $info;
			$this->load->view('edit', $error);
		}
		else
		{
			$upload_data = $this->upload->data();
			$base_dir = 'D:/xampp/htdocs';
			$dir = $upload_data['full_path'];
			$data['photo'] = str_replace($base_dir , '' , $dir);
			$this->user_model->update_user($session_id, $data);	
			$info = $this->user_model->get_user($session_id);
			$this->load->view('edit', array('info' => $info));
		}
	}
	
	function upload_prodpic()
	{
		$config['upload_path'] = "./uploads/product/";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$session_id = $this->session->userdata('session_id');
		$info = $this->user_model->get_user($session_id);
		$data = $this->opinion_model->get_opinion($info['id']);
		$user_id = $info['id'];

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$error['info'] = $info;
			$error['pictures'] = explode(',', $data['pictures']);
			$this->load->view('myopmf', $error);
		}
		else
		{
			$upload_data = $this->upload->data();
			$base_dir = 'D:/xampp/htdocs';
			$dir = $upload_data['full_path'];
			$data['pictures'] = str_replace($base_dir , '' , $dir);
			$opinion = $this->opinion_model->get_opinion($user_id);
			if (!$opinion) {
				$data['user_id'] = $user_id;
				$ret = $this->opinion_model->insert_opinion($data);
			} else {
				$pictures = explode(',', $opinion['pictures']);
				if (count($pictures) > 5 || empty($pictures[0])){
					$pictures[0] = $data['pictures'];
				} else {
					$pictures[] = $data['pictures'];
				}
				$data['pictures'] = implode(',', $pictures);
				$ret = $this->opinion_model->update_opinion($user_id, $data);
			}
			$output['info'] = $info;
			$output['pictures'] = explode(',', $data['pictures']);
			$this->load->view('myopmf', $output);
		}
	}
}
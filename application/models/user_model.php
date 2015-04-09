<?php
class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_user($mobile)
	{
		$this->db->select('*');
		$query = $this->db->get_where('user', array('mobile' => $mobile));
		return $query->row_array();
	}
	
	public function insert_user($data)
	{
		return $this->db->insert('user', $data);
	}
	
	public function update_user($mobile, $data)
	{
		$this->db->where('mobile', $mobile);
		return $this->db->update('user', $data);
	}
	
	public function get_alluser()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('user');
		return $query->result_array();
	}
}
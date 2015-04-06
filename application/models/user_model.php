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
	
	public function insert_user($mobile)
	{
		return $this->db->insert('user', array('mobile' => $mobile));
	}
	
	public function update_user($mobile, $data)
	{
		$this->db->where('mobile', $mobile);
		return $this->db->update('user', $data);
	}
}
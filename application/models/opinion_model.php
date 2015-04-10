<?php
class Opinion_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_opinion($data)
	{
		$this->db->select('*');
		$query = $this->db->get_where('opinion', $data);
		return $query->row_array();
	}
	
	public function insert_opinion($data)
	{
		return $this->db->insert('opinion', $data);
	}
	
	public function update_opinion($user_id, $data)
	{
		$this->db->where('user_id', $user_id);
		return $this->db->update('opinion', $data);
	}
	
	public function get_allopinion()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('opinion', 'user.id = opinion.user_id');
		$this->db->order_by('update_time', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}
}
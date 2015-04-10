<?php
class Comment_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function insert_comment($data)
	{
		return $this->db->insert('comment', $data);
	}
	
	public function get_count($data)
	{
		$this->db->select('count(*) as num');
		$query = $this->db->get_where('comment', $data);
		return $query->row_array();
	}

	public function get_allcomment($data = array())
	{
		$this->db->select('*');
		$this->db->from('comment');
		$this->db->join('user', 'user.id = comment.owner_id');
		if ($data) {
			$this->db->where($data);
		}
		$this->db->order_by('create_time', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}
}
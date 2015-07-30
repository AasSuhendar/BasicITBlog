<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_post extends CI_Model {

	public function getAllPost()
	{
		$query=$this->db->get('post');
		return $query;
	}

	public function savePost($data)
	{
		$this->db->insert('post', $data);
		if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
	}

	public function updatePost($id,$data)
	{
		$this->db->where('id_posting', $id);
		$this->db->update('post', $data);
		if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
	}

	public function deletePost($id)
	{
		$this->db->where('id_posting', $id);
        $this->db->delete('post');
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
	}

}

/* End of file m_post.php */
/* Location: ./application/models/m_post.php */
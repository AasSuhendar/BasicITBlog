<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	

	public function checkLogin()
	{
        $password = $this->input->post('password');
        $username = $this->input->post('username');
		$this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
	}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */
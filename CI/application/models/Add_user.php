<?php

class Add_user extends CI_Model
{

	public function add($data)
	{
		$this->load->database();

		//Insertion dans la bdd
		$this->db->set($data);
		$count = $this->db->insert('users', $data);
		if ($count > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function get()
	{
		//Récupère les infos dans la bdd
		$this->load->database();
		$data = $this->db->get('users');
		return $data->result();
	}
}
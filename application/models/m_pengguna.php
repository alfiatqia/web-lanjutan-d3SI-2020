<?php

/**
 * 
 */
class m_pengguna extends CI_Model
{

	private $table = 'pengguna';
	
	public function cek_login($input_username, $input_password)
	{
		$this->db->where('username', $input_username);
	 	$this->db->where('password', $input_password);
		return $this->db->get($this->table);
	}

	public function getAll()
	{
		return $this->db->get($this->table)
					->result();
	}
	public function create($object)
	{
		return $this->db->insert($this->tabel, $object);
	}

	public function delete($input_username)
	{
		$this->db->delete($this->tabel, ['username' => $input_username]);
	}

	public function getWhere($input_username)
	{
		//select *form mahasiswa where nim = input_NIM
		return $this->db->get_where($this->tabel, ['username' => $input_username])->row_object();
	}


}
	

<?php

/**
 * 
 */
class m_mahasiswa extends CI_model
{
	
	
	private $tabel = 'mahasiswa';

	public function getAll()
	{
		return $this->db->get($this->tabel)
					->result();
	}
	public function create($object)
	{
		return $this->db->insert($this->tabel, $object);
	}

	public function delete($input_NIM)
	{
		$this->db->delete($this->tabel, ['NIM' => $input_NIM]);
	}

	public function getWhere($input_NIM)
	{
		//select *form mahasiswa where nim = input_NIM
		return $this->db->get_where($this->tabel, ['NIM' => $input_NIM])->row_object();
	}

	function update_data($where,$data,$tabel){
		$this->db->where($where);
		$this->db->update($tabel,$data);

	}
}
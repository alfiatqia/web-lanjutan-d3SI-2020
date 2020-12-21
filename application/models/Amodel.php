<?php

/**
 * 
 */
class Amodel extends CI_model
{
	
	
	private $tabel = 'tabel_a';

	public function getAll()
	{
		return $this->db->get($this->tabel)
					->result();
	}
	public function create($object)
	{
		return $this->db->insert($this->tabel, $object);
	}
}
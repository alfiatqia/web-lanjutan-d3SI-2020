<?php 

/**
  * 
  */
 class mahasiswa extends CI_Controller
 {

 	
 	public function index ()
 	{

 		$this->load->view('mahasiswa/V_index'); 
 	}

 	public function jurusan ()
 	{
 		echo 'd3 sistem informasi';
 	}
 }
  ?>
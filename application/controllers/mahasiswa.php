<?php 

/**
  * 
  */
 class mahasiswa extends CI_Controller
 {

 	
 	public function index ($url_nim, $url_jur)
 	{
 		# code...
 		$data ['nama']= 'Alfi atqia';
 		$data ['umur']= '21';
 		$data ['nim']= $url_nim;
 		$data ['jurusan']= $url_jur;


 		$this->load->view('mahasiswa/V_index',$data); 
 	}

 	public function jurusan ()
 	{
 		echo 'd3 sistem informasi';
 	}
 }
  ?>
<?php

/**
  * 
  */
 class Acontroller extends CI_Controller
 {

 	public function __construct()
 	{
 		parent::__construct();

 		$this->load->model('Amodel');
 	}

 	
 	public function index ($url_jenis = '', $url_stok = '')
 	{
 		$data['id_0002'] = '1901050002';
 		$data['merek'] = 'sidu';
 		$data['jenis'] = $url_jenis;
 		$data['stok'] =$url_stok;

 		$data['tbl_tabel_a'] = $this->Amodel->getAll();
 		$this->load->view('tabel_a/v_tabelA', $data);
 	}


 	public function tambah ()
 	{

 	$this->load->view('tabel_a/V_tambahh');
	}


 	public function simpan_data()
 	
 	{

 	$data = [
 		'id_0002' => $this->input->post('id_0002'),
 		'merek' => $this->input->post('merek'),
 		'jenis' => $this->input->post('jenis'),
 		'stok' => $this->input->post('stok'),

 	];

 	$this->Amodel->create($data);
 	redirect('Acontroller/index','refresh');
 	print_r($data);

 }

 }

?>
<?php

/**
  * 
  */
 class mahasiswa extends CI_Controller
 {

 	public function __construct()
 	{
 		parent::__construct();

 		$this->load->model('m_mahasiswa');

        if (!$this->session->userdata('nama_pengguna')){
            redirect('login/index');
        }
 	}

 	
 	public function index ($url_nim = '', $url_jur = '')
 	{
 		$data['nama'] = 'alfiy';
 		$data['umur'] = '21';
 		$data['nim'] = $url_nim;
 		$data['jurusan'] =$url_jur;

 		$data['tbl_mahasiswa'] = $this->m_mahasiswa->getAll();
    
 		$this->load->view('template/header');
        $this->load->view('mahasiswa/v_index', $data);
    }    

 	public function jurusan ()
 	{
 		echo 'd3 sistem informasi';
 	}

 	public function tambah ()
 	{

    $this->load->view('template/header');
 	$this->load->view('mahasiswa/V_tambah');
	}


 	public function simpan_data()
 	
 	{

 	$data = [
 		'NIM' => $this->input->post('NIM'),
 		'NAMA' => $this->input->post('NAMA'),
 		'ALAMAT' => $this->input->post('ALAMAT'),

 	];

 	$this->m_mahasiswa->create($data);
 	redirect('mahasiswa/index','refresh');

 	}

 	public function hapus($input_NIM)
 	{
 		$this->m_mahasiswa->delete($input_NIM);
 		redirect('mahasiswa/index','refresh');
 	}

 	public function edit($input_NIM)
 	{

 		//ambil data dari niminput 
 		$data['data_NIM'] = $this->m_mahasiswa->getWhere($input_NIM);
 		return $this->load->view('mahasiswa/v_edit', $data);
 	}

    public function update ()
    {
        $NIM = $this->input->post('NIM');
        $NAMA = $this->input->post('NAMA');
        $ALAMAT =$this->input->post('ALAMAT');

    $data  = array(
        'NIM' => $NIM,
        'NAMA' => $NAMA,
        'ALAMAT' => $ALAMAT,
        );

    $where = array(
        'NIM' => $NIM 
         );

    $this->m_mahasiswa->update($where,$data, 'mahasiswa');
    redirect('mahasiswa/index');
    }
 }

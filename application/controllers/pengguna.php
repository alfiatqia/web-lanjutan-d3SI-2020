<?php

/**
  */
 class pengguna extends CI_Controller
 {

 	public function __construct()
 	{
 		parent::__construct();

 		$this->load->model('m_pengguna');

        if (!$this->session->userdata('nama_pengguna')){
            redirect('login/index');
        }
 	}

 	
 	public function index ()
 	{

 		$data['tbl_pengguna'] = $this->m_pengguna->getAll();
    
 		$this->load->view('template/header2');
        $data['tbl_pengguna'] = $this->db->get('pengguna')->result();
        $this->load->view('pengguna/v_pengguna', $data);

    }    

 	public function jurusan ()
 	{
 		echo 'd3 sistem informasi';
 	}

 	public function tambah ()
 	{

    $this->load->view('template/header2');
 	$this->load->view('pengguna/v_tambah');
	}


 	public function simpan_data()
 	
 	{

 	$data = [
 		'username' => $this->input->post('username'),
 		'password' => $this->input->post('password'),
 		'nama_lengkap' => $this->input->post('nama_lengkap'),
        'hak_akses' => $this->input->post('hak_akses'),


 	];

 	$this->m_mahasiswa->create($data);
 	redirect('pengguna/index','refresh');

 	}

 	public function hapus($input_username)
 	{
 		$this->m_pengguna->delete($input_username);
 		redirect('pengguna/index','refresh');
 	}

 	public function edit($input_username)
 	{

 		$this->load->view('template/header2');
 		$data['data_username'] = $this->m_pengguna->getWhere($input_username);
 		return $this->load->view('pengguna/v_edit', $data);
 	}

    public function update ()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $hak_akses = $this->input->post('hak_akses');


    $data  = array(
        'username' => $username,
        'password' => $password,
        'nama_lengkap' => $nama_lengkap,
        'hak_akses'=> $hak_akses
        );

    $where = array(
        'username' => $username 
         );

    $this->m_pengguna->update($where,$data, 'pengguna');
    redirect('pengguna/index');
    }
 }

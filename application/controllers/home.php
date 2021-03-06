<?php
	
class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
			// menampilkan barang
		$data['barang'] = $this->model_barang->tampil_data()->result();
		if ($this->input->post('keyword')) {
		$data['barang'] = $this->model_barang->cariDataBarang();
		}
        $this->load->view('templates/header',$data);
        $this->load->view('templates/menubar',$data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer',$data);
   
	}

	public function indexUser()
	{
			// menampilkan barang
		$data['barang'] = $this->model_barang->tampil_data()->result();
		if ($this->input->post('keyword')) {
		$data['barang'] = $this->model_barang->cariDataBarang();
		}
        $this->load->view('templates/header',$data);
        $this->load->view('templates/menubarUser',$data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer',$data);
   
	}

}
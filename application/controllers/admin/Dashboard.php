<?php

class Dashboard extends CI_Controller {

	public function index(){


		    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
			// menampilkan barang dengan mengambil data di modelbarang yang ada di folder model
		    $data['barang'] = $this->model_barang->tampil_data()->result();
		
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_menubar', $data);
			$this->load->view('admin/dashboard', $data);
			$this->load->view('templates/admin_footer');
	}

}



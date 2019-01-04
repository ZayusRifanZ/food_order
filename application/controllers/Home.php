<?php  

class Home extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Halaman Home';
		
		$this->load->view('hd_ft/header', $data);
		$this->load->view('home/index');
		$this->load->view('hd_ft/footer');
	}
}

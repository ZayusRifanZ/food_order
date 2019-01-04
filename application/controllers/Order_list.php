<?php 
class order_list extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Order_list_model');
		$this->load->library('form_validation'); 
	}
	
	public function index()
	{
		$data['judul'] = 'Order-List';
		$data['order_list'] = $this->Order_list_model->getAllOrder_list();
		$this->load->view('hd_ft/header', $data);
		$this->load->view('order_list/index', $data);
		$this->load->view('hd_ft/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Pesanan';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('meja', 'Meja', 'required|numeric');
		
		if( $this->form_validation->run() == FALSE){
			$this->load->view('hd_ft/header', $data);
			$this->load->view('order_list/tambah');
			$this->load->view('hd_ft/footer');
		}else {
			$this->Order_list_model->tambahDataPesanan();
			redirect('order_list');
		}
		
	}
}
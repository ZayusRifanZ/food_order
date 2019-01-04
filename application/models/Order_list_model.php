<?php 
class Order_list_model extends CI_model
{
	
	public function getAllOrder_list()
	{
		return $query = $this->db->get('food_order')->result_array();
	}

	public function tambahDataPesanan()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"meja" => $this->input->post('meja', true),
			"makan" => $this->input->post('makan', true),
			"minum" => $this->input->post('minum', true),
		];
		$this->db->insert('food_order', $data);
	}
}
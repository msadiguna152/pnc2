<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlaporan extends CI_Model {

	public function get_data_konsultasi()
	{
		$status = $this->input->post('status');
		if ($status=="Semua") {
			$query = $this->db->select('*')->from('tbl_konsultasi')
			->order_by('id_konsultasi','DESC')->get();
		} else {
			$query = $this->db->select('*')->from('tbl_konsultasi')
			->where('tbl_konsultasi.status',$status)
			->order_by('id_konsultasi','DESC')->get();
		}
		return $query;
	}
}
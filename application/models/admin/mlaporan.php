<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlaporan extends CI_Model {

	public function get_data_konsultasi()
	{
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		$status = $this->input->post('status');
		if ($status=="Semua") {
			$query = $this->db->select('*')->from('tbl_konsultasi')
			->where('DATE(tbl_konsultasi.waktu_pengajuan)>=',$dari)
			->where('DATE(tbl_konsultasi.waktu_pengajuan)<=',$sampai)
			->order_by('id_konsultasi','DESC')->get();
		} else {
			$query = $this->db->select('*')->from('tbl_konsultasi')
			->where('DATE(tbl_konsultasi.waktu_pengajuan)>=',$dari)
			->where('DATE(tbl_konsultasi.waktu_pengajuan)<=',$sampai)
			->where('tbl_konsultasi.status',$status)
			->order_by('id_konsultasi','DESC')->get();
		}
		return $query;
	}
}
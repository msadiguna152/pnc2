<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkonsultasi extends CI_Model {
	public function get()
	{
		$query = $this->db->select('*')->from('tbl_konsultasi')->order_by('tbl_konsultasi.id_konsultasi','DESC')->get();
		return $query;
	}
	public function get_edit($id)
	{
		return $this->db->query("SELECT * from tbl_konsultasi where id_konsultasi='$id'")->row_array();
	}

	public function update()
	{
		if ($this->input->post('tanggal')!=NULL AND $this->input->post('alasan')==NULL) {
			$data = array(
			'nama_pemohon'=> $this->input->post('nama_pemohon'),
			'no_pemohon'=> $this->input->post('no_pemohon'),
			'alamat_pemohon'=> $this->input->post('alamat_pemohon'),
			'masalah'=> $this->input->post('masalah'),

			'alasan'=> NULL,
			'tanggal'=> $this->input->post('tanggal'),
			'jam'=> $this->input->post('jam'),
			'link_konsultasi'=> $this->input->post('link_konsultasi'),
			'status'=> $this->input->post('status'),
		);
		$where = array('id_konsultasi' => $this->input->post('id_konsultasi'));
		$this->db->update('tbl_konsultasi',$data,$where);
		};

		if ($this->input->post('alasan')!=NULL AND $this->input->post('tanggal')==NULL ) {
			$data = array(
			'nama_pemohon'=> $this->input->post('nama_pemohon'),
			'no_pemohon'=> $this->input->post('no_pemohon'),
			'alamat_pemohon'=> $this->input->post('alamat_pemohon'),
			'masalah'=> $this->input->post('masalah'),

			'alasan'=> $this->input->post('alasan'),
			'tanggal'=> NULL,
			'jam'=> NULL,
			'link_konsultasi'=> NULL,
			'status'=> $this->input->post('status'),
		);
		$where = array('id_konsultasi' => $this->input->post('id_konsultasi'));
		$this->db->update('tbl_konsultasi',$data,$where);
		};

		if ($this->input->post('status')=="0") {
			$data = array(
			'nama_pemohon'=> $this->input->post('nama_pemohon'),
			'no_pemohon'=> $this->input->post('no_pemohon'),
			'alamat_pemohon'=> $this->input->post('alamat_pemohon'),
			'masalah'=> $this->input->post('masalah'),

			'alasan'=> NULL,
			'tanggal'=> NULL,
			'jam'=> NULL,
			'link_konsultasi'=> NULL,
			'status'=> "0",
		);
		$where = array('id_konsultasi' => $this->input->post('id_konsultasi'));
		$this->db->update('tbl_konsultasi',$data,$where);
		};
	}

}
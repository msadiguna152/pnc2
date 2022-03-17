<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
public function __construct() {
		parent::__construct();
		$this->load->model('admin/mlaporan');
		$this->session->set_userdata('menu', 'Cetak Laporan');


		if($this->session->userdata('level') != "Admin"){
			echo '<script language="javascript">alert("Tidak Dapat Diakses!"); document.location="'.site_url('login').'"</script>';
		}
	}
	public function hal_konsultasi()
	{
		$this->session->set_userdata('submenu', 'Cetak Laporan Konsultasi');

		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/laporan/data_konsultasi');
		$this->load->view('admin/tema/footer');
	}

	public function cetak_lap_konsultasi()
	{
		$data = array();
		$data['laporan'] = $this->mlaporan->get_data_konsultasi();
		$this->load->view('admin/laporan/cetak_lap_konsultasi',$data);

		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->load_html($html);
		//$this->dompdf->set_paper('legal', 'potrait');
		$this->dompdf->set_paper('legal', 'landscape');

		$this->dompdf->render();
		$this->dompdf->stream("Laporan Data Konsultasi.pdf", array("Attachment"=>0));
	}
}
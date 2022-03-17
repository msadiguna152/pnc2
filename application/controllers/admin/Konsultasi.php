<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konsultasi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->session->set_userdata('menu', 'Konsultasi');
		$this->session->set_userdata('submenu', 'Konsultasi');
		$this->load->model('admin/Mkonsultasi');
		if($this->session->userdata('level') != "Admin"){
			echo '<script language="javascript">alert("Tidak Dapat Diakses!"); document.location="'.site_url('Login').'"</script>';
		}
	}
	public function index(){
		$data['konsultasi'] = $this->Mkonsultasi->get();
		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/konsultasi/index',$data);
		$this->load->view('admin/tema/footer');
	}
	public function ubah($id){
		$data['data'] = $this->Mkonsultasi->get_edit($id);

		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/konsultasi/ubah',$data);
		$this->load->view('admin/tema/footer');
	}

	public function rincian($id){
		$data['data'] = $this->Mkonsultasi->get_edit($id);

		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/konsultasi/rincian',$data);
		$this->load->view('admin/tema/footer');
	}

	public function update_proses(){
		$this->Mkonsultasi->update();
		$id = $this->input->post('id_konsultasi');
		echo '<script language="javascript">alert("Berhasil Menyimpan Data Konfirmasi!"); document.location="'.site_url('admin/Konsultasi/rincian/').$id.'"';
		echo '</script>';
	}

	public function delete($id){
		$this->Mkonsultasi->delete($id);
		echo '<script language="javascript">alert("Berhasil Di Hapus!"); document.location="'.site_url('admin/Konsultasi').'"';
		echo '</script>';
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
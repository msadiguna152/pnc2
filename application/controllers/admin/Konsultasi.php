<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Konsultasi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->session->set_userdata('menu', 'Konsultasi');
		$this->session->set_userdata('submenu', 'Konsultasi');
		$this->load->model('admin/mkonsultasi');
		if($this->session->userdata('level') != "Admin"){
			echo '<script language="javascript">alert("Tidak Dapat Diakses!"); document.location="'.site_url('login').'"</script>';
		}
	}
	public function index(){
		$data['konsultasi'] = $this->mkonsultasi->get();
		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/konsultasi/index',$data);
		$this->load->view('admin/tema/footer');
	}
	public function ubah($id){
		$data['data'] = $this->mkonsultasi->get_edit($id);

		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/konsultasi/ubah',$data);
		$this->load->view('admin/tema/footer');
	}

	public function rincian($id){
		$data['data'] = $this->mkonsultasi->get_edit($id);

		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/konsultasi/rincian',$data);
		$this->load->view('admin/tema/footer');
	}

	public function update_proses(){
		$this->mkonsultasi->update();
		$id = $this->input->post('id_konsultasi');
		echo '<script language="javascript">alert("Berhasil Menyimpan Data Konfirmasi!"); document.location="'.site_url('admin/konsultasi/rincian/').$id.'"';
		echo '</script>';
	}

	public function delete($id){
		$this->mkonsultasi->delete($id);
		echo '<script language="javascript">alert("Berhasil Di Hapus!"); document.location="'.site_url('admin/konsultasi').'"';
		echo '</script>';
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
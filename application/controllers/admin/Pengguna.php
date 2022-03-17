<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->session->set_userdata('menu', 'Pengguna');
		$this->load->model('admin/mpengguna');
		if($this->session->userdata('level') != "Admin"){
			echo '<script language="javascript">alert("Tidak Dapat Diakses!"); document.location="'.site_url('login').'"</script>';
		}
	}
	public function index(){
		$data['pengguna'] = $this->mpengguna->get();
		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/pengguna/index',$data);
		$this->load->view('admin/tema/footer');
	}
	public function insert(){
		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/pengguna/tambah');
		$this->load->view('admin/tema/footer');
	}
	public function insert_proses(){
		$this->mpengguna->insert();
		echo '<script language="javascript">alert("Berhasil Di Simpan!"); document.location="'.site_url('admin/pengguna').'"';
		echo '</script>';
	}
	public function update($id){
		$data['data'] = $this->mpengguna->get_edit($id);
		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/pengguna/ubah',$data);
		$this->load->view('admin/tema/footer');
	}
	public function update_proses(){
		$this->mpengguna->update();
		echo '<script language="javascript">alert("Berhasil Di Ubah!"); document.location="'.site_url('admin/pengguna').'"';
		echo '</script>';
	}
	public function delete($id){
		$this->mpengguna->delete($id);
		echo '<script language="javascript">alert("Berhasil Di Hapus!"); document.location="'.site_url('admin/pengguna').'"';
		echo '</script>';
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
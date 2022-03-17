<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {
public function __construct() {
		parent::__construct();
		$this->session->set_userdata('menu', 'Beranda');
		$this->session->set_userdata('submenu', 'Beranda');
		$this->load->model('admin/mberanda');

		if($this->session->userdata('level') != "Admin"){
			echo '<script language="javascript">alert("Tidak Dapat Diakses!"); document.location="'.site_url('login').'"</script>';
		}
	}
	public function index()
	{
		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/beranda/index');
		$this->load->view('admin/tema/footer');
	}

	public function index2()
	{
		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/beranda/index');
		$this->load->view('admin/tema/footer');
	}
	public function profil()
	{
		$id = $this->session->userdata('id_pengguna');
		$data['pengguna'] = $this->mberanda->get_edit($id);
		$this->load->view('admin/tema/head');
		$this->load->view('admin/tema/menu');
		$this->load->view('admin/beranda/profil',$data);
		$this->load->view('admin/tema/footer');
	}
	public function ubah_proses()
	{
		$this->mberanda->update();
		echo '<script language="javascript">alert("Data Berhasil Di Simpan!"); document.location="'.site_url('admin/beranda/profil').'"';
		echo '</script>';
	}
}
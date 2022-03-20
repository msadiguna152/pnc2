<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('mlogin');
	}

	public function index() {
		$this->session->sess_destroy();
		$this->load->view('head');
		$this->load->view('hal_awal');
		$this->load->view('foot');
	}

	public function login() {
		$this->session->sess_destroy();
		$this->load->view('head');
		$this->load->view('hal_login');
		$this->load->view('foot');
	}

	public function buat_janji() {
		$this->session->sess_destroy();
		$this->load->view('head');
		$this->load->view('buat_janji');
		$this->load->view('foot');
	}

	public function kontak() {
		$this->session->sess_destroy();
		$this->load->view('head');
		$this->load->view('hal_kontak');
		$this->load->view('foot');
	}

	public function insert_janji(){
		$this->mlogin->insert();
		echo '<script language="javascript">alert("Berhasil Membuat Janji Konsultasi, Silahkan Tunggu Konfirmasi Dari Admin"); document.location="'.site_url('login').'"';
		echo '</script>';
	}

	public function proses_login(){
		$cek_data = $this->mlogin->cek_data($this->input->post('username'),$this->input->post('password'));
		if($cek_data->num_rows() == 1) {
			foreach($cek_data->result() as $data){
				$data_session['password'] = $data->password;
				$data_session['username'] = $data->username;
				$data_session['foto_pengguna'] = $data->foto_pengguna;
				$data_session['nama_pengguna'] = $data->nama_pengguna;
				$data_session['id_pengguna'] = $data->id_pengguna;
				$data_session['level'] = $data->level;
				$this->session->set_userdata($data_session);
			}
			if($this->session->userdata('level') == 'Admin') {
				$this->session->set_flashdata('hasil','
					<section class="content-header">
					<div class="alert alert-success fade in alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-check"></i> Selamat Datang '.$data->nama_pengguna.'!</h4>
		                Anda Login Sebagai Admin.
		             </div>
		            </section>
              '); 
				echo '<script language="javascript">document.location="'.site_url('admin/beranda').'";</script>';
			}
			elseif($this->session->userdata('level') != 'Admin')
			{
				echo '<script language="javascript">alert("Username dan Password Salah!"); document.location="'.site_url('login').'";</script>';
			}
		}
		else {
			echo '<script language="javascript">alert("Username dan Password Salah!"); document.location="'.site_url('login').'";</script>';
		}

	}
	public function logout() {
		$this->session->sess_destroy();
		echo '<script language="javascript">document.location="'.site_url('login').'"</script>';
	}
}
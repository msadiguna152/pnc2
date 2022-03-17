<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mberanda extends CI_Model {
// untuk memanggil data sesuai dengan id yang dipilih
public function get_edit($id)
	{
		$query = $this->db->select('*')->from('tbl_pengguna')->where('id_pengguna',$id)->get();
		return $query;
	}
// untuk memperbaharui data didalam tabel database
public function update()
	{
		$config['upload_path'] = 'profil/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 3000;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto_pengguna'))
		{
			$id_pengguna = $this->input->post('id_pengguna');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = array(
				'nama_pengguna'=> $nama_pengguna,
				'username'=> $username,
				'password'=> $password,
			);
			$where = array('id_pengguna' => $id_pengguna);
			$this->db->update('tbl_pengguna',$data,$where );
		} else {
			$id_pengguna = $this->input->post('id_pengguna');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$file = $this->upload->data();
			$foto_pengguna = $file['file_name'];
			$data = array(
				'nama_pengguna'=> $nama_pengguna,
				'username'=> $username,
				'password'=> $password,
				'foto_pengguna'=> $foto_pengguna,
			);
			$where = array('id_pengguna' => $id_pengguna);
			$this->db->update('tbl_pengguna',$data,$where );
		}
	}

}
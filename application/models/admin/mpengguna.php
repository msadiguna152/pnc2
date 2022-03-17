<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mpengguna extends CI_Model {
	public function insert()
	{
		$config['upload_path'] = 'profil/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_pengguna');
        $file = $this->upload->data();
        $foto_pengguna = $file['file_name'];

		$nama_pengguna = $this->input->post('nama_pengguna');
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
	    $level = $this->input->post('level');

		$data = array(
			'nama_pengguna'=> $nama_pengguna,
			'username'=> $username,
			'password'=> md5($password),
			'level'=> $level,
			'foto_pengguna'=> $foto_pengguna,

		);
		$this->db->insert('tbl_pengguna',$data);
	}
	public function get()
	{
		$query = $this->db->select('*')->from('tbl_pengguna')->order_by('id_pengguna','DESC')->get();
		return $query;
	}
	public function get_edit($id)
	{
		return $this->db->query("SELECT * from tbl_pengguna where id_pengguna='$id'")->row_array();
	}
	public function update()
	{
		$config['upload_path'] = 'profil/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 3000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_pengguna');
        $file = $this->upload->data();
        $foto_pengguna = $file['file_name'];

		$nama_pengguna = $this->input->post('nama_pengguna');
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
	    $level = $this->input->post('level');

		$data = array(
			'nama_pengguna'=> $nama_pengguna,
			'username'=> $username,
			'password'=> md5($password),
			'level'=> $level,
			'foto_pengguna'=> $foto_pengguna,
		);
		$where = array('id_pengguna' => $this->input->post('id_pengguna'));
		$this->db->update('tbl_pengguna',$data,$where);
	}

	public function delete($id)
	{
		$where = array('id_pengguna' => $id);
		$query = $this->db->delete('tbl_pengguna',$where);
		return $query;
	}
}
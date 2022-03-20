<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model{
	function cek_data($username,$password){
		$query = $this->db->select('*')->from('tbl_pengguna')->where('username',$username)->where('password',md5($password))->get();
		return $query;
	}

	public function insert()
	{
		$nohp = $this->input->post('no_pemohon');
     	// cek apakah no hp mengandung karakter + dan 0-9
		if(!preg_match('/[^+0-9]/',trim($nohp))){
        	// cek apakah no hp karakter 1-3 adalah +62
			if(substr(trim($nohp), 0, 3)=='+62'){
				$hp = trim($nohp);
			}
         	// cek apakah no hp karakter 1 adalah 0
			elseif(substr(trim($nohp), 0, 1)=='0'){
				$hp = '+62'.substr(trim($nohp), 1);
			}
		} else {
			$hp = $nohp;
		}


		$data = array(
			'nama_pemohon'=> $this->input->post('nama_pemohon'),
			'no_pemohon'=> $hp,
			'alamat_pemohon'=> $this->input->post('alamat_pemohon'),
			'masalah'=> $this->input->post('masalah'),
			'status'=> "0",

		);
		$this->db->insert('tbl_konsultasi',$data);

	}

	public function buat_kode(){
		$this->db->select('RIGHT(tbl_pendaftar.kode_pendaftar,4) as kode', FALSE);
		$this->db->order_by('id_pendaftar','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('tbl_pendaftar');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		  	$data = $query->row();      
		  	$kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		  	$kode = 1;    
		  }

		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "PPDB-2022-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;
		}
}
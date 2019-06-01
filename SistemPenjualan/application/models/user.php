<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class user extends CI_Model
{
	private $table="akun";

	public function getall(){//mengambil data produk dengan id produk
		return $this->db->get($this->table)->result();
	}

	public function getuser($where){//mengambil data produk dengan id produk
		return $this->db->get_where($this->table,$where)->num_rows();
		//dalam native seperti SELECT * FROM produk WHERE id_produk=$id;
	}
	public function multiacount($status){
		return $this->db->get_where($this->table, ["status" => $status])->result();
	}
}
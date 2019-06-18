<?php defined('BASEPATH') OR exit('No direct script access allowed');

class mProduk extends CI_Model{

	private $table="daftar_produk";

	function insert($data){
		return $this->db->insert($this->table,$data);
	}
	function tampilproduk(){
		return $this->db->get($this->table);
	}
	function tampilprodukId($where){
		return $this->db->get_where($this->table,$where);
	}
}
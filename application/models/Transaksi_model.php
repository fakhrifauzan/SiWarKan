<?php
	class Transaksi_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_detail_transaksi() {
		$this->db->select('*');
		$this->db->from('wm_transaksi_detail as td');
		$this->db->join('wm_barang as b','b.id_barang = td.id_barang');
		$this->db->where('td.status','0');
		$data = $this->db->get();
		return $data->result();
	}

	function simpan_barang($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function cek_harga($id_barang){
		$this->db->select('harga_barang');
		$this->db->from('wm_barang');
		$this->db->where('id_barang',$id_barang);
		$query = $this->db->get();
		$data = $query->row_array();
		return $data['harga_barang'];
	}

	function delete_item($id_transaksi_detail) {
		$this->db->where('id_transaksi_detail', $id_transaksi_detail);
		$this->db->delete('wm_transaksi_detail');
	}

	function selesai_belanja($data) {
		$this->db->insert('wm_transaksi',$data);
		$id_transaksi = $this->db->insert_id();
		$data = array(
			'id_transaksi' => $id_transaksi,
			'status' => '1',
		);
		$this->db->where('status', '0');
		$this->db->update('wm_transaksi_detail', $data);
	}

}
?>

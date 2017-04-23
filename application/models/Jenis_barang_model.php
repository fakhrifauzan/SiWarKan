<?php
	class Jenis_barang_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_jenis() {
		$this->db->select('*');
		$this->db->from('wm_barang_jenis');
		$data = $this->db->get();
		return $data->result();
	}

	function add_jenis($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function delete_jenis($id_barang_jenis) {
		$this->db->where('id_barang_jenis', $id_barang_jenis);
		$this->db->delete('wm_barang_jenis');
	}

	function edit_jenis($id_barang_jenis) {
		$this->db->where('id_barang_jenis',$id_barang_jenis);
		$query = $this->db->get('wm_barang_jenis');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$query->free_result();
		} else {
			$data = NULL;
		}
		return $data;
	}

	function update_jenis($table,$data,$id_barang_jenis) {
		$this->db->where('id_barang_jenis',$id_barang_jenis);
		$this->db->update($table,$data);
	}
}
?>

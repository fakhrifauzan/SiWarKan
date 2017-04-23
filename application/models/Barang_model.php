<?php
	class Barang_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_barang() {
		$this->db->select('*');
		$this->db->from('wm_barang as b');
		$this->db->join('wm_barang_jenis as j','j.id_barang_jenis = b.id_barang_jenis');
		$data = $this->db->get();
		return $data->result();
	}

	function add_barang($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function delete_barang($id_barang) {
		$this->db->where('id_barang', $id_barang);
		$this->db->delete('wm_barang');
	}

	function edit_barang($id_barang) {
		$this->db->where('id_barang',$id_barang);
		$query = $this->db->get('wm_barang');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$query->free_result();
		} else {
			$data = NULL;
		}
		return $data;
	}

	function update_barang($table,$data,$id_barang) {
		$this->db->where('id_barang',$id_barang);
		$this->db->update($table,$data);
	}
}
?>

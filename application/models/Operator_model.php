<?php
	class Operator_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function view_operator() {
		$data = $this->db->get('wm_operator');
		return $data->result();
	}

	function add_operator($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function delete_operator($id_operator) {
		$this->db->where('id_operator',$id_operator);
		$this->db->delete('wm_operator');
	}

	function edit_operator($id_operator) {
		$this->db->where('id_operator',$id_operator);
		$query = $this->db->get('wm_operator');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$query->free_result();
		} else {
			$data = NULL;
		}
		return $data;
	}

	function update_operator($table,$data,$id_operator) {
		$this->db->where('id_operator',$id_operator);
		$this->db->update($table,$data);
	}
}

?>

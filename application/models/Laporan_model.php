<?php
	class Laporan_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function view_laporan() {
		$query = "SELECT id_transaksi, t.tanggal_transaksi tanggal, o.nama_operator nama, SUM(d.qty_barang*d.harga) total
				FROM wm_transaksi as t
				JOIN wm_transaksi_detail as d USING(id_transaksi)
				JOIN wm_operator as o USING(id_operator)
				GROUP BY t.id_transaksi";
		$laporan = $this->db->query($query);
		return $laporan->result();
	}

	function view_laporan_periode($tanggal1,$tanggal2) {
		$query = "SELECT id_transaksi, t.tanggal_transaksi tanggal, o.nama_operator nama, SUM(d.qty_barang*d.harga) total
				FROM wm_transaksi as t
				JOIN wm_transaksi_detail as d USING(id_transaksi)
				JOIN wm_operator as o USING(id_operator)
				WHERE t.tanggal_transaksi BETWEEN '$tanggal1' AND '$tanggal2'
				GROUP BY t.id_transaksi";
		$laporan = $this->db->query($query);
		return $laporan->result();
	}

	function view_laporan_transaksi($id_transaksi) {
		$query = "SELECT id_transaksi, tanggal_transaksi, nama_operator, nama_barang, qty_barang, harga, (qty_barang*harga) subtotal
				FROM wm_transaksi as t
				JOIN wm_transaksi_detail as d USING(id_transaksi)
				JOIN wm_barang as b USING(id_barang)
				JOIN wm_operator as o USING(id_operator)
				WHERE t.id_transaksi = '$id_transaksi'";
		$laporan = $this->db->query($query);
		return $laporan->result();
	}
}
?>

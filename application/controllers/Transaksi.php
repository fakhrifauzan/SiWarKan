<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function Transaksi() {
        parent::__construct();
        $this->load->model(array('Transaksi_model','Operator_model','Barang_model'));

	}

	public function index()	{
		if ($this->input->post('id_barang') && $this->input->post('qty_barang')) {
			$id_barang = $this->input->post('id_barang');
			$barang = array(
	            'id_barang' => $this->input->post('id_barang'),
	            'qty_barang' => $this->input->post('qty_barang'),
	            'harga' => $this->Transaksi_model->cek_harga($id_barang),
	            'status' => '0',
		    );
			$this->Transaksi_model->simpan_barang('wm_transaksi_detail',$barang);
			redirect(base_url('transaksi'));
		} else {
			$data['header'] = "Transaksi";
			$data['barang'] = $this->Barang_model->view_barang();
			$data['operator'] = $this->Operator_model->view_operator();
			$data['detail'] = $this->Transaksi_model->view_detail_transaksi();
			$this->template->load('template','transaksi/transaksi_form',$data);
		}
	}

	public function delete_item($id_transaksi_detail = 0) {
		if ($id_transaksi_detail != 0) {
			$this->Transaksi_model->delete_item($id_transaksi_detail);
			redirect(base_url('transaksi'));
		} else {
			redirect(base_url('transaksi'));
		}
	}

	public function selesai_belanja(){
		if ($this->input->post('id_operator')) {
			$transaksi = array(
	            'id_operator' => $this->input->post('id_operator'),
	            'tanggal_transaksi' => date('Y-m-d'),
		    );
			$this->Transaksi_model->selesai_belanja($transaksi);
			 echo "<script>alert('Transaksi berhasil disimpan!');location.href='".base_url('transaksi')."';</script>";
		} else {
			redirect(base_url('transaksi'));
		}
	}

	// public function add_barang() {
    //   if ($this->input->post('nama_barang') && $this->input->post('id_barang_jenis') && $this->input->post('harga_barang')) {
    //   	$barang = array(
    //         'nama_barang' => $this->input->post('nama_barang'),
    //         'id_barang_jenis' => $this->input->post('id_barang_jenis'),
    //         'harga_barang' => $this->input->post('harga_barang'),
    //       );
	//       $this->Barang_model->add_barang('wm_barang',$barang);
	//       echo "<script>alert('Data Barang berhasil disimpan!');location.href='".base_url('barang')."';</script>";
    //   } else {
	// 	redirect(base_url('barang'));
    //   }
    // }
	//


    // public function edit_pinjaman($id_pinjaman = 0) {
    // 	if ($id_pinjaman != 0 && !empty($id_pinjaman)) {
	// 		$this->load->model('Anggota_model');
	// 		$this->load->model('Kategori_pinjaman_model');
    // 		$data = array(
    // 			'record' => $this->Pinjaman_model->edit_pinjaman($id_pinjaman),
	// 			'anggota' => $this->Anggota_model->view_anggota('pinjaman'),
	// 			'kategori' => $this->Kategori_pinjaman_model->view_kategori(),
    // 		);
    // 		if (!empty($data)) {
    // 			$this->load->view('pinjaman/pinjaman_edit',$data);
    // 		} else {
    // 			echo "<script>alert('ID Pinjaman tidak ditemukan!');location.href='".base_url('pinjaman')."';</script>";
    // 		}
    // 	} else {
    // 		redirect(base_url('pinjaman'));
    // 	}
    // }
	//
    // public function update_pinjaman() {
    // 	if ($this->input->post('submit')) {
	// 		$id_pinjaman = $this->input->post('id_pinjaman');
    //     	$data = array(
	// 			'id_pinjaman_kategori' => $this->input->post('id_pinjaman_kategori'),
	// 			'id_anggota' => $this->input->post('id_anggota'),
	// 			'besar_pinjaman' => $this->input->post('besar_pinjaman'),
	// 			// 'tgl_pengajuan_pinjaman' => date("Y-m-d"),
	// 			// 'tgl_acc_pinjaman' => $this->input->post('tgl_acc_pinjaman'),
	// 			// 'tgl_pinjam' => $this->input->post('tgl_pinjam'),
	// 			// 'tgl_pelunasan' => $this->input->post('tgl_pelunasan'),
	// 			'keterangan_pinjaman' => $this->input->post('keterangan_pinjaman'),
    //       	);
    //       	$this->Pinjaman_model->update_pinjaman('tbl_pinjaman',$data,$id_pinjaman);
    //       	echo "<script>alert('Data Pinjaman berhasil disimpan!');location.href='".base_url('pinjaman')."';</script>";
    //     } else {
    //       	echo "<script>alert('Data Pinjaman gagal disimpan!');location.href='".base_url('pinjaman')."';</script>";
    //     }
    // }
}

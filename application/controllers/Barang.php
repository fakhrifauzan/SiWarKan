<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function Barang() {
        parent::__construct();
        $this->load->model('Barang_model');
  	}

	public function index()	{
		$data['header'] = "Barang";
		$data['barang'] = $this->Barang_model->view_barang();
		$this->load->model('Jenis_barang_model');
		$data['jenis'] = $this->Jenis_barang_model->view_jenis();
		$this->template->load('template','barang/barang_view',$data);
	}

	public function add_barang() {
      if ($this->input->post('nama_barang') && $this->input->post('id_barang_jenis') && $this->input->post('harga_barang')) {
      	$barang = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'id_barang_jenis' => $this->input->post('id_barang_jenis'),
            'harga_barang' => $this->input->post('harga_barang'),
          );
	      $this->Barang_model->add_barang('wm_barang',$barang);
	      echo "<script>alert('Data Barang berhasil disimpan!');location.href='".base_url('barang')."';</script>";
      } else {
		redirect(base_url('barang'));
      }
    }

    public function delete_barang($id_barang = 0) {
		if ($id_barang != 0) {
			$this->Barang_model->delete_barang($id_barang);
    		echo "<script>alert('Data Barang berhasil dihapus!');location.href='".base_url('barang')."';</script>";
		} else {
			redirect(base_url('barang'));
		}
    }

	public function edit_barang($id_barang = 0) {
    	if ($id_barang != 0 && !empty($id_barang)) {
			$this->load->model('Jenis_barang_model');
    		$data = array(
				'header' => 'Barang',
    			'record' => $this->Barang_model->edit_barang($id_barang),
				'jenis' => $this->Jenis_barang_model->view_jenis(),
    			);
			$this->template->load('template','barang/barang_edit',$data);
    	} else {
    		redirect(base_url('barang'));
    	}
    }

    public function update_barang() {
    	if ($this->input->post('id_barang') && $this->input->post('nama_barang') && $this->input->post('id_barang_jenis') && $this->input->post('harga_barang')) {
    		$id_barang = $this->input->post('id_barang');
        	$data = array(
				'nama_barang' => $this->input->post('nama_barang'),
	            'id_barang_jenis' => $this->input->post('id_barang_jenis'),
	            'harga_barang' => $this->input->post('harga_barang'),
	            );
            $this->Barang_model->update_barang('wm_barang',$data,$id_barang);
            echo "<script>alert('Data Barang berhasil disimpan!');location.href='".base_url('barang')."';</script>";
        } else {
            echo "<script>alert('Data Barang gagal disimpan!');location.href='".base_url('barang')."';</script>";
        }
    }
}

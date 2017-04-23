<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_barang extends CI_Controller {

	public function Jenis_barang() {
        parent::__construct();
        $this->load->model('Jenis_barang_model');
    }

	public function index()	{
		$data['header'] = "Jenis Barang";
		$data['jenis_barang'] = $this->Jenis_barang_model->view_jenis();
		$this->template->load('template','jenis_barang/jenis_view',$data);
	}

	public function add_jenis() {
        if ($this->input->post('nama_barang_jenis')) {
        	$jenis = array(
	            'nama_barang_jenis' => $this->input->post('nama_barang_jenis'),
            );
            $this->Jenis_barang_model->add_jenis('wm_barang_jenis',$jenis);
            echo "<script>alert('Data Jenis barang berhasil disimpan!');location.href='".base_url('jenis_barang')."';</script>";
        } else {
            redirect(base_url('jenis_barang'));
        }
    }

    public function delete_jenis($id_barang_jenis = 0) {
    	$this->Jenis_barang_model->delete_jenis($id_barang_jenis);
    	echo "<script>alert('Data Jenis barang berhasil dihapus!');location.href='".base_url('jenis_barang')."';</script>";
    }

	public function edit_jenis($id_barang_jenis = 0) {
    	if ($id_barang_jenis != 0 && !empty($id_barang_jenis)) {
    		$data = array(
				'header' => 'Jenis Barang',
    			'record' => $this->Jenis_barang_model->edit_jenis($id_barang_jenis),
    			);
			$this->template->load('template','jenis_barang/jenis_edit',$data);
    	} else {
    		redirect(base_url('jenis_barang'));
    	}
    }

    public function update_jenis() {
    	if ($this->input->post('id_barang_jenis') && $this->input->post('nama_barang_jenis')) {
    		$id_barang_jenis = $this->input->post('id_barang_jenis');
        	$data = array(
                'nama_barang_jenis' => $this->input->post('nama_barang_jenis'),
	            );
            $this->Jenis_barang_model->update_jenis('wm_barang_jenis',$data,$id_barang_jenis);
            echo "<script>alert('Data Jenis Barang berhasil disimpan!');location.href='".base_url('jenis_barang')."';</script>";
        } else {
            echo "<script>alert('Data Jenis Barang gagal disimpan!');location.href='".base_url('jenis_barang')."';</script>";
        }
    }
}

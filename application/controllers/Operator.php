<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function Operator() {
        parent::__construct();
        $this->load->model('Operator_model');
    }

	public function index()	{
		$data['header'] = "Operator";
		$data['operator'] = $this->Operator_model->view_operator();
		$this->template->load('template','operator/operator_view',$data);
	}

	public function add_operator() {
        if ($this->input->post('nama_operator') && $this->input->post('divisi_operator') && $this->input->post('alamat_operator')) {
			$operator = array(
			   'nama_operator' => $this->input->post('nama_operator'),
			   'divisi_operator' => $this->input->post('divisi_operator'),
			   'alamat_operator' => $this->input->post('alamat_operator'),
		    );
		    $id_user = $this->Operator_model->add_operator('wm_operator',$operator);
		    echo "<script>alert('Data Operator berhasil disimpan!');location.href='".base_url('operator')."';</script>";
        } else {
        	redirect(base_url('operator'));
        }
    }

	public function delete_operator($id_operator = 0) {
		$this->Operator_model->delete_operator($id_operator);
		echo "<script>alert('Data Petugas berhasil dihapus!');location.href='".base_url('operator')."';</script>";
	}

    public function edit_operator($id_operator = 0) {
    	if ($id_operator != 0 && !empty($id_operator)) {
    		$data = array(
				'header' => 'Operator',
    			'record' => $this->Operator_model->edit_operator($id_operator),
    			);
			$this->template->load('template','operator/operator_edit',$data);
    	} else {
    		redirect(base_url('operator'));
    	}
    }

    public function update_operator() {
    	if ($this->input->post('id_operator') && $this->input->post('nama_operator') && $this->input->post('divisi_operator') && $this->input->post('alamat_operator')) {
    		$id_operator = $this->input->post('id_operator');
        	$data = array(
                'nama_operator' => $this->input->post('nama_operator'),
                'alamat_operator' => $this->input->post('alamat_operator'),
                'divisi_operator' => $this->input->post('divisi_operator'),
	            );
            $this->Operator_model->update_operator('wm_operator',$data,$id_operator);
            echo "<script>alert('Data Operator berhasil disimpan!');location.href='".base_url('operator')."';</script>";
        } else {
            echo "<script>alert('Data Operator gagal disimpan!');location.href='".base_url('operator')."';</script>";
        }
    }

}

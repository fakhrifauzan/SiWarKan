<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function Laporan() {
        parent::__construct();
        $this->load->model('Laporan_model');
  	}

	public function index()	{
		$data['header'] = "Laporan";
		if ($this->input->post('tanggal1') && $this->input->post('tanggal2')) {
			$tanggal1 = $this->input->post('tanggal1');
			$tanggal2 = $this->input->post('tanggal2');
			if ($this->input->post('aksi') == 'proses') {
				$data['laporan'] = $this->Laporan_model->view_laporan_periode($tanggal1,$tanggal2);
				$this->template->load('template','laporan/laporan_view',$data);
			} elseif ($this->input->post('aksi') == 'cetak') {
				$this->cetak_periode($tanggal1,$tanggal2);
			}
		} else {
			$data['laporan'] = $this->Laporan_model->view_laporan();
			$this->template->load('template','laporan/laporan_view',$data);
		}
	}

	public function cetak(){
		$data['laporan'] = $this->Laporan_model->view_laporan();
		$html = $this->load->view('laporan/laporan_cetak',$data,TRUE);
		$this->pdfgenerator->generate($html,'laporan');
	}

	public function cetak_periode($tanggal1,$tanggal2){
		$data['laporan'] = $this->Laporan_model->view_laporan_periode($tanggal1,$tanggal2);
		$html = $this->load->view('laporan/laporan_cetak',$data,TRUE);
		$this->pdfgenerator->generate($html,'laporan_periode');
	}

	public function cetak_transaksi($id_transaksi){
		$data['laporan'] = $this->Laporan_model->view_laporan_transaksi($id_transaksi);
		$html = $this->load->view('laporan/laporan_cetak_transaksi',$data,TRUE);
		$this->pdfgenerator->generate($html,'laporan_transaksi');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

	public $data = '';

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('pelajaran_model');
	}

	public function index()
	{	
		$data['main_view'] = 'daftar_pelajaran';
		$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
		$this->load->view('template', $data);
	}

	public function simpan_pelajaran()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('kode_pelajaran', 'Kode Pelajaran', 'trim|required');
			$this->form_validation->set_rules('mata_pelajaran', 'Mata Pelajaran', 'trim|required');
			$this->form_validation->set_rules('lama_jam', 'Lama Jam/Minggu', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

			if ($this->form_validation->run() == TRUE) {				
				if ($this->pelajaran_model->insert_pelajaran() == TRUE) {
					$data['notif_sukses'] 	= 'Berhasil Menambah Data!';
					$data['main_view'] 		= 'daftar_pelajaran';
					$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
					$this->load->view('template', $data);

				} else {
					$data['notif_gagal'] 	= 'GAGAL Menambah Data!';
					$data['main_view'] 		= 'daftar_pelajaran';
					$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
					$this->load->view('template', $data);
				}
			} else {
				$data['notif_gagal']	= validation_errors();
				$data['main_view'] 		= 'daftar_pelajaran';
				$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
				$this->load->view('template', $data);
			}

		} else {
			$data['notif_gagal'] 	= validation_errors();
			$data['main_view'] 		= 'daftar_pelajaran';
			$data['pelajaran'] 		= $this->pelajaran_model->get_data_pelajaran();
			$this->load->view('template', $data);
		}	
	}

	public function edit_pelajaran()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('kode_pelajaran', 'Kode Pelajaran', 'trim|required');
			$this->form_validation->set_rules('mata_pelajaran', 'Mata Pelajaran', 'trim|required');
			$this->form_validation->set_rules('lama_jam', 'Lama Jam/Minggu', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

			if($this->form_validation->run() == TRUE){

				$kode_pelajaran = $this->input->post('kode_pelajaran');

				if ($this->pelajaran_model->update_pelajaran($kode_pelajaran)){
					$data['notif_sukses'] = 'Berhasil Mengedit Data!';
					$data['main_view'] = 'daftar_pelajaran';
					$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
					$this->load->view('template', $data);

				} else {
					$data['notif_gagal'] = 'GAGAL Mengedit Data!';
					$data['main_view'] = 'daftar_pelajaran';
					$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
					$this->load->view('template', $data);
				}
			} else {
				$data['notif_gagal'] = validation_errors();
				$data['main_view'] = 'daftar_pelajaran';
				$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
				$this->load->view('template', $data);
			}

		} else {
			$data['notif_gagal'] = validation_errors();
			$data['main_view'] = 'daftar_karyawan';
			$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
			$this->load->view('template', $data);
		}
	}

	public function hapus_pelajaran(){

		$kode_pelajaran = $this->uri->segment(3);

		if ($this->pelajaran_model->delete_pelajaran($kode_pelajaran)) {
			$data['notif_sukses'] = 'Berhasil Menghapus Data!';
			$data['main_view'] = 'daftar_pelajaran';
			$data['pelajaran'] = $this->pelajaran_model->get_data_pelajaran();
			$this->load->view('template', $data);
		} else {
			$data['notif_gagal'] = 'Gagal Menghapus Data!';
			$data['main_view'] = 'daftar_pelajaran';
			$data['pelajaran'] = $this->karyawan_model->get_data_pelajaran();
			$this->load->view('template', $data);
		}
	}

}

/* End of file pelajaran.php */
/* Location: ./application/controllers/pelajaran.php */
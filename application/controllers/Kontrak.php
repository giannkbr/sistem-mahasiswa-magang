<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		is_admin();
		$this->load->model('admin_model', 'admin');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Kontrak',
			'page' => 'admin/kontrak/datakontrak',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data Kontrak',
			'data' => $this->admin->kontrak()->result()
		];

		$this->load->view('templates/app', $data);
	}

	public function addkontrak()
	{

		$this->form_validation->set_rules('nim', 'Nomer Induk Mahasiswa', 'required', [
			'required' => 'Nomer Induk Mahasiswa tidak boleh kosong.',
		]);

		$this->form_validation->set_rules('no_kontrak', 'Nomor Kontrak', 'required', [
			'required' => 'Nomor Kontrak tidak boleh kosong.',
		]);

		$this->form_validation->set_rules('tanggal_kontrak', 'Tanggal Kontrak', 'required', [
			'required' => 'Tanggal Kontrak tidak boleh kosong.',
		]);

		$this->form_validation->set_rules('perihal', 'perihal', 'required', [
			'required' => 'Perihal tidak boleh kosong.',
		]);

		$this->form_validation->set_rules('upah', 'Uang Saku', 'required', [
			'required' => 'Uang Saku tidak boleh kosong.',
		]);


		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data kontrak',
				'page' => 'admin/kontrak/addkontrak',
				'subtitle' => 'Admin',
				'subtitle2' => 'Tambah Data kontrak',
				'mahasiswa' => $this->db->get('mahasiswa')->result()
			];

			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'nim' => $this->input->post('nim'),
				'no_kontrak' => $this->input->post('no_kontrak'),
				'tanggal_kontrak' => $this->input->post('tanggal_kontrak'),
				'perihal' => $this->input->post('perihal'),
				'upah' => $this->input->post('upah'),
			];

			if (isset($_FILES['kontrak']['name'])) {
				$config['upload_path'] 		= './kontrak/';
				$config['allowed_types'] 	= 'pdf';
				$config['overwrite']  		= true;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('kontrak')) {
					$this->session->set_flashdata('message', 'swal("Ops!", "File Kontrak gagal diupload", "error");');
					redirect(base_url('data-kontrak'));
				} else {
					$img = $this->upload->data();
					$data['kontrak'] = $img['file_name'];
				}
			}
			$this->db->insert('kontrak', $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Kontrak Berhasil Ditambahkan!", "success");');

			redirect(base_url('data-kontrak'));
		}
	}

	public function deletekontrak($id)
	{
		$this->db->delete('kontrak', ['kontrak_id' => $id]);
		$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Kontrak Berhasil Dihapus!", "success");');
		redirect(base_url('data-kontrak'));
	}
}

/* End of file Kontrak.php */

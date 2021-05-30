<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Magang extends CI_Controller
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
			'title' => 'Data Magang',
			'page' => 'admin/magang/datamagang',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data Magang',
			'data' => $this->admin->magang()->result()
		];

		$this->load->view('templates/app', $data);
	}

	public function addmagang()
	{

		$this->form_validation->set_rules('nim', 'Nomer Induk Mahasiswa', 'required', [
			'required' => 'Harap isi kolom Nomer Induk Mahasiswa',
		]);

		$this->form_validation->set_rules('tahun', 'Tahun Masuk', 'required', [
			'required' => 'Harap isi kolom Tahun Masuk',
		]);

		$this->form_validation->set_rules('batch', 'Batch Masuk', 'required', [
			'required' => 'Harap isi kolom Batch Masuk',
		]);

		$this->form_validation->set_rules('divre', 'Divre', 'required', [
			'required' => 'Harap isi kolom Divre',
		]);

		$this->form_validation->set_rules('jobdesk', 'Job Description', 'required', [
			'required' => 'Harap isi kolom Job Description',
		]);

		$this->form_validation->set_rules('bagian_unit', 'Bagian Unit', 'required', [
			'required' => 'Harap isi kolom Bagian Unit',
		]);

		$this->form_validation->set_rules('mentor', 'Mentor', 'required', [
			'required' => 'Harap isi kolom Mentor',
		]);


		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data Magang',
				'page' => 'admin/magang/addmagang',
				'subtitle' => 'Admin',
				'subtitle2' => 'Tambah Data Magang',
				'mahasiswa' => $this->db->get('mahasiswa')->result()
			];

			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'nim' => $this->input->post('nim'),
				'tahun' => $this->input->post('tahun'),
				'batch' => $this->input->post('batch'),
				'divre' => $this->input->post('divre'),
				'jobdesk' => $this->input->post('jobdesk'),
				'bagian_unit' => $this->input->post('bagian_unit'),
				'mentor' => $this->input->post('mentor'),
			];
			$this->db->insert('magang', $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Magang Berhasil Ditambahkan!", "success");');

			redirect(base_url('data-magang'));
		}
	}

	public function deletemagang($id)
	{
		$this->db->delete('magang', ['magang_id' => $id]);
		$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Magang Berhasil Dihapus!", "success");');
		redirect(base_url('data-magang'));
	}

	public function editmagang($id)
	{

		$this->form_validation->set_rules('nim', 'Nomer Induk Mahasiswa', 'required', [
			'required' => 'Harap isi kolom Nomer Induk Mahasiswa',
		]);

		$this->form_validation->set_rules('tahun', 'Tahun Masuk', 'required', [
			'required' => 'Harap isi kolom Tahun Masuk',
		]);

		$this->form_validation->set_rules('batch', 'Batch Masuk', 'required', [
			'required' => 'Harap isi kolom Batch Masuk',
		]);

		$this->form_validation->set_rules('divre', 'Divre', 'required', [
			'required' => 'Harap isi kolom Divre',
		]);

		$this->form_validation->set_rules('jobdesk', 'Job Description', 'required', [
			'required' => 'Harap isi kolom Job Description',
		]);

		$this->form_validation->set_rules('bagian_unit', 'Bagian Unit', 'required', [
			'required' => 'Harap isi kolom Bagian Unit',
		]);

		$this->form_validation->set_rules('mentor', 'Mentor', 'required', [
			'required' => 'Harap isi kolom Mentor',
		]);


		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Edit Data Magang',
				'page' => 'admin/magang/editmagang',
				'subtitle' => 'Admin',
				'subtitle2' => 'Edit Data Magang',
				'data' => $this->db->get('mahasiswa')->result(),
				'detail' => $this->admin->magangid($id)->row()
			];

			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'nim' => $this->input->post('nim'),
				'tahun' => $this->input->post('tahun'),
				'batch' => $this->input->post('batch'),
				'divre' => $this->input->post('divre'),
				'jobdesk' => $this->input->post('jobdesk'),
				'bagian_unit' => $this->input->post('bagian_unit'),
				'mentor' => $this->input->post('mentor'),
			];
			$this->admin->editMagang($id, $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Magang Berhasil Diedit!", "success");');

			redirect(base_url('data-magang'));
		}
	}
}

/* End of file Magang.php */

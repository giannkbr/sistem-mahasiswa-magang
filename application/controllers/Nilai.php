<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
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
			'title' => 'Data Nilai',
			'page' => 'admin/nilai/datanilai',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data Nilai',
			'data' => $this->admin->nilai()->result()
		];

		$this->load->view('templates/app', $data);
	}

	public function addnilai()
	{

		$this->form_validation->set_rules('nim', 'Nomer Induk Mahasiswa', 'required', [
			'required' => 'Harap isi kolom Nomer Induk Mahasiswa',
		]);


		$this->form_validation->set_rules('nilai_a', 'Pemahaman Tentang Peran Mahasiswa Magang Dan Penyesuaian Diri', 'required', [
			'required' => 'Harap isi kolom Nilai Pemahaman Tentang Peran Mahasiswa Magang Dan Penyesuaian Diri'
		]);

		$this->form_validation->set_rules('nilai_b', 'Pemahaman Terhadap Bidang Usaha Dan Proses Bisnis Perusahaan', 'required', [
			'required' => 'Harap isi kolom Nilai Pemahaman Terhadap Bidang Usaha Dan Proses Bisnis Perusahaan'
		]);

		$this->form_validation->set_rules('nilai_c', 'Keberhasilan Pencapaian Learning Objectives Sesuai Learning Plan Yang Sudah Ditentukan', 'required', [
			'required' => 'Harap isi kolom Nilai Keberhasilan Pencapaian Learning Objectives Sesuai Learning Plan Yang Sudah Ditentukan'
		]);

		$this->form_validation->set_rules('nilai_d', 'Keluasan Wawasan Keilmuan Dan Penerapannya', 'required', [
			'required' => 'Harap isi kolom Nilai Keluasan Wawasan Keilmuan Dan Penerapannya'
		]);

		$this->form_validation->set_rules('nilai_e', 'Kemampuan Merumuskan Permasalahan Dan Rencana Pemecehan', 'required', [
			'required' => 'Harap isi kolom Nilai Kemampuan Merumuskan Permasalahan Dan Rencana Pemecehan'
		]);

		$this->form_validation->set_rules('nilai_f', 'Kemampuan Mencapai Target Pekerjaan', 'required', [
			'required' => 'Harap isi kolom Nilai Kemampuan Mencapai Target Pekerjaan'
		]);

		$this->form_validation->set_rules('total', 'Total', 'required', [
			'required' => 'Total Nilai masih belum terisi'
		]);

		// $this->form_validation->set_rules('ket', 'Klasifikasi', 'required', [
		// 	'required' => 'Klasifikasi masih belum terisi'
		// ]);

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data Nilai',
				'page' => 'admin/nilai/addnilai',
				'subtitle' => 'Admin',
				'subtitle2' => 'Tambah Data Nilai',
				'mahasiswa' => $this->db->get('mahasiswa')->result()
			];

			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'nim' => $this->input->post('nim'),
				'nilai_a' => $this->input->post('nilai_a'),
				'nilai_b' => $this->input->post('nilai_b'),
				'nilai_c' => $this->input->post('nilai_c'),
				'nilai_d' => $this->input->post('nilai_d'),
				'nilai_e' => $this->input->post('nilai_e'),
				'nilai_f' => $this->input->post('nilai_f'),
				'total' => $this->input->post('total'),
				// 'ket' => $this->input->get('klasifikasi')
			];

			$this->db->insert('nilai', $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Nilai Berhasil Ditambahkan!", "success");');

			redirect(base_url('data-nilai'));
		}
	}

	public function deletenilai($id)
	{
		$this->db->delete('nilai', ['nilai_id' => $id]);
		$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Nilai Berhasil Dihapus!", "success");');
		redirect(base_url('data-nilai'));
	}

	public function editnilai($id)
	{

		$this->form_validation->set_rules('nim', 'Nomer Induk Mahasiswa', 'required', [
			'required' => 'Harap isi kolom Nomer Induk Mahasiswa',
		]);


		$this->form_validation->set_rules('nilai_a', 'Pemahaman Tentang Peran Mahasiswa Magang Dan Penyesuaian Diri', 'required', [
			'required' => 'Harap isi kolom Nilai Pemahaman Tentang Peran Mahasiswa Magang Dan Penyesuaian Diri'
		]);

		$this->form_validation->set_rules('nilai_b', 'Pemahaman Terhadap Bidang Usaha Dan Proses Bisnis Perusahaan', 'required', [
			'required' => 'Harap isi kolom Nilai Pemahaman Terhadap Bidang Usaha Dan Proses Bisnis Perusahaan'
		]);

		$this->form_validation->set_rules('nilai_c', 'Keberhasilan Pencapaian Learning Objectives Sesuai Learning Plan Yang Sudah Ditentukan', 'required', [
			'required' => 'Harap isi kolom Nilai Keberhasilan Pencapaian Learning Objectives Sesuai Learning Plan Yang Sudah Ditentukan'
		]);

		$this->form_validation->set_rules('nilai_d', 'Keluasan Wawasan Keilmuan Dan Penerapannya', 'required', [
			'required' => 'Harap isi kolom Nilai Keluasan Wawasan Keilmuan Dan Penerapannya'
		]);

		$this->form_validation->set_rules('nilai_e', 'Kemampuan Merumuskan Permasalahan Dan Rencana Pemecehan', 'required', [
			'required' => 'Harap isi kolom Nilai Kemampuan Merumuskan Permasalahan Dan Rencana Pemecehan'
		]);

		$this->form_validation->set_rules('nilai_f', 'Kemampuan Mencapai Target Pekerjaan', 'required', [
			'required' => 'Harap isi kolom Nilai Kemampuan Mencapai Target Pekerjaan'
		]);

		$this->form_validation->set_rules('total', 'Total', 'required', [
			'required' => 'Total Nilai masih belum terisi'
		]);

		// $this->form_validation->set_rules('ket', 'Klasifikasi', 'required', [
		// 	'required' => 'Klasifikasi masih belum terisi'
		// ]);

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Edit Data Nilai',
				'page' => 'admin/nilai/editnilai',
				'subtitle' => 'Admin',
				'subtitle2' => 'Edit Data Nilai',
				'data' => $this->db->get('mahasiswa')->result(),
				'detail' => $this->admin->nilaiid($id)->row()
			];

			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'nim' => $this->input->post('nim'),
				'nilai_a' => $this->input->post('nilai_a'),
				'nilai_b' => $this->input->post('nilai_b'),
				'nilai_c' => $this->input->post('nilai_c'),
				'nilai_d' => $this->input->post('nilai_d'),
				'nilai_e' => $this->input->post('nilai_e'),
				'nilai_f' => $this->input->post('nilai_f'),
				'total' => $this->input->post('total'),
				// 'ket' => $this->input->get('klasifikasi')
			];

			$this->admin->editnilai($id, $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Nilai Berhasil Diedit!", "success");');

			redirect(base_url('data-nilai'));
		}
	}
}

/* End of file Nilai.php */

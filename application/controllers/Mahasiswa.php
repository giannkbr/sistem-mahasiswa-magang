<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
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
			'title' => 'Data Mahasiswa',
			'page' => 'admin/mahasiswa/datamahasiswa',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data Mahasiswa',
			'data' => $this->db->get('mahasiswa')->result()
		];

		$this->load->view('templates/app', $data);
	}

	public function addmahasiswa()
	{

		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
			'required' => 'Harap isi kolom Nama Mahasiswa',
		]);

		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Harap isi kolom E-mail',
		]);

		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'Harap isi kolom NIM',
		]);

		$this->form_validation->set_rules('nik', 'NIK', 'required', [
			'required' => 'Harap isi kolom NIK',
		]);

		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Harap isi kolom Jenis Kelamin',
		]);

		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
			'required' => 'Harap isi kolom Tempat Lahir',
		]);

		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', [
			'required' => 'Harap isi kolom Tanggal Lahir',
		]);

		$this->form_validation->set_rules('perguruan_tinggi', 'Perguruan Tinggi', 'required', [
			'required' => 'Harap isi kolom Perguruan Tinggi',
		]);

		$this->form_validation->set_rules('jurusan', 'Program Studi', 'required', [
			'required' => 'Harap isi kolom Program Studi',
		]);

		$this->form_validation->set_rules('telepon', 'Nomer Telepon', 'required', [
			'required' => 'Harap isi kolom Telepon',
		]);

		$this->form_validation->set_rules('nama_keluarga', 'Nama Keluarga', 'required', [
			'required' => 'Harap isi kolom Nama Keluarga',
		]);

		$this->form_validation->set_rules('hubungan', 'Hubungan', 'required', [
			'required' => 'Harap isi kolom Hubungan',
		]);

		$this->form_validation->set_rules('telepon', 'Telepon', 'required', [
			'required' => 'Harap isi kolom Telepon',
		]);

		$this->form_validation->set_rules('telepon_kel', 'Telepon', 'required', [
			'required' => 'Harap isi kolom Telepon',
		]);

		$this->form_validation->set_rules('bank', 'Nama Bank', 'required', [
			'required' => 'Harap isi kolom Nama Bank',
		]);

		$this->form_validation->set_rules('nomor_rek', 'Nomor Rekening', 'required', [
			'required' => 'Harap isi kolom Nomor Rekening',
		]);

		$this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required', [
			'required' => 'Harap isi kolom Nama Pemilik',
		]);


		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data Mahasiswa',
				'page' => 'admin/mahasiswa/addmahasiswa',
				'subtitle' => 'Admin',
				'subtitle2' => 'Tambah Data Mahasiswa'
			];
			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'email' => $this->input->post('email', true),
				'nim' => $this->input->post('nim', true),
				'nik' => $this->input->post('nik', true),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
				'tempat_lahir' => $this->input->post('tempat_lahir', true),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'perguruan_tinggi' => $this->input->post('perguruan_tinggi', true),
				'jurusan' => $this->input->post('jurusan', true),
				'telepon' => $this->input->post('telepon', true),
				'akun_ig' => $this->input->post('akun_ig', true),
				'akun_fb' => $this->input->post('akun_ig', true),
				'nama_keluarga' => $this->input->post('nama_keluarga', true),
				'hubungan' => $this->input->post('hubungan', true),
				'telepon_kel' => $this->input->post('telepon_kel', true),
				'bank' => $this->input->post('bank', true),
				'nomor_rek' => $this->input->post('nomor_rek', true),
				'nama_pemilik' => $this->input->post('nama_pemilik'),
			];

			if (isset($_FILES['photo']['name'])) {
				$config['upload_path'] 		= './images/users/';
				$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
				$config['overwrite']  		= true;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('photo')) {
					$this->session->set_flashdata('message', 'swal("Ops!", "Photo gagal diupload", "error");');
					redirect('add-mahasiswa');
				} else {
					$img = $this->upload->data();
					$data['photo'] = $img['file_name'];
				}

				$this->db->insert('mahasiswa', $data);
				$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Mahasiswa Berhasil Ditambahkan!", "success");');

				redirect(base_url('data-mahasiswa'));
			}
		}
	}

	public function editmahasiswa($id)
	{

		$this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
			'required' => 'Harap isi kolom Nama Mahasiswa',
		]);

		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => 'Harap isi kolom E-mail',
		]);

		$this->form_validation->set_rules('nim', 'NIM', 'required', [
			'required' => 'Harap isi kolom NIM',
		]);

		$this->form_validation->set_rules('nik', 'NIK', 'required', [
			'required' => 'Harap isi kolom NIK',
		]);

		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
			'required' => 'Harap isi kolom Jenis Kelamin',
		]);

		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
			'required' => 'Harap isi kolom Tempat Lahir',
		]);

		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', [
			'required' => 'Harap isi kolom Tanggal Lahir',
		]);

		$this->form_validation->set_rules('perguruan_tinggi', 'Perguruan Tinggi', 'required', [
			'required' => 'Harap isi kolom Perguruan Tinggi',
		]);

		$this->form_validation->set_rules('jurusan', 'Program Studi', 'required', [
			'required' => 'Harap isi kolom Program Studi',
		]);

		$this->form_validation->set_rules('telepon', 'Nomer Telepon', 'required', [
			'required' => 'Harap isi kolom Telepon',
		]);

		$this->form_validation->set_rules('nama_keluarga', 'Nama Keluarga', 'required', [
			'required' => 'Harap isi kolom Nama Keluarga',
		]);

		$this->form_validation->set_rules('hubungan', 'Hubungan', 'required', [
			'required' => 'Harap isi kolom Hubungan',
		]);

		$this->form_validation->set_rules('telepon', 'Telepon', 'required', [
			'required' => 'Harap isi kolom Telepon',
		]);

		$this->form_validation->set_rules('telepon_kel', 'Telepon', 'required', [
			'required' => 'Harap isi kolom Telepon',
		]);

		$this->form_validation->set_rules('bank', 'Nama Bank', 'required', [
			'required' => 'Harap isi kolom Nama Bank',
		]);

		$this->form_validation->set_rules('nomor_rek', 'Nomor Rekening', 'required', [
			'required' => 'Harap isi kolom Nomor Rekening',
		]);

		$this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required', [
			'required' => 'Harap isi kolom Nama Pemilik',
		]);


		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Edit Data Mahasiswa',
				'page' => 'admin/mahasiswa/editmahasiswa',
				'subtitle' => 'Admin',
				'subtitle2' => 'Edit Data Mahasiswa',
				'data' => $this->admin->mahasiswaid($id)->row()
			];
			$this->load->view('templates/app', $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'email' => $this->input->post('email', true),
				'nim' => $this->input->post('nim', true),
				'nik' => $this->input->post('nik', true),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
				'tempat_lahir' => $this->input->post('tempat_lahir', true),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'perguruan_tinggi' => $this->input->post('perguruan_tinggi', true),
				'jurusan' => $this->input->post('jurusan', true),
				'telepon' => $this->input->post('telepon', true),
				'akun_ig' => $this->input->post('akun_ig', true),
				'akun_fb' => $this->input->post('akun_ig', true),
				'nama_keluarga' => $this->input->post('nama_keluarga', true),
				'hubungan' => $this->input->post('hubungan', true),
				'telepon_kel' => $this->input->post('telepon_kel', true),
				'bank' => $this->input->post('bank', true),
				'nomor_rek' => $this->input->post('nomor_rek', true),
				'nama_pemilik' => $this->input->post('nama_pemilik'),
			];

			// Jika foto diubah
			if (isset($_FILES['photo']['name'])) {
				$config['upload_path'] 		= './images/users/';
				$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
				$config['overwrite']  		= true;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('photo')) {
					$this->session->set_flashdata('message', 'swal("Ops!", "Photo gagal diupload", "error");');
					redirect('add-mahasiswa');
				} else {
					$img = $this->upload->data();
					$data['photo'] = $img['file_name'];
				}

				$this->db->insert('mahasiswa', $data);
				$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Mahasiswa Berhasil Ditambahkan!", "success");');

				redirect(base_url('data-mahasiswa'));
			}

			$this->admin->editMahasiswa($id, $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Mahasiswa Berhasil Diedit!", "success");');

			redirect(base_url('data-mahasiswa'));
		}
	}


	public function deletemahasiswa($id)
	{
		$this->db->delete('mahasiswa', ['nim' => $id]);
		$this->session->set_flashdata('message', 'swal("Berhasil!", "Data Mahasiswa Berhasil Dihapus!", "success");');
		redirect(base_url('data-mahasiswa'));
	}
}
/* End of file Mahasiswa.php */

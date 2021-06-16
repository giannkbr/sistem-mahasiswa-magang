<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Absen_model', 'absen');
		$this->load->model('Admin_model', 'admin');
		is_login();
	}

	public function index()
	{
		$data = [
			'title' => 'Data Absensi',
			'page' => 'admin/absensi/dataabsensi',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data Absensi',
			'data' => $this->absen->absendata()->result()
		];

		$this->load->view('templates/app', $data, FALSE);
	}

	public function getAbsenId($id)
	{
		$data = [
			'title' => 'Data Absensi',
			'page' => 'user/absensi/dataabsensi',
			'subtitle' => 'User',
			'subtitle2' => 'Data Absensi',
			'data' => $this->absen->getAbsenById($id)
		];

		$this->load->view('templates/app', $data, FALSE);
	}

	public function rekapabsensi()
	{

		$data = [
			'title' => 'Data Rekap Absensi',
			'page' => 'admin/absensi/rekapabsensi',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data Rekap',
			'bulan' => date('m'),
			'tahun' => date('Y'),
			'data' => $this->admin->mahasiswa()->result()
		];

		$this->load->view('templates/app', $data, FALSE);
	}

	public function laporanfilter()
	{
		$date = $this->input->post('date');

		$data = [
			'title' => 'Data Rekap Absensi',
			'page' => 'admin/absensi/rekapabsensi',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data Rekap',
			'bulan' => date_format(date_create($date), 'm'),
			'tahun' => date_format(date_create($date), 'Y'),
			'data' => $this->admin->mahasiswa()->result()
		];

		$this->load->view('templates/app', $data, FALSE);
	}
}

/* End of file Absen.php */

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
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
			'title' => 'Data konfigurasi',
			'page' => 'admin/konfigurasi/website',
			'subtitle' => 'Admin',
			'subtitle2' => 'Data konfigurasi',
		];

		$this->load->view('templates/app', $data);
	}
}

/* End of file Konfigurasi.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('User_model', 'user');
	}

	public function index()
	{
		$tahun 			= date('Y');
		$bulan 			= date('m');
		$hari 			= date('d');
		$absen			= $this->user->absendaily($this->session->userdata('nim'), $tahun, $bulan, $hari);
		$data = [
			'title' => 'Dashboard',
			'page' => 'user/index',
			'subtitle' => 'Dashboard',
			'subtitle2' => 'User',
			'users' => $this->db->get('mahasiswa')->result(),
		];

		if ($absen->num_rows() == 0) {
			$data['waktu'] = 'masuk';
		} elseif ($absen->num_rows() == 1) {
			$data['waktu'] = 'pulang';
		} else {
			$data['waktu'] = 'dilarang!';
		}

		$this->load->view('templates/app', $data);
	}

	public function proses_absen()
	{
		$id = $this->session->userdata('nim');
		$nama = $this->session->userdata('nama');
		$p = $this->input->post();
		$tahun 			= date('Y');
		$bulan 			= date('m');
		$hari 			= date('d');
		$absen			= $this->user->absendaily($this->session->userdata('nim'), $tahun, $bulan, $hari);
		if ($absen->num_rows() == 0) {
			$data = [
				'nim'	=> $id,
				'nama' => $nama,
				'keterangan' => $p['ket'],
				'jam_masuk' => date('G:i:s'),
				'keterangan_kerja' => $p['keterangan_kerja'],
				'maps_absen' => $p['location_maps']
			];
			$this->db->insert('absen', $data);
			$this->session->set_flashdata('message', 'swal("Berhasil!", "Melakukan absen masuk", "success");');
			redirect('user');
		} elseif ($absen->num_rows() == 1) {
			$data = [
				'nim'	=> $id,
				'keterangan' => $p['ket'],
				'jam_pulang' => date('G:i:s'),
				'deskripsi' => $p['deskripsi'],
			];
			$this->db->update('absen', $data);
			$this->db->where('nim', $data);

			$this->session->set_flashdata('message', 'swal("Berhasil!", "Melakukan absen pulang", "success");');
			redirect('user');
		}
	}
}

/* End of file User.php */

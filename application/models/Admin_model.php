<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function getDetailjabatan($id)
	{
		return $this->db->get_where('jabatan', ['jabatan_id' => $id])->row_array();
	}

	function nilai()
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('nilai', 'mahasiswa.nim = nilai.nim');
		return $this->db->get();
	}

	public function editMahasiswa($id, $data)
	{
		$this->db->update('mahasiswa', $data, ['nim' => $id]);
		return $this->db->affected_rows();
	}

	public function mahasiswaid($id)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('mahasiswa.nim', $id);
		return $this->db->get();
	}

	public function editNilai($id, $data)
	{
		$this->db->update('nilai', $data, ['nilai_id' => $id]);
		return $this->db->affected_rows();
	}

	public function nilaiid($id)
	{
		$this->db->select('*');
		$this->db->from('nilai');
		$this->db->where('nilai.nilai_id', $id);
		return $this->db->get();
	}

	public function magang()
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('magang', 'mahasiswa.nim = magang.nim');
		return $this->db->get();
	}

	public function editMagang($id, $data)
	{
		$this->db->update('magang', $data, ['magang_id' => $id]);
		return $this->db->affected_rows();
	}

	public function magangid($id)
	{
		$this->db->select('*');
		$this->db->from('magang');
		$this->db->where('magang.magang_id', $id);
		return $this->db->get();
	}

	public function kontrak()
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('kontrak', 'mahasiswa.nim = kontrak.nim');
		return $this->db->get();
	}
}

/* End of file ModelName.php */

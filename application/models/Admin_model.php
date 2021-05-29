<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function getDetailjabatan($id)
	{
		return $this->db->get_where('jabatan', ['jabatan_id' => $id])->row_array();
	}

	function karyawan()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('jabatan', 'users.jabatan_id = jabatan.jabatan_id');
		return $this->db->get();
	}

	public function editMahasiswa($id, $data)
	{
		$this->db->update('mahasiswa', $data, ['nim' => $id]);
		return $this->db->affected_rows();
	}

	function mahasiswaid($id)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('mahasiswa.nim', $id);
		return $this->db->get();
	}
}

/* End of file ModelName.php */

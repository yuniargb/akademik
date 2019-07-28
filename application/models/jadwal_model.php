<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
	public $table = 'jadwal';
	public $id    = 'id_jadwal';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_data()
	{
		$sql = "SELECT jadwal.id_jadwal, tahun_akademik.tahun_akademik, kelas.nama_kelas as kelas,
	 mapel.nama_mapel, guru.nama_guru as nip, jadwal.jam, jadwal.ruangan, jadwal.hari
		from jadwal
		inner join tahun_akademik
		ON tahun_akademik.id_tahun = jadwal.id_tahun
		inner JOIN mapel
		ON mapel.id_mapel = jadwal.id_mapel
		INNER JOIN kelas
		ON kelas.id_kelas=jadwal.kelas
		INNER JOIN guru
		ON guru.nip=jadwal.nip";

		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
		} else {
			return array();
		}
	}
	public function get_edit($id)
	{
		$sql = "SELECT *
		from jadwal
		inner join tahun_akademik
		ON tahun_akademik.id_tahun = jadwal.id_tahun
		inner JOIN mapel
		ON mapel.id_mapel = jadwal.id_mapel
		INNER JOIN kelas
		ON kelas.id_kelas=jadwal.kelas
		INNER JOIN guru
		ON guru.nip=jadwal.nip
		WHERE jadwal.id_jadwal = '" . $id . "'";

		return $this->db->query($sql);
	}
	public function jadwalSiswa($id)
	{
		$sql = "SELECT *
		from jadwal
		inner join tahun_akademik
		ON tahun_akademik.id_tahun = jadwal.id_tahun
		inner JOIN mapel
		ON mapel.id_mapel = jadwal.id_mapel
		INNER JOIN kelas
		ON kelas.id_kelas=jadwal.kelas
		INNER JOIN siswa
		ON siswa.id_kelas=kelas.id_kelas
		INNER JOIN guru
		ON guru.nip=jadwal.nip
		WHERE siswa.nis = '" . $id . "'";

		return $this->db->query($sql);
	}


	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_jadwal', $id);
		return $this->db->update('jadwal', $data);
	}

	public function delete($params)
	{
		$sql = "delete from jadwal where id_jadwal=" . $params;
		return $this->db->query($sql, $params);
	}
}

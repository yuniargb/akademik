<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public $table = 'nilai';
    public $id    = 'nip';

    public function __construct()
    {
        parent::__construct();
    }


    public function get_data($nip)
    {
        $sql = "SELECT *
        FROM siswa s
        INNER JOIN agama a ON s.agama=a.id_agama
        INNER JOIN kelas k ON s.id_kelas=k.id_kelas
        INNER JOIN jadwal j ON j.kelas=k.id_kelas
        WHERE j.nip='" . $nip . "'";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function get_nilai($nip)
    {
        $sql = "SELECT *
        FROM nilai n
        INNER JOIN siswa s ON s.nis=n.nis
        INNER JOIN kelas k ON s.id_kelas=k.id_kelas
        INNER JOIN mapel m ON n.id_mapel=m.id_mapel
        WHERE n.nip='" . $nip . "'";

        return $this->db->query($sql);
    }

    public function laporan($kls)
    {
        $sql = "SELECT *
        FROM nilai n
        INNER JOIN siswa s ON s.nis=n.nis
        INNER JOIN kelas k ON s.id_kelas=k.id_kelas
        INNER JOIN mapel m ON n.id_mapel=m.id_mapel
        WHERE k.id_kelas='" . $kls . "'
        ORDER BY m.id_mapel";

        return $this->db->query($sql);
    }
    public function cetak_nilai($kelas, $mapel, $nip)
    {
        $sql = "SELECT *
        FROM nilai n
        INNER JOIN siswa s ON s.nis=n.nis
        INNER JOIN kelas k ON s.id_kelas=k.id_kelas
        INNER JOIN mapel m ON n.id_mapel=m.id_mapel
        INNER JOIN guru g ON n.nip=g.nip
        WHERE n.nip='" . $nip . "' AND s.id_kelas = '" . $kelas . "' AND m.id_mapel = '" . $mapel . "'";

        return $this->db->query($sql);
    }

    public function get_kelas($nip)
    {
        $sql = "SELECT *
        FROM nilai n
        INNER JOIN siswa s ON s.nis=n.nis
        INNER JOIN kelas k ON s.id_kelas=k.id_kelas
        INNER JOIN jadwal j ON j.kelas=k.id_kelas
        INNER JOIN mapel m ON n.id_mapel=m.id_mapel
        WHERE n.nip='" . $nip . "'
        GROUP BY k.id_kelas";

        return $this->db->query($sql);
    }


    public function get_mapel($nip)
    {
        $sql = "SELECT *
        FROM jadwal j
        INNER JOIN mapel m ON j.id_mapel=m.id_mapel
        WHERE j.nip='" . $nip . "'
        GROUP BY m.id_mapel";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }


    public function edit($id)
    {
        $sql = "SELECT *
        FROM nilai n
        INNER JOIN siswa s ON s.nis=n.nis
        INNER JOIN kelas k ON s.id_kelas=k.id_kelas
        INNER JOIN mapel m ON n.id_mapel=m.id_mapel
        INNER JOIN guru g ON n.nip=g.nip
        WHERE n.id_nilai='" . $id . "'";

        return $this->db->query($sql);
    }

    public function cekNilai($id)
    {
        $sql = "SELECT *
        FROM nilai n
        INNER JOIN siswa s ON s.nis=n.nis
        INNER JOIN kelas k ON s.id_kelas=k.id_kelas
        INNER JOIN mapel m ON n.id_mapel=m.id_mapel
        INNER JOIN guru g ON n.nip=g.nip
        WHERE s.nis='" . $id . "'";

        return $this->db->query($sql);
    }

    public function update($data, $id)
    {
        $this->db->where('id_nilai', $id);
        return $this->db->update('nilai', $data);
    }


    public function delete($params)
    {
        $sql = "delete from nilai where id_nilai=" . $params;
        return $this->db->query($sql, $params);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan_model extends CI_Model
{
    public $table = 'keuangan';
    // public $id    = 'id_pembayaran';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $sql = "SELECT * FROM keuangan k
        INNER JOIN siswa s ON k.nis=s.nis
        INNER JOIN kelas t ON s.id_kelas=t.id_kelas";

        return $this->db->query($sql);
    }
    public function laporan($awal, $akhir)
    {
        $sql = "SELECT * FROM keuangan k
        INNER JOIN siswa s ON k.nis=s.nis
        INNER JOIN kelas t ON s.id_kelas=t.id_kelas
        WHERE k.tgl_bayar BETWEEN '" . $awal . "' AND '" . $akhir . "'";

        return $this->db->query($sql);
    }

    public function cekBayar($nis)
    {
        $sql = "SELECT * FROM keuangan k
        INNER JOIN siswa s ON k.nis=s.nis
        INNER JOIN kelas t ON s.id_kelas=t.id_kelas
        WHERE k.nis='" . $nis . "'";

        return $this->db->query($sql);
    }
    public function cekTglBayar($nis, $bln)
    {
        $sql = "SELECT * FROM keuangan k
        INNER JOIN siswa s ON k.nis=s.nis
        INNER JOIN kelas t ON s.id_kelas=t.id_kelas
        WHERE k.nis='" . $nis . "'
        AND k.pembayaran = '" . $bln . "'";

        $cek = $this->db->query($sql)->row();

        if ($cek) {
            $hasil = date('d-m-Y', strtotime($cek->tgl_bayar));
        } else {
            $hasil = "<p class='text-danger text-center'><b>-</b></p>";
        }
        return $hasil;
    }
    public function cekJmlBayar($nis, $bln)
    {
        $sql = "SELECT * FROM keuangan k
        INNER JOIN siswa s ON k.nis=s.nis
        INNER JOIN kelas t ON s.id_kelas=t.id_kelas
        WHERE k.nis='" . $nis . "'
        AND k.pembayaran = '" . $bln . "'";

        $cek = $this->db->query($sql)->row();

        if ($cek) {
            $hasil = $cek->bayar;
        } else {
            $hasil = "<p class='text-danger'><b>Belum Bayar</b></p>";
        }
        return $hasil;
    }

    public function cetakKwitansi($nis, $bln)
    {
        $sql = "SELECT * FROM keuangan k
        INNER JOIN siswa s ON k.nis=s.nis
        INNER JOIN kelas t ON s.id_kelas=t.id_kelas
        WHERE k.nis='" . $nis . "'
        AND k.pembayaran = '" . $bln . "'";

        $cek = $this->db->query($sql)->row();

        if ($cek) {
            $hasil = '<a class="btn btn-primary" target="_blank" href="' . base_url() . 'index.php/keuangan/cetak/' . $cek->id_keuangan . '">
                        Cetak Kwitansi</a>';
        } else {
            $hasil = "<p class='text-danger text-center'><b>-</b></p>";
        }
        return $hasil;
    }

    public function kwitansi($id = null)
    {
        $sql = "SELECT * FROM keuangan k
        INNER JOIN siswa s ON k.nis=s.nis
        INNER JOIN kelas t ON s.id_kelas=t.id_kelas
        WHERE k.id_keuangan = '" . $id . "'";

        return $this->db->query($sql);
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // public function edit($params)
    // {
    //     $sql = "SELECT * FROM jurusan WHERE id_jurusan = ?";
    //     $query = $this->db->query($sql, $params);

    //     if ($query->num_rows() > 0) {
    //         $result = $query->row_array();
    //         $query->free_result();
    //         return $result;
    //     } else {
    //         return array();
    //     }
    // }

    public function update($params)
    {
        $sql = "UPDATE jurusan SET nama_jurusan = ? where id_jurusan= ?";
        return $this->db->query($sql, $params);
    }


    public function delete($params)
    {
        $sql = "delete from keuangan where id_pembayaran=" . $params;
        return $this->db->query($sql, $params);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wawancara_model extends CI_Model
{
    public function select()
    {
        $query = $this->db->query("SELECT * FROM wawancara LIMIT 10");
        return $query->result_array();
    }

    public function selectWithLayanan($layanan)
    {
        $query = $this->db->query("SELECT * FROM wawancara WHERE wawancara_layanan_id = '$layanan'");
        return $query->result_array();
    }

    public function selectWithNameOfLayanan()
    {
        $query = $this->db->query("SELECT wawancara_id, wawancara_nama, wawancara_isi, wawancara_siapa_yang_diwawancara, wawancara_gambar, layanan_id, layanan_nama FROM wawancara JOIN layanan ON wawancara.wawancara_layanan_id = layanan.layanan_id");
        return $query->result_array();
    }

    public function insert($data)
    {
        $nama = $data["nama"];
        $role = $data["role"];
        $komentar = $data["komentar"];
        $image = $data["image"];
        $idLayanan = $data["idLayanan"];
        return $this->db->query("INSERT INTO wawancara (wawancara_nama, wawancara_siapa_yang_diwawancara, wawancara_isi, wawancara_gambar, wawancara_layanan_id) VALUES ('$nama','$role','$komentar','$image',$idLayanan)");
    }

    public function update($data){
        $nama = $data["nama"];
        $role = $data["role"];
        $komentar = $data["komentar"];
        $image = $data["wawancara_gambar"];
        $idLayanan = $data["idLayanan"];
        $idLayananWhere = $data["idLayananWhere"];
        return $this->db->query("UPDATE wawancara SET wawancara_nama = '$nama', wawancara_siapa_yang_diwawancara = '$role', wawancara_isi = '$komentar', wawancara_gambar = '$image', wawancara_layanan_id = $idLayanan WHERE wawancara_id = $idLayananWhere");
    }

    public function delete($data){
        return $this->db->query("DELETE FROM wawancara WHERE wawancara_id = $data");
    }

    public function count(){
        return $this->db->query("SELECT COUNT(*) AS JUMLAH FROM wawancara")->row_array();
    }
}


/* End of file Wawancara_model.php and path /application/models/Wawancara_model.php */

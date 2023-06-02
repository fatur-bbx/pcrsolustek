<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Projek_terlibat_model extends CI_Model 
{
    public function select()
    {
        return $this->db->query("SELECT * FROM projek_terlibat JOIN layanan ON layanan.layanan_id = projek_terlibat.projek_terlibat_layanan_id")->result_array();
    }                        
    

    public function insert($data){
        $nama = $data["nama_projek"];
        $desc = $data["deskripsi_projek"];
        $layanan = $data["layanan"];
        $po = $data["projek_owner"];
        $tanggal = $data["tanggal"];
        return $this->db->query("INSERT INTO projek_terlibat (projek_terlibat_nama, projek_terlibat_deskripsi, projek_terlibat_layanan_id, projek_terlibat_projek_owner, projek_terlibat_tanggal) VALUES ('$nama','$desc',$layanan, '$po', '$tanggal')");
    }

    public function update($data){
        $id = $data["id"];
        $nama = $data["nama_projek"];
        $desc = $data["deskripsi_projek"];
        $layanan = $data["layanan"];
        $po = $data["projek_owner"];
        $tanggal = $data["tanggal"];
        return $this->db->query("UPDATE projek_terlibat SET projek_terlibat_nama = '$nama', projek_terlibat_deskripsi = '$desc', projek_terlibat_layanan_id = $layanan, projek_terlibat_projek_owner = '$po', projek_terlibat_tanggal = '$tanggal' WHERE projek_terlibat_id = $id");
    }

    public function delete($id){
        return $this->db->query("DELETE FROM projek_terlibat WHERE projek_terlibat_id = $id");
    }

    public function count(){
        return $this->db->query("SELECT COUNT(*) AS JUMLAH FROM projek_terlibat")->row_array();
    }
}


/* End of file Projek_terlibat_model.php and path /application/models/Projek_terlibat_model.php */

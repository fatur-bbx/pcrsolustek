<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class AboutPerusahaan_model extends CI_Model 
{
    public function selectProfil()
    {
        return $this->db->query("SELECT * FROM profil")->row_array();
    }                        
     
    public function update($data){
        $nama = $data["profil_nama_badan_usaha"];
        $status = $data["profil_status_badan_usaha"];
        $alamat = $data["profil_alamat_badan_usaha"];
        $pendirian = $data["profil_akte_pendirian"];
        $perubahan = $data["profil_akte_perubahan"];
        $nib = $data["profil_nib"];
        $npwp = $data["profil_npwp"];
        return $this->db->query("UPDATE profil SET profil_nama_badan_usaha = '$nama', profil_status_badan_usaha = '$status', profil_alamat_badan_usaha = '$alamat', profil_akte_pendirian = '$pendirian', profil_akte_perubahan = '$perubahan', profil_nib = '$nib', profil_npwp = '$npwp'");
    }

    public function selectTentangPerusahaan(){
        return $this->db->query("SELECT * FROM tentang")->row_array();
    }

    public function updateTentangPerusahaan($data){
        $singkat = $data["tentang_singkat"];
        $deskripsi = $data["tentang_deskripsi"];
        return $this->db->query("UPDATE tentang SET tentang_singkat = '$singkat', tentang_deskripsi = '$deskripsi'");
    }
}


/* End of file AboutPerusahaan_model.php and path /application/models/AboutPerusahaan_model.php */

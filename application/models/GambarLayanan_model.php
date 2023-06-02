<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class GambarLayanan_model extends CI_Model 
{
    public function select()
    {
        return $this->db->query("SELECT * FROM gambar_layanan")->result_array();
    }                        
    
    public function selectId($id){
        return $this->db->query("SELECT gambar_layanan_id, gambar_layanan_nama_file, gambar_layanan_layanan_id, layanan.layanan_nama, isSampul FROM gambar_layanan JOIN layanan ON layanan.layanan_id = gambar_layanan.gambar_layanan_layanan_id WHERE gambar_layanan_layanan_id = $id")->result_array();
    }

    public function insert($data){
        $nama_file = $data['nama'];
        $id = $data['id'];
        return $this->db->query("INSERT INTO gambar_layanan (gambar_layanan_nama_file,gambar_layanan_layanan_id) VALUE ('$nama_file',$id)");
    }

    public function delete($id){
        return $this->db->query("DELETE FROM gambar_layanan WHERE gambar_layanan_id = $id");
    }

    public function makeitsampul($id, $layanan){
        $this->db->query("UPDATE gambar_layanan SET isSampul = 0 WHERE gambar_layanan_layanan_id = $layanan");
        return $this->db->query("UPDATE gambar_layanan SET isSampul = 1 WHERE gambar_layanan_id = $id AND gambar_layanan_layanan_id = $layanan");
    }
}


/* End of file GambarLayanan_model.php and path /application/models/GambarLayanan_model.php */
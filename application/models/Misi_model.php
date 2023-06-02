<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Misi_model extends CI_Model 
{
    public function select()
    {
        $query = $this->db->query("SELECT * FROM misi ORDER BY misi_id ASC");
        return $query->result_array();
    }                        

    public function insert($data){
        $isi = $data["misi_deskripsi"];
        $query = $this->db->query("INSERT INTO misi (misi_deskripsi) VALUE('$isi')");
    }

    public function update($data){
        $id = $data["misi_id"];
        $isi = $data["misi_deskripsi"];
        $query = $this->db->query("UPDATE misi SET misi_deskripsi = '$isi' WHERE misi_id = $id");
    }

    public function delete($data){
        $id = $data["misi_id"];
        $query = $this->db->query("DELETE FROM misi WHERE misi_id = $id");
    }
}

/* End of file Misi_model.php and path /application/models/Misi_model.php */

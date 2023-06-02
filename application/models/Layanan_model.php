<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Layanan_model extends CI_Model 
{
    public function select(){
        $query = $this->db->query("SELECT * FROM layanan JOIN gambar_layanan ON gambar_layanan.gambar_layanan_layanan_id = layanan.layanan_id WHERE gambar_layanan.isSampul = 1");
        return $query->result_array();
    }
    public function selectAll()
    {
        $query = $this->db->query('SELECT * FROM layanan');
        return $query->result_array();
    }                        
    
    public function selectID($layanan)
    {
        $query = $this->db->query("SELECT * FROM layanan WHERE layanan_id = $layanan");
        return $query->row_array();
    }                      
           
    public function insert($data){
        $layanan_nama = $data['layanan_nama'];
        $layanan_deskripsi = $data['layanan_deskripsi'];
        $query = $this->db->query("INSERT INTO layanan (layanan_nama,layanan_deskripsi) VALUE('$layanan_nama','$layanan_deskripsi')");
    }

    public function update($data){
        $layanan_id = $data['layanan_id'];
        $layanan_nama = $data['layanan_nama'];
        $layanan_deskripsi = $data['layanan_deskripsi'];
        $query = $this->db->query("UPDATE layanan SET layanan_nama = '$layanan_nama', layanan_deskripsi = '$layanan_deskripsi' WHERE layanan_id = $layanan_id");
    }

    public function delete($id){
        $layanan_id = $id;
        $query = $this->db->query("DELETE FROM layanan WHERE layanan_id = $layanan_id");
        return $query;
    }

    public function countAll(){
        return $this->db->query("SELECT COUNT(*) as JUMLAH FROM layanan")->row_array();
    }

    public function selectIDandNama(){
        return $this->db->query("SELECT layanan_id, layanan_nama FROM layanan")->result_array();
    }
}


/* End of file Layanan_model.php and path /application/models/Layanan_model.php */

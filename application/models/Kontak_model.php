<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Kontak_model extends CI_Model 
{
    public function select()
    {
        $query = $this->db->query("SELECT * FROM kontak");
        return $query->row_array();
    }                        
    
    public function update1($data){
        $query = $this->db->query("UPDATE kontak SET kontak_nomor_hp = '$data'");
    }

    public function update2($data){
        $query = $this->db->query("UPDATE kontak SET kontak_whatsapp = '$data'");
    }

    public function update3($data){
        $query = $this->db->query("UPDATE kontak SET kontak_email = '$data'");
    }

    public function update4($data){
        $query = $this->db->query("UPDATE kontak SET kontak_instagram = '$data'");
    }
}


/* End of file Kontak_model.php and path /application/models/Kontak_model.php */

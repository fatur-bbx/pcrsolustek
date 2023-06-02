<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Tentang_model extends CI_Model 
{
    public function select()
    {
        $query = $this->db->query("SELECT * FROM tentang");
        return $query->result_array();
    }

    public function updatevisi($visi){
        $query = $this->db->query("UPDATE tentang SET tentang_visi = '$visi'");
    }
}


/* End of file Tentang_model.php and path /application/models/Tentang_model.php */

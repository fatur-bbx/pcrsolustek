<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Profil_model extends CI_Model 
{
    public function select()
    {
        $query = $this->db->query("SELECT * FROM profil");
        return $query->result_array();
    }                        
                        
}


/* End of file Profil_model.php and path /application/models/Profil_model.php */

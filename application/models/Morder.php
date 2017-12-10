<?php 
class Morder extends CI_Model{
 
	function __construct(){
            parent::__construct();
                
    }
    
    function count_order(){
        return $this->db->get('pc_order')->num_rows();
    }
        
        
}
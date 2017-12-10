<?php 
class Mvisitor extends CI_Model{
 
	function __construct(){
            parent::__construct();
    }

    function create(){
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];
        if (filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        }elseif (filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }else{
            $ip = $remote;
        }
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $data = array(
                    'ip_address' => $ip,
                    'device' => $hostname,
                    'browser' => $browser
                    //'time' => "CURRENT_TIMESTAMP"
        );
        return $this->db->insert('oc_visitor', $data);
    }

    function read(){
        $this->db->order_by("id_visitor","desc");
        return $this->db->get('oc_visitor')->result();
    }

    function read_id($id){ 
        $this->db->where("id_visitor", $id); 
        return $this->db->get('oc_visitor')->result();
    }

    function delete($id){
        $this->db->where('id_visitor', $id);
        $this->db->delete('oc_visitor');
    }

    function count_visitor(){
        return $this->db->get('oc_visitor')->num_rows();
    }
        
}
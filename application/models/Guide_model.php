<?php
class Guide_model extends CI_Model{
    private $table = "videos";

    public function __construct(){
        parent::__construct();
    }

    public function save($_data){
        return $this->db->insert_batch($this->table,$_data);
    }

    public function get_all(){
        return $this->db->get_where($this->table)->result();
    }

    function delete($_id)
    {
        return $this->db->delete($this->table,array('video_id'=>$_id));
    }
}
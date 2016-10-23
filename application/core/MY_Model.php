<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_Model {
    // Ten table
    public $table = '';
    public function Create($table,$data)
    {

    }
    public function read($table,$where){
        if(isset($id)) return false;
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $result = $this->db->get();
        return $result->result_array();

    }
    public function read_one($table, $id){
        if(isset($id)) return false;
        $this->db->select('*');
        $this->db->where($table.'_id',$id);
        $result = $this->db->get();
        return $result;
    }
    public function update($table,$where,$data)
    {

    }
    public function delete($table, $where)
    {

    }
    public function list_all($table, $where)
    {

    }
}
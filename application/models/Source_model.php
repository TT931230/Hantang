<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 19:20
 */
class Source_model extends CI_Model
{
    public $source_location;
    public $status;
    public $source_name;
    public $link_url;
    public $sequence;
    public $type;
    public $updater;
    public $creator;
    public $first_level;
    public $second_level;
    public $third_level;
    public $create_time;
    public $update_time;
    public function __construct()
    {
        parent::__construct();
    }
    public function querySource(){
        $this->db->where('status',$_POST['status']);
        if($_POST['source_name']){
            $this->db->where('source_name',$_POST['source_name']);
        }
        if($_POST['first_level']){
            $this->db->where('first_level',$_POST['first_level']);
        }
        if($_POST['second_level']){
            $this->db->where('second_level',$_POST['second_level']);
        }
        if($_POST['third_level']){
            $this->db->where('third_level',$_POST['third_level']);
        }
        $this->db->where('type',$_POST['type']);
        $this->db->from('source');
        $this->db->order_by("sequence"," desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insertSource(){
        $this->source_location    = $_POST['source_location'];
        $this->status    = $_POST['status'];
        $this->source_name    = $_POST['source_name'];
        $this->link_url    = $_POST['link_url'];
        $this->sequence    = $_POST['sequence'];
        $this->type    = $_POST['type'];
        $this->updater    = $_POST['updater'];
        $this->creator    = $_POST['creator'];
        $this->first_level    = $_POST['first_level'];
        $this->second_level    = $_POST['second_level'];
        $this->third_level    = $_POST['third_level'];
        $this->create_time = time();
        $this->update_time = time();
        $this->db->insert('source', $this);
    }
    public function updateSource(){
        $this->status    = $_POST['status'];
        $this->sequence    = $_POST['sequence'];
        $this->updater    = $_POST['updater'];
        $this->update_time = time();
        $this->db->update('source', $this, array('id' => $_POST['id']));
    }
}
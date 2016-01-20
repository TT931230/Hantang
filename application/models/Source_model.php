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
    public function querySource($querycontent){
        $this->db->where('status',$querycontent['status']);
        if($_POST['source_name']){
            $this->db->where('source_name',$querycontent['source_name']);
        }
        if($_POST['first_level']){
            $this->db->where('first_level',$querycontent['first_level']);
        }
        if($_POST['second_level']){
            $this->db->where('second_level',$querycontent['second_level']);
        }
        if($_POST['third_level']){
            $this->db->where('third_level',$querycontent['third_level']);
        }
        $this->db->where('type',$querycontent['type']);
        $this->db->from('source');
        $this->db->order_by("sequence"," desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insertSource($insertcontent){
        $this->source_location    = $insertcontent['source_location'];
        $this->status    = $insertcontent['status'];
        $this->source_name    = $insertcontent['source_name'];
        $this->link_url    = $insertcontent['link_url'];
        $this->sequence    = $insertcontent['sequence'];
        $this->type    = $insertcontent['type'];
        $this->updater    = $insertcontent['updater'];
        $this->creator    = $insertcontent['creator'];
        $this->first_level    = $insertcontent['first_level'];
        $this->second_level    = $insertcontent['second_level'];
        $this->third_level    = $insertcontent['third_level'];
        $this->create_time = time();
        $this->update_time = time();
        $this->db->insert('source', $this);
    }
    public function updateSource($updatecontent){
        $this->status    = $updatecontent['status'];
        $this->sequence    = $updatecontent['sequence'];
        $this->updater    = $updatecontent['updater'];
        $this->update_time = time();
        $this->db->update('source', $this, array('id' => $updatecontent['id']));
    }
}
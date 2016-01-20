<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/20
 * Time: 9:22
 */
class Keyword_model extends CI_Model
{
    public $keyword;
    public $type;
    public $creator;
    public $sequence;
    public $updater;
    public $first_level;
    public $second_level;
    public $third_level;
    public $create_time;
    public $update_time;
    public function __construct()
    {
        parent::__construct();
    }
    public function queryKeyword($querycontent){
        if($querycontent['first_level']){
            $this->db->where('first_level',$querycontent['first_level']);
        }
        if($querycontent['second_level']){
            $this->db->where('second_level',$querycontent['second_level']);
        }
        if($querycontent['third_level']){
            $this->db->where('third_level',$querycontent['third_level']);
        }
        if($querycontent['type']){
            $this->db->where('type',$querycontent['type']);
        }
        $this->db->from('keyword');
        $this->db->order_by("keyword"," desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insertKeyword($insertcontent){
        $this->source_location    = $insertcontent['keyword'];
        $this->status    = $insertcontent['type'];
        $this->sequence    = $_POST['sequence'];
        $this->type    = $_POST['type'];
        $this->updater    = $_POST['updater'];
        $this->creator    = $_POST['creator'];
        $this->first_level    = $_POST['first_level'];
        $this->second_level    = $_POST['second_level'];
        $this->third_level    = $_POST['third_level'];
        $this->create_time = time();
        $this->update_time = time();
        $this->db->insert('keyword', $this);
    }
    public function updateKeyword($updatecontent){
        $this->sequence    = $_POST['sequence'];
        $this->updater    = $_POST['updater'];
        $this->update_time = time();
        $this->db->update('keyword', $this, array('id' => $_POST['id']));
    }
}
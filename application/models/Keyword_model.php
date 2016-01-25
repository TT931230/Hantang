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
    public $creator;
    public $status;
    public $sequence;
    public $updater;
    public $first_level;
    public $second_level;
    public $third_level;
    public $create_time;
    public $update_time;
    public $keyword_remark;
    public function __construct()
    {
        parent::__construct();
    }
    public function queryKeyword($querycontent){
        if($querycontent['keyword']){
            $this->db->where('keyword',$querycontent['keyword']);
        }
        if($querycontent['first_level']){
            $this->db->where('first_level',$querycontent['first_level']);
        }
        if($querycontent['second_level']){
            $this->db->where('second_level',$querycontent['second_level']);
        }
        if($querycontent['third_level']){
            $this->db->where('third_level',$querycontent['third_level']);
        }
        if($querycontent['status']){
            $this->db->where('status',$querycontent['status']);
        }
        $this->db->from('keyword');
        $this->db->order_by("keyword"," desc");
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insertKeyword($insertcontent){
        if(count(queryKeyword($insertcontent))<1){
            date_default_timezone_set("UTC");
            $this->keyword    = $insertcontent['keyword'];
            $this->status    = $insertcontent['status'];
            $this->sequence    = $insertcontent['sequence'];
            $this->updater    = $insertcontent['updater'];
            $this->creator    = $insertcontent['creator'];
            $this->first_level    = $insertcontent['first_level'];
            $this->second_level    = $insertcontent['second_level'];
            $this->third_level    = $insertcontent['third_level'];
            $this->keyword_remark = $insertcontent['keyword_remark'];
            $this->create_time = date("y-m-d",time());
            $this->update_time = date("y-m-d",time());
            $this->db->insert('keyword', $this);
        }
    }
    public function updateKeyword($updatecontent){
        $this->sequence    = $updatecontent['sequence'];
        $this->updater    = $updatecontent['updater'];
        $this->update_time = time();
        $this->db->update('keyword', $this, array('id' => $updatecontent['id']));
    }
}
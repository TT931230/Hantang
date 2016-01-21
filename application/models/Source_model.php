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
        if($querycontent['status']){
            $this->db->where('status',$querycontent['status']);
        }
        if($querycontent['source_name']){
            $this->db->where('source_name',$querycontent['source_name']);
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
        if($querycontent['type']){
            $this->db->where('type',$querycontent['type']);
        }
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
        $this->source_remark  = $insertcontent['source_remark'];
        $this->create_time = date("y-m-d",time());
        $this->update_time = date("y-m-d",time());
        $this->db->insert('source', $this);
    }
    public function updateSource($updatecontent){
        $this->status    = $updatecontent['status'];
        $this->sequence    = $updatecontent['sequence'];
        $this->updater    = $updatecontent['updater'];
        $this->update_time = time();
        $this->db->update('source', $this, array('id' => $updatecontent['id']));
    }
    public function insertvideoSource($insertvideo){
        $this->source_location    = $insertvideo['source_location'];
        $this->status    = $insertvideo['status'];
        $this->source_name    = $insertvideo['source_name'];
        $this->link_url    = $insertvideo['link_url'];
        $this->sequence    = $insertvideo['sequence'];
        $this->type    = $insertvideo['type'];
        $this->link_url    = $insertvideo['link_url'];
        $this->updater    = $insertvideo['updater'];
        $this->creator    = $insertvideo['creator'];
        $this->first_level    = $insertvideo['first_level'];
        $this->second_level    = $insertvideo['second_level'];
        $this->third_level    = $insertvideo['third_level'];
        $this->source_remark  = $insertvideo['source_remark'];
        $this->create_time = date("y-m-d",time());
        $this->update_time = date("y-m-d",time());
        $this->db->insert('source', $this);
        $insertedid=$this->db->insert_id();
        $updatearray=array(
            'type'=>'videoimg',
            'updater'=>$insertvideo['updater'],
            'update_time'=>date("y-m-d",time()),
            'third_level'=>$insertedid
        );
        $this->db->update('source', $this, array('id' => $insertvideo['videoimg']));
        for($i=0;$i<size($insertvideo['keyword'])-1;$i++){
            $insertrelation=array(
                'keyword_id'=>$insertvideo['keyword'][$i],
                'source_id'=>$insertedid
            );
            $this->db->insert('keyword_source_relation', $insertrelation);
        }
    }
}
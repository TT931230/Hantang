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
    public $index;
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
    
    //insert source
    public function insertSource($insertcontent){
    	date_default_timezone_set("UTC");
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
    
    //update source
    public function updateSource($updatecontent){
        $this->status    = $updatecontent['status'];
        $this->sequence    = $updatecontent['sequence'];
        $this->updater    = $updatecontent['updater'];
        $this->update_time = time();
        $this->db->update('source', $this, array('id' => $updatecontent['id']));
    }
    
    //insert image
    public function insertimg($insertimg){
        date_default_timezone_set("UTC");
        $data=array(
            'source_location' => $insertimg['source_location'],
            'status' => $insertimg['status'],
            'source_name' => $insertimg['source_name'],
            'link_url' => $insertimg['link_url'],
            'sequence' => $insertimg['sequence'],
            'type' => $insertimg['type'],
            'updater' => $insertimg['updater'],
            'creator' => $insertimg['creator'],
            'first_level' => $insertimg['first_level'],
            'second_level' => $insertimg['second_level'],
            'third_level' => $insertimg['third_level'],
            'source_remark' => $insertimg['source_remark'],
            'create_time' => date("y-m-d",time()),
            'update_time' => date("y-m-d",time())
        );
        $this->db->insert('source',$data);

    }
    
    //insert video
    public function insertvideoSource($insertvideo){
        date_default_timezone_set("UTC");
        $data=array(
            'source_location' => $insertvideo['source_location'],
            'status' => $insertvideo['status'],
            'source_name' => $insertvideo['source_name'],
            'link_url' => $insertvideo['link_url'],
            'sequence' => $insertvideo['sequence'],
            'type' => $insertvideo['type'],
            'updater' => $insertvideo['updater'],
            'creator' => $insertvideo['creator'],
            'first_level' => $insertvideo['first_level'],
            'second_level' => $insertvideo['second_level'],
            'third_level' => $insertvideo['third_level'],
            'source_remark' => $insertvideo['source_remark'],
            'create_time' => date("y-m-d",time()),
            'update_time' => date("y-m-d",time())
        );

        $this->db->insert('source',$data);
        $insertedid=$this->db->insert_id();

        for($i=0;$i<count($insertvideo['keywordid'])-1;$i++){
            $insertrelation=array(
                'keyword_id'=>$insertvideo['keywordid'][$i],
                'source_id'=>$insertedid               
            );
            $this->db->insert('keyword_source_relation', $insertrelation);
        }
        return $insertedid;
    }
//     public function insertLocalImg($insertLocalImgArray){
//         date_default_timezone_set("UTC");

//         $data=array(
//             'source_location' => $insertLocalImgArray['source_location'],
//             'status' => $insertLocalImgArray['status'],
//             'source_name' => $insertLocalImgArray['source_name'],
//             'link_url' => $insertLocalImgArray['link_url'],
//             //'sequence' => $insertvideo['sequence'],
//             'type' => $insertLocalImgArray['type'],
//             'updater' => $insertLocalImgArray['updater'],
//             'creator' => $insertLocalImgArray['creator'],
//             'first_level' => $insertLocalImgArray['first_level'],
//             //'second_level' => $insertvideo['second_level'],
//             'third_level' => $insertLocalImgArray['third_level'],
//             //'source_remark' => $insertvideo['source_remark'],
//             //$this->index = $insertvideo['index'];
//             'create_time' => $insertLocalImgArray['create_time'],
//             'update_time' => $insertLocalImgArray['update_time']
//         );

//         $this->db->insert('source', $data);
//     }

}
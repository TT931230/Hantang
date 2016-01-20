<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/18
 * Time: 11:43
 */
class Page_data_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_page_data($languageType,$url){
        $this->lang->load('test',$languageType);
        $data = array(
            'url' => $url,
            'dogandhorse' => $this->lang->line('dogandhorse'),
            'home' => $this->lang->line('home'),
            'about' => $this->lang->line('about'),
            'ul' => $this->lang->line('ul'),
            'awoe' => $this->lang->line('awoe'),
            'music' => $this->lang->line('music'),
            'join' => $this->lang->line('join'),
            'language' => $this->lang->line('language'),
            'search' => $this->lang->line('search'),
            'platform' => $this->lang->line('platform'),
            'partner' => $this->lang->line('partner'),
            'introduce' => $this->lang->line('introduce'),
            'brandname' => $this->lang->line('brandname'),
            'type' => $this->lang->line('type'),
            'location' => $this->lang->line('location'),
            'time' => $this->lang->line('time'),
            'keyword' => $this->lang->line('keyword'),
            'seniorsearch' => $this->lang->line('seniorsearch'),
            'inputtip' => $this->lang->line('inputtip'),
            'commit' => $this->lang->line('commit'),
            'reset' =>  $this->lang->line('reset'),
            'seasontype' => $this->lang->line('displayseason'),
            'displaytype' => $this->lang->line('displaytype'),
            'yeartype' => $this->lang->line('yeartype'),
            'locationtype' =>$this->lang->line('locationtype'),
            'typetype' => $this->lang->line('typetype'),
            'activetype' => $this->lang->line('activetype'),
            'homenav' => '',
            'aboutnav' =>  '',
            'ulnav' => '',
            'awoenav' => '',
            'musicnav' => '',
            'joinnav' => ''
        );
        switch($url){
            case '/ul':
                $data['ulnav']='active';
                break;
            case '/about':
                $data['aboutnav']='active';
                break;
            case '/awoe':
                $data['awoenav']='active';
                break;
            case '/home':
                $data['homenav']='active';
                break;
            case '/join':
                $data['joinnav']='active';
                break;
            case '/music':
                $data['musicnav']='active';
                break;
            case '/partner':
                $data['aboutnav']='active';
                break;
            case '/platform':
                $data['aboutnav']='active';
                break;
        }
        return $data;
    }

    public function query_sources($source_info){
        $this->db->where('status',$source_info['status']);
        if($source_info['first_level']){
            $this->db->where('first_level',$source_info['first_level']);
        }
        if($source_info['second_level']){
            $this->db->where('second_level',$source_info['second_level']);
        }
        if($source_info['third_level']){
            $this->db->where('third_level',$source_info['third_level']);
        }
        $this->db->where('type',$source_info['type']);
        $this->db->from('source');
        $this->db->order_by("sequence"," desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function query_departments($status){
        $this->db->from('department');
        $this->db->where('status',$status['d_status']);
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $departments=$query->result_array();
        $return_array=array();
        for($i=0;$i<count($departments);$i++){
            $this->db->from('jobinfo');
            $this->db->where('status',$status['j_status']);
            $this->db->where('department_id',$departments[$i]['id']);
            $this->db->order_by("sequence","asc");
            $query = $this->db->get();
            $jobs=$query->result_array();
            $temp_array=array(
                'department'=>$departments[$i]['department'],
                'job'=>$jobs
            );
            array_push($return_array,$temp_array);
        }
        return $return_array;
    }

    public function query_tags($tag_info){
        $data=array(
            'search_brandname' => array(
                array('oid' => '100001', 'content' => '品牌1'),
                array('oid' => '100002', 'content' => '品牌2'),
                array('oid' => '100003', 'content' => '品牌3'),
                array('oid' => '100004', 'content' => '品牌4'),
                array('oid' => '100005', 'content' => '品牌5')
            ),
            'search_type' => array(
                array('oid' => '100006', 'content' => '类型1'),
                array('oid' => '100007', 'content' => '类型2'),
                array('oid' => '100008', 'content' => '类型3'),
                array('oid' => '100009', 'content' => '类型4'),
                array('oid' => '100010', 'content' => '类型5')
            ),
            'search_keyword' => array(
                array('oid' => '100011', 'content' => '关键词1'),
                array('oid' => '100012', 'content' => '关键词2'),
                array('oid' => '100013', 'content' => '关键词3'),
                array('oid' => '100014', 'content' => '关键词4'),
                array('oid' => '100015', 'content' => '关键词5')
            ),
            'search_location' => array(
                array('oid' => '100016', 'content' => '地址1'),
                array('oid' => '100017', 'content' => '地址2'),
                array('oid' => '100018', 'content' => '地址3'),
                array('oid' => '100019', 'content' => '地址4'),
                array('oid' => '100020', 'content' => '地址5')
            ),
            'search_time' => array(
                array('oid' => '100021', 'content' => '时间1'),
                array('oid' => '100022', 'content' => '时间2'),
                array('oid' => '100023', 'content' => '时间3'),
                array('oid' => '100024', 'content' => '时间4'),
                array('oid' => '100025', 'content' => '时间5')
            )
        );
        return $data;
    }

    public function query_keywords($keyword_info){
        $this->db->from('keyword');
        $this->db->where('status',$keyword_info['status']);
        if($keyword_info['first_level']){
            $this->db->where('first_level',$keyword_info['first_level']);
        }
        if($keyword_info['second_level']){
            $this->db->where('second_level',$keyword_info['second_level']);
        }
        if($keyword_info['third_level']){
            $this->db->where('third_level',$keyword_info['third_level']);
        }
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $keywords=$query->result_array();
        $return_array=array();
        for($i=0;$i<count($keywords);$i++){
            $temp_array=$keywords[$i];
            array_push($return_array,$temp_array);
        }
        return $return_array;
    }
}
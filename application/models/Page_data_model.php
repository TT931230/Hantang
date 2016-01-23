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
        $this->db->from('source');
        $this->db->where('first_level','footer');
        $returnquery=$this->db->get()->result_array();
        $weixin="";
        $weibo="";
        $youku="";
        $wangyi="";
        $tengxun="";
        $jianshu="";
        $douban="";
        $footerlogo1="";
        $footerlogo2="";
        $footerlogo3="";
        $footerlogo4="";
        $guanzhu="";
        $erwei="";
        $guanbi="";
        for($i=0;$i<count($returnquery);$i++){
            switch ($returnquery[$i]['second_level']){
                case 'weixin':
                    $weixin=$returnquery[$i]['source_location'];
                    break;
                case 'weibo':
                    $weibo=$returnquery[$i]['source_location'];
                    break;
                case 'youku':
                    $youku=$returnquery[$i]['source_location'];
                    break;
                case 'douban':
                    $douban=$returnquery[$i]['source_location'];
                    break;
                case 'tengxun':
                    $tengxun=$returnquery[$i]['source_location'];
                    break;
                case 'jianshu':
                    $jianshu=$returnquery[$i]['source_location'];
                    break;
                case 'wangyi':
                    $wangyi=$returnquery[$i]['source_location'];
                    break;
                case 'footerlogo1':
                    $footerlogo1=$returnquery[$i]['source_location'];
                    break;
                case 'footerlogo2':
                    $footerlogo2=$returnquery[$i]['source_location'];
                    break;
                case 'footerlogo3':
                    $footerlogo3=$returnquery[$i]['source_location'];
                    break;
                case 'footerlogo4':
                    $footerlogo4=$returnquery[$i]['source_location'];
                    break;
                case 'guanzhu':
                    $guanzhu=$returnquery[$i]['source_location'];
                    break;
                case 'erwei':
                    $erwei=$returnquery[$i]['source_location'];
                    break;
                case 'guanbi':
                    $guanbi=$returnquery[$i]['source_location'];
                    break;
            }
        }
        $data = array(
            'wangyi'=>$wangyi,
            'jianshu'=>$jianshu,
            'tengxun'=>$tengxun,
            'douban'=>$douban,
            'youku'=>$youku,
            'weibo'=>$weibo,
            'weixin'=>$weixin,
            'footerlogo1'=>$footerlogo1,
            'footerlogo2'=>$footerlogo2,
            'footerlogo3'=>$footerlogo3,
            'footerlogo4'=>$footerlogo4,
            'guanzhu'=>$guanzhu,
            'erwei'=>$erwei,
            'guanbi'=>$guanbi,
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

    public function query_tags(){
        $this->db->from('keyword');
        $this->db->where('second_level','typedetails');
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $search_type=$query->result_array();
        $this->db->from('keyword');
        $this->db->where('second_level','keyword');
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $search_keyword=$query->result_array();
        $this->db->from('keyword');
        $this->db->where('second_level','yeardetails');
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $search_time=$query->result_array();
        $this->db->from('keyword');
        $this->db->where('second_level','locationdetails');
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $search_country=$query->result_array();
        $data=array(
            'search_type' => $search_type,
            'search_keyword' => $search_keyword,
            'search_location' => $search_country,
            'search_time' => $search_time
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
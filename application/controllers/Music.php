<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:16
 */
class Music extends CI_Controller
{
    function index(){
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');
        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/music');
        }else{
            $page_data=$this->page_data_model->get_page_data('zn','/music');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>'','type'=>'',
        );

        $source_info=$source_info_base;
        $source_info['first_level']='music';
        $source_info['second_level']='imagearea1';
        $source_info['type']='img';
        $imagearea1 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='music';
        $source_info['second_level']='seasondetails';
        $source_info['type']='img';
        $seasondetails = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='music';
        $source_info['second_level']='displaydetails';
        $source_info['type']='img';
        $displaydetails = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $tag_data = $this->page_data_model->query_tags($source_info);

        $tmp_data = array(
            'logoimage'=>$logoimage,
            'imagearea1'=>$imagearea1,
            'seasondetails'=>$seasondetails,
            'displaydetails'=>$displaydetails,
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('music',$data);
        $this->parser->parse('footer',$data);
    }


    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }


    function musicinner($videoname){
        $this->db->where('status','1');
        $this->db->where('first_level','logoimage');
        $this->db->from('source');
        $this->db->order_by("sequence"," desc");
        $query = $this->db->get();
        $logoimage = $query->result_array();
        $this->load->library('session');
        $this->load->library('parser');
        if($this->session->language){
            $this->lang->load('test',$this->session->language);
        }else{
            $this->lang->load('test','zn');
        }
        $data = array(
            'logoimage'=>$logoimage,
            'dogandhorse' => $this->lang->line('dogandhorse'),
            'url' => '/ul',
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
            ),
            'homenav' => '',
            'aboutnav' =>  '',
            'ulnav' => '',
            'awoenav' => '',
            'musicnav' => 'active',
            'joinnav' => ''
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('musicinner',$data);
        $this->parser->parse('footer',$data);
        echo($videoname);
    }
}
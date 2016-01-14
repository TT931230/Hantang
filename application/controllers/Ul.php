<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:15
 */
class Ul extends CI_Controller
{
    function index(){
        $this->load->library('session');
        $this->load->library('parser');
        if($this->session->language){
            $this->lang->load('test',$this->session->language);
        }else{
            $this->lang->load('test','zn');
        }
        $data = array(
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
            'yeartype' => '年份',
            'locationtype' => '国家/地区',
            'typetype' => '品类',
            'activetype' => '活动类型',
            'yeardetails' => array(
                array('yeardetail'=>'2009'),
                array('yeardetail'=>'2010'),
                array('yeardetail'=>'2011'),
                array('yeardetail'=>'2012'),
                array('yeardetail'=>'2013'),
                array('yeardetail'=>'2014')
            ),
            'locationdetails' => array(
                array('locationdetail'=>'中国大陆'),
                array('locationdetail'=>'港澳台'),
                array('locationdetail'=>'法国'),
                array('locationdetail'=>'瑞士'),
                array('locationdetail'=>'德国'),
                array('locationdetail'=>'英国')
            ),
            'typedetails' => array(
                array('typedetail'=>'钟表'),
                array('typedetail'=>'珠宝'),
                array('typedetail'=>'时尚'),
                array('typedetail'=>'音乐'),
                array('typedetail'=>'艺术'),
                array('typedetail'=>'电影')
            ),
            'activedetails' => array(
                array('activedetail'=>'展览'),
                array('activedetail'=>'开店'),
                array('activedetail'=>'走秀'),
                array('activedetail'=>'演出'),
                array('activedetail'=>'赛事'),
                array('activedetail'=>'其他')
            ),
            'homenav' => '',
            'aboutnav' =>  '',
            'ulnav' => 'active',
            'awoenav' => '',
            'musicnav' => '',
            'joinnav' => ''
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('ul',$data);
        $this->parser->parse('footer',$data);
    }
    function Changelanguage($language){
        $this->load->library('session');
        $this->session->set_userdata('language',$language);
        $this->index();
    }
}
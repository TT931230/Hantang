<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:16
 */
class Join extends CI_Controller
{
    function index(){
        $this->load->library('session');
        $this->load->library('parser');
        if($this->session->language){
            $this->lang->load('test',$this->session->language);
        }else{
            $this->lang->load('test','zn');
        }
        $department = array(
            array('departmentname' => '编辑部','job'=>array(
                array('jobname'=>'编辑'),
                array('jobname'=>'编辑2')
            )
            ),
            array('departmentname' => '客户部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '翻译部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '数据库','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '后期剪辑部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '音乐部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '创意部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '动画特效部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '人事部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '管理部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '网络技术部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '雨嘉科技','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            ),
            array('departmentname' => '新媒体事业部','job'=>array(
                array('jobname'=>'客服1'),
                array('jobname'=>'客服2')
            )
            )
        );
        $data = array(
            'url' => '/join',
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
            'department' => $department,
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
            'musicnav' => '',
            'joinnav' => 'active'
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('join',$data);
        $this->parser->parse('footer',$data);
    }
    function Changelanguage($language){
        $this->load->library('session');
        $this->session->set_userdata('language',$language);
        $this->index();
    }

}
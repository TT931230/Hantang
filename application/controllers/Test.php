<?php
class Test extends CI_Controller
{


    function index()
    {
        $this->load->library('parser');
        $this->lang->load('test','zn');
        $data = array(
            'home' => $this->lang->line('home'),
            'about' => $this->lang->line('about'),
            'ul' => $this->lang->line('ul'),
            'awoe' => $this->lang->line('awoe'),
            'music' => $this->lang->line('music'),
            'join' => $this->lang->line('join'),
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
                array('oid' => '100011', 'content' => '关键�'),
                array('oid' => '100012', 'content' => '关键�'),
                array('oid' => '100013', 'content' => '关键�'),
                array('oid' => '100014', 'content' => '关键�'),
                array('oid' => '100015', 'content' => '关键�')
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
            'homenav' => 'active',
            'aboutnav' =>  '',
            'ulnav' => '',
            'awoenav' => '',
            'musicnav' => '',
            'joinnav' => ''
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('home',$data);
        $this->parser->parse('footer',$data);
    }
    function about()
    {
        $this->load->library('parser');
        $this->lang->load('test','zn');
        $data = array(
            'home' => $this->lang->line('home'),
            'about' => $this->lang->line('about'),
            'ul' => $this->lang->line('ul'),
            'awoe' => $this->lang->line('awoe'),
            'music' => $this->lang->line('music'),
            'join' => $this->lang->line('join'),
            'seniorsearch' => $this->lang->line('seniorsearch'),
            'inputtip' => $this->lang->line('inputtip'),
            'commit' => $this->lang->line('commit'),
            'homenav' => '',
            'aboutnav' =>  'active',
            'ulnav' => '',
            'awoenav' => '',
            'musicnav' => '',
            'joinnav' => ''
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('about',$data);
        $this->parser->parse('footer',$data);
    }

//-----------------------------
    
    function platform()
    {
    	$this->load->library('parser');
    	$this->lang->load('test','zn');
    	$data = array(
    			'home' => $this->lang->line('home'),
    			'about' => $this->lang->line('about'),			
    			'ul' => $this->lang->line('ul'),
    			'awoe' => $this->lang->line('awoe'),
    			'music' => $this->lang->line('music'),
    			'join' => $this->lang->line('join'),
    			'homenav' => '',
    			'aboutnav' =>  'active',
    			'ulnav' => '',
    			'awoenav' => '',
    			'musicnav' => '',
    			'joinnav' => ''
    	);
    	$this->parser->parse('header',$data);
    	$this->parser->parse('platform',$data);
    	$this->parser->parse('footer',$data);
    }
    
    function partner()
    {
    	$this->load->library('parser');
    	$this->lang->load('test','zn');
    	$data = array(
    			'home' => $this->lang->line('home'),
    			'about' => $this->lang->line('about'),
    			'ul' => $this->lang->line('ul'),
    			'awoe' => $this->lang->line('awoe'),
    			'music' => $this->lang->line('music'),
    			'join' => $this->lang->line('join'),
    			'homenav' => '',
    			'aboutnav' =>  'active',
    			'ulnav' => '',
    			'awoenav' => '',
    			'musicnav' => '',
    			'joinnav' => ''
    	);
    	$this->parser->parse('header',$data);
    	$this->parser->parse('partner',$data);
    	$this->parser->parse('footer',$data);
    }
    
    function ul(){
        $this->load->library('parser');
        $this->lang->load('test','zn');
        $data = array(
            'home' => $this->lang->line('home'),
            'about' => $this->lang->line('about'),
            'ul' => $this->lang->line('ul'),
            'awoe' => $this->lang->line('awoe'),
            'music' => $this->lang->line('music'),
            'join' => $this->lang->line('join'),
            'seniorsearch' => $this->lang->line('seniorsearch'),
            'inputtip' => $this->lang->line('inputtip'),
            'commit' => $this->lang->line('commit'),
            'homenav' => '',
            'aboutnav' =>  '',
            'ulnav' => 'active',
            'awoenav' => '',
            'musicnav' => '',
            'joinnav' => ''
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('ul',$data);
        $this->parser->parse('footer',$data);
    }
    function awoe(){
        $this->load->library('parser');
        $this->lang->load('test','zn');
        $data = array(
            'home' => $this->lang->line('home'),
            'about' => $this->lang->line('about'),
            'ul' => $this->lang->line('ul'),
            'awoe' => $this->lang->line('awoe'),
            'music' => $this->lang->line('music'),
            'join' => $this->lang->line('join'),
            'seniorsearch' => $this->lang->line('seniorsearch'),
            'inputtip' => $this->lang->line('inputtip'),
            'commit' => $this->lang->line('commit'),
            'homenav' => '',
            'aboutnav' =>  '',
            'ulnav' => '',
            'awoenav' => 'active',
            'musicnav' => '',
            'joinnav' => ''
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('awoe',$data);
        $this->parser->parse('footer',$data);
    }
    function music(){
        $this->load->library('parser');
        $this->lang->load('test','zn');
        $data = array(
            'home' => $this->lang->line('home'),
            'about' => $this->lang->line('about'),
            'ul' => $this->lang->line('ul'),
            'awoe' => $this->lang->line('awoe'),
            'music' => $this->lang->line('music'),
            'join' => $this->lang->line('join'),
            'seniorsearch' => $this->lang->line('seniorsearch'),
            'inputtip' => $this->lang->line('inputtip'),
            'commit' => $this->lang->line('commit'),
            'homenav' => '',
            'aboutnav' =>  '',
            'ulnav' => '',
            'awoenav' => '',
            'musicnav' => 'active',
            'joinnav' => ''
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('music',$data);
        $this->parser->parse('footer',$data);
    }
    function join(){
        $this->load->library('parser');
        $this->lang->load('test','zn');
        $data = array(
            'home' => $this->lang->line('home'),
            'about' => $this->lang->line('about'),
            'ul' => $this->lang->line('ul'),
            'awoe' => $this->lang->line('awoe'),
            'music' => $this->lang->line('music'),
            'join' => $this->lang->line('join'),
            'seniorsearch' => $this->lang->line('seniorsearch'),
            'inputtip' => $this->lang->line('inputtip'),
            'commit' => $this->lang->line('commit'),
            'homenav' => '',
            'aboutnav' =>  '',
            'ulnav' => '',
            'awoenav' => '',
            'musicnav' => '',
            'joinnav' => 'active'
        );
        $this->parser->parse('header',$data);
        $this->parser->parse('join',$data);
        $this->parser->parse('footer',$data);
    }

}
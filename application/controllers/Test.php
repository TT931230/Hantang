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
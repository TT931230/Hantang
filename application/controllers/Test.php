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
            'jz' => $this->lang->line('jz'),
            'wdsj' => $this->lang->line('wdsj'),
            'gjyyj' => $this->lang->line('gjyyj'),
            'jrht' => $this->lang->line('jrht')
        );
//        $this->load->view('test');
        $this->parser->parse('test',$data);
    }
}
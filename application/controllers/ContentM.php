<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 8:34
 */

class Contentm extends CI_Controller
{
    function index(){
        $this->load->library('parser');
        $data=array(
            'test'=>'test'
        );
        $this->parser->parse('contentmanage',$data);
    }
}
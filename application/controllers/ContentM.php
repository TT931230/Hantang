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
        $this->load->library('session');

        if($this->session->username){
            $username=$this->session->username;
        }else{
            $this->config->load('sourceurl', TRUE);
            $url  = $this->config->item('url', 'sourceurl');
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=".$url['serverurl']."login'>";
        }
        $data=array(
            'username'=>$username
        );
        $this->parser->parse('contentmanage',$data);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:15
 */
class Partner extends CI_Controller
{
    function index()
    {
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/partner');
        }else{
            $page_data=$this->page_data_model->get_page_data('zn','/partner');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
        );

        $source_info=$source_info_base;
        $source_info['first_level']='partner';
        $source_info['second_level']='imagearea1';
        $source_info['type']='img';
        $imagearea1 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $tag_data = $this->page_data_model->query_tags();

        $tmp_data = array(
            'logoimage'=>$logoimage,
        	'imagearea1'=>$imagearea1
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('partner',$data);
        $this->parser->parse('footer',$data);
    }
    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }
}
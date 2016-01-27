<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:15
 */
class Platform extends CI_Controller
{
    function index()
    {
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/platform');
        }else{
            $page_data=$this->page_data_model->get_page_data('zn','/platform');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
        );

        $source_info=$source_info_base;
        $source_info['first_level']='platform';
        $source_info['second_level']='videoarea1';
        $source_info['type']='video/mp4';
        $imagearea1 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='platform';
        $source_info['second_level']='imagearea2';
        $source_info['type']='img';
        $imagearea2 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='platform';
        $source_info['second_level']='imagearea3';
        $source_info['type']='img';
        $imagearea3 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $tag_data = $this->page_data_model->query_tags();

        $tmp_data = array(
            'logoimage'=>$logoimage,
            'videoarea1'=>$imagearea1,
            'imagearea2'=>$imagearea2,
            'imagearea3'=>$imagearea3
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('platform',$data);
        $this->parser->parse('footer',$data);
    }
    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }
}
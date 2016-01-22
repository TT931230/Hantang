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
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/ul');
        }else{
            $this->session->set_userdata('language','zn');
            $page_data=$this->page_data_model->get_page_data('zn','/ul');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>'','type'=>'',
        );
        $keyword_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>''
        );

        $source_info=$source_info_base;
        $source_info['first_level']='ul';
        $source_info['second_level']='imagearea1';
        $source_info['type']='img';
        $imagearea1 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='ul';
        $source_info['second_level']='imagearea11';
        $source_info['type']='img';
        $imagearea11 = $this->page_data_model->query_sources($source_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['second_level']='yeardetails';
        $yeardetails = $this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['second_level']='locationdetails';
        $locationdetails =$this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['second_level']='typedetails';
        $typedetails =$this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['second_level']='activedetails';
        $activedetails =$this->page_data_model->query_keywords($keyword_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='ul';
        $source_info['type']='videoimg';
        $source_info['third_level']=$this->session->language;
        $relatedvideo = $this->page_data_model->query_sources($source_info);


        $tag_data = $this->page_data_model->query_tags();

        $tmp_data = array(
            'relatedvideo'=>$relatedvideo,
            'logoimage'=>$logoimage,
            'imagearea1'=>$imagearea1,
            'imagearea11'=>$imagearea11,
            'yeardetails'=>$yeardetails,
            'locationdetails'=>$locationdetails,
            'typedetails'=>$typedetails,
            'activedetails'=>$activedetails
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('ul',$data);
        $this->parser->parse('footer',$data);
    }
    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }
    function ulinner($videoid){
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/ul');
        }else{
            $this->session->set_userdata('language','zn');
            $page_data=$this->page_data_model->get_page_data('zn','/ul');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>'','type'=>'',
        );
        $keyword_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>''
        );

        $source_info=$source_info_base;
        $source_info['first_level']='ullogo';
        $source_info['type']='img';
        $ullogo = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='ul';
        $source_info['second_level']='imagearea11';
        $source_info['type']='img';
        $imagearea11 = $this->page_data_model->query_sources($source_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['second_level']='yeardetails';
        $yeardetails = $this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['second_level']='locationdetails';
        $locationdetails =$this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['second_level']='typedetails';
        $typedetails =$this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['second_level']='activedetails';
        $activedetails =$this->page_data_model->query_keywords($keyword_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='ul';
        $source_info['third_level']=$this->session->language;
        $source_info['type']='videoimg';
        $relatedvideo = $this->page_data_model->query_sources($source_info);

        $this->db->where('status','1');
        $this->db->where('id',$videoid);
        $this->db->from('source');
        $videoquery = $this->db->get();
        $video = $videoquery->result_array();

        $tag_data = $this->page_data_model->query_tags();

        $tmp_data = array(
            'video'=>$video,
            'relatedvideo'=>$relatedvideo,
            'logoimage'=>$logoimage,
            'ullogo'=>$ullogo,
            'imagearea11'=>$imagearea11,
            'yeardetails'=>$yeardetails,
            'locationdetails'=>$locationdetails,
            'typedetails'=>$typedetails,
            'activedetails'=>$activedetails
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('ulinner',$data);
        $this->parser->parse('footer',$data);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:16
 */
class Awoe extends CI_Controller
{
    function index(){
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/awoe');
        }else{
            $this->session->set_userdata('language','zn');
            $page_data=$this->page_data_model->get_page_data('zn','/awoe');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','type'=>'',
        );
        $keyword_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>''
        );

        $source_info=$source_info_base;
        $source_info['first_level']='awoe';
        $source_info['second_level']='imagearea1';
        $source_info['type']='img';
        /*$source_info['third_level']=$this->session->language;*/
        $imagearea1 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='awoe';
        $source_info['second_level']='imagearea11';
        /*$source_info['third_level']=$this->session->language;*/
        $source_info['type']='img';
        $source_info['deleted']='0';
        $imagearea11 = $this->page_data_model->query_sources($source_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='awoe';
        $keyword_info['second_level']='yeardetails';
        $keyword_info['third_level']=$this->session->language;
        $yeardetails = $this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='awoe';
        $keyword_info['second_level']='locationdetails';
        $keyword_info['third_level']=$this->session->language;
        $locationdetails =$this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='awoe';
        $keyword_info['second_level']='typedetails';
        $keyword_info['third_level']=$this->session->language;
        $typedetails =$this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='awoe';
        $keyword_info['second_level']='activedetails';
        $keyword_info['third_level']=$this->session->language;
        $activedetails =$this->page_data_model->query_keywords($keyword_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['third_level']=$this->session->language;
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);
        if(count($logoimage)<=0){
            $source_info=$source_info_base;
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $source_info['third_level']='zn';
            $logoimage = $this->page_data_model->query_sources($source_info);
        }

        $source_info=$source_info_base;
        $source_info['first_level']='awoe';
        $source_info['type']='videoimg';
        $source_info['third_level']=$this->session->language;
        $relatedvideo = $this->page_data_model->query_sources($source_info);

        if(count($relatedvideo) <=0){
            $source_info=$source_info_base;
            $source_info['first_level']='awoe';
            $source_info['deleted']='0';
            $source_info['type']='videoimg';
            $source_info['third_level']='zn';
            $relatedvideo = $this->page_data_model->query_sources($source_info);
        }
        
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
        $this->parser->parse('awoe',$data);
        $this->db->from('webcontent');
        $this->db->where('page','awoe');
        $this->db->where('status','1');
        $this->db->order_by('sequence','asc');
        $homecontents=$this->db->get()->result_array();
        for($i=0;$i<count($homecontents);$i++){
            $this->parser->parse($homecontents[$i]['name'],$data);
        }
        $this->parser->parse('awoeend',$data);
        $this->parser->parse('footer',$data);
    }
    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }
    function awoeinner($videoname){
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/awoe');
        }else{
            $this->session->set_userdata('language','zn');
            $page_data=$this->page_data_model->get_page_data('zn','/awoe');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>'','type'=>'',
        );
        $keyword_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>''
        );

        $source_info=$source_info_base;
        $source_info['first_level']='awoelogo';
        $source_info['type']='img';
        $source_info['third_level']=$this->session->language;
        $awoelogo = $this->page_data_model->query_sources($source_info);
        if(count($awoelogo) <=0){
            $source_info=$source_info_base;
            $source_info['first_level']='awoelogo';
            $source_info['type']='img';
            $source_info['third_level']='zn';
            $awoelogo = $this->page_data_model->query_sources($source_info);
        }

        $source_info=$source_info_base;
        $source_info['first_level']='awoe';
        $source_info['second_level']='imagearea11';
        $source_info['type']='img';
        $source_info['third_level']=$this->session->language;
        $imagearea11 = $this->page_data_model->query_sources($source_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='awoe';
        $keyword_info['second_level']='yeardetails';
        $keyword_info['third_level']=$this->session->language;
        $yeardetails = $this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='awoe';
        $keyword_info['second_level']='locationdetails';
        $keyword_info['third_level']=$this->session->language;
        $locationdetails =$this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='awoe';
        $keyword_info['third_level']=$this->session->language;
        $keyword_info['second_level']='typedetails';
        $typedetails =$this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='awoe';
        $keyword_info['third_level']=$this->session->language;
        $keyword_info['second_level']='activedetails';
        $activedetails =$this->page_data_model->query_keywords($keyword_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['third_level']=$this->session->language;
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);
        if(count($logoimage) <= 0){
            $source_info=$source_info_base;
            $source_info['first_level']='logoimage';
            $source_info['third_level']='zn';
            $source_info['type']='img';
            $logoimage = $this->page_data_model->query_sources($source_info);
        }


        $source_info=$source_info_base;
        $source_info['first_level']='awoe';
        $source_info['third_level']=$this->session->language;
        $source_info['type']='videoimg';
        $relatedvideo = $this->page_data_model->query_sources($source_info);

        $this->db->where("status='1' and first_level='awoe' and third_level='".$this->session->language."' and link_url like '%".$videoname."%' and type='videoimg'");
        $this->db->from('source');
        $videoimgarray = $this->db->get()->result_array();
        /*if($videoimgarray[0]['index']) {
            $this->db->where("status='1' and index ='" . $videoimgarray[0]['index'] . "' and type='videoimg' and first_level='awoe'");
            $this->db->from('source');
            $this->db->order_by('sequence','asc');
            $relatedvideo1 = $this->db->get()->result_array();
        }else{
            $relatedvideo1=array();
        }*/
        $relatedvideo1=array();
        if(count($relatedvideo1)>0){
            for($i=count($relatedvideo)-1;$i>0;$i--){
                for($j=0;$j<count($relatedvideo1);$j++){
                    if($relatedvideo[$i]['id']==$relatedvideo1[$j]['id']){
                        array_splice($relatedvideo,$i+1,1);
                    }
                }
            }
        }


        $this->db->where('status','1');
        $this->db->where('id',$videoname);
        $this->db->from('source');
        $videoquery = $this->db->get();
        $video = $videoquery->result_array();

        $tag_data = $this->page_data_model->query_tags();

        $tmp_data = array(
            'video'=>$video,
            'relatedvideo1'=>$relatedvideo1,
            'relatedvideo'=>$relatedvideo,
            'logoimage'=>$logoimage,
            'awoelogo'=>$awoelogo,
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
        $this->parser->parse('awoeinner',$data);
        $this->parser->parse('footer',$data);
    }
    function preview(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $this->load->library('parser');
            $this->load->model('page_data_model');

            if($this->session->language){
                $page_data=$this->page_data_model->get_page_data($this->session->language,'/awoe');
            }else{
                $this->session->set_userdata('language','zn');
                $page_data=$this->page_data_model->get_page_data('zn','/awoe');
            }
            $source_info_base=array(
                'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>'','type'=>'',
            );
            $keyword_info_base=array(
                'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>''
            );

            $source_info=$source_info_base;
            $source_info['first_level']='awoe';
            $source_info['second_level']='imagearea1';
            $source_info['type']='img';
            $imagearea1 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='awoe';
            $source_info['second_level']='imagearea1';
            $source_info['type']='img';
            $imagearea1 =array_merge($imagearea1,$this->page_data_model->query_sources($source_info));

            $source_info=$source_info_base;
            $source_info['first_level']='awoe';
            $source_info['second_level']='imagearea11';
            $source_info['third_level']=$this->session->language;
            $source_info['type']='img';
            $imagearea11 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['first_level']='awoe';
            $source_info['status']='2';
            $source_info['second_level']='imagearea11';
            $source_info['third_level']=$this->session->language;
            $source_info['type']='img';
            $imagearea11 =array_merge($imagearea11,$this->page_data_model->query_sources($source_info));



            $keyword_info=$keyword_info_base;
            $keyword_info['first_level']='awoe';
            $keyword_info['second_level']='yeardetails';
            $keyword_info['third_level']=$this->session->language;
            $yeardetails = $this->page_data_model->query_keywords($keyword_info);

            $keyword_info=$keyword_info_base;
            $keyword_info['first_level']='awoe';
            $keyword_info['second_level']='locationdetails';
            $keyword_info['third_level']=$this->session->language;
            $locationdetails =$this->page_data_model->query_keywords($keyword_info);

            $keyword_info=$keyword_info_base;
            $keyword_info['first_level']='awoe';
            $keyword_info['second_level']='typedetails';
            $keyword_info['third_level']=$this->session->language;
            $typedetails =$this->page_data_model->query_keywords($keyword_info);

            $keyword_info=$keyword_info_base;
            $keyword_info['first_level']='awoe';
            $keyword_info['second_level']='activedetails';
            $keyword_info['third_level']=$this->session->language;
            $activedetails =$this->page_data_model->query_keywords($keyword_info);

            $source_info=$source_info_base;
            $source_info['first_level']='logoimage';
            $source_info['third_level']=$this->session->language;
            $source_info['type']='img';
            $logoimage = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='logoimage';
            $source_info['third_level']=$this->session->language;
            $source_info['type']='img';
            $logoimage =array_merge($logoimage,$this->page_data_model->query_sources($source_info));




            $source_info=$source_info_base;
            $source_info['first_level']='awoe';
            $source_info['type']='videoimg';
            $source_info['third_level']=$this->session->language;
            $relatedvideo = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='awoe';
            $source_info['type']='videoimg';
            $source_info['third_level']=$this->session->language;
            $relatedvideo =array_merge($relatedvideo,$this->page_data_model->query_sources($source_info));



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
            $this->parser->parse('awoe',$data);
            $this->db->from('webcontent');
            $this->db->where('page','awoe');
            $this->db->where('previewstatus','1');
            $this->db->order_by('sequence','asc');
            $homecontents=$this->db->get()->result_array();
            for($i=0;$i<count($homecontents);$i++){
                $this->parser->parse($homecontents[$i]['name'],$data);
            }
            $this->parser->parse('awoeend',$data);
            $this->parser->parse('footer',$data);
        }
    }
}
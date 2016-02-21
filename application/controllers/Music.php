<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:16
 */
class Music extends CI_Controller
{
    function index(){
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');
        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/music');
        }else{
            $this->session->set_userdata('language','zn');
            $page_data=$this->page_data_model->get_page_data('zn','/music');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
        );
        $keyword_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language
        );

        $source_info=$source_info_base;
        $source_info['first_level']='music';
        $source_info['second_level']='imagearea1';
        $source_info['third_level']=$this->session->language;
        $source_info['type']='img';
        $imagearea1 = $this->page_data_model->query_sources($source_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='music';
        $keyword_info['second_level']='seasondetails';
        $source_info['third_level']=$this->session->language;
        $seasondetails = $this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='music';
        $keyword_info['second_level']='displaydetails';
        $source_info['third_level']=$this->session->language;
        $displaydetails = $this->page_data_model->query_keywords($keyword_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $source_info['third_level']=$this->session->language;
        $logoimage = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='music';
        $source_info['type']='proimg';
        $source_info['third_level']=$this->session->language;
        $relatedvideo = $this->page_data_model->query_sources($source_info);

        $tag_data = $this->page_data_model->query_tags();

        $tmp_data = array(
            'relatedvideo'=>$relatedvideo,
            'logoimage'=>$logoimage,
            'imagearea1'=>$imagearea1,
            'seasondetails'=>$seasondetails,
            'displaydetails'=>$displaydetails,
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('music',$data);
        $this->db->from('webcontent');
        $this->db->where('page','music');
        $this->db->where('status','1');
        $this->db->order_by('sequence','asc');
        $homecontents=$this->db->get()->result_array();
        for($i=0;$i<count($homecontents);$i++){
            $this->parser->parse($homecontents[$i]['name'],$data);
        }
        $this->parser->parse('musicend',$data);
        $this->parser->parse('footer',$data);
    }


    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }


    function musicinner($videoname){
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');
        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/music');
        }else{
            $this->session->set_userdata('language','zn');
            $page_data=$this->page_data_model->get_page_data('zn','/music');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
        );
        $keyword_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language
        );

        $source_info=$source_info_base;
        $source_info['first_level']='musiclogo';
        $source_info['third_level']=$this->session->language;
        $source_info['type']='img';
        $musiclogo = $this->page_data_model->query_sources($source_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='music';
        $source_info['third_level']=$this->session->language;
        $keyword_info['second_level']='seasondetails';
        $seasondetails = $this->page_data_model->query_keywords($keyword_info);

        $keyword_info=$keyword_info_base;
        $keyword_info['first_level']='music';
        $source_info['third_level']=$this->session->language;
        $keyword_info['second_level']='displaydetails';
        $displaydetails = $this->page_data_model->query_keywords($keyword_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['third_level']=$this->session->language;
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='music';
        $source_info['third_level']=$this->session->language;
        $source_info['type']='videoimg';
        $relatedvideo = $this->page_data_model->query_sources($source_info);

        $this->db->where('status','1');
        $this->db->where('id',$videoname);
        $this->db->where('third_level',$this->session->language);
        $this->db->from('source');
        $videoquery = $this->db->get();
        $video = $videoquery->result_array();


        //add new img
        $this->db->from('source');
        $this->db->where('status','1');
        $this->db->where('third_level',$this->session->language);
        $this->db->where('first_level',$videoname);
        $imgdata=$this->db->get()->result_array();
        if(count($imgdata)>0){
            $video[0]['imgurl']=$imgdata[0]['source_location'];
        }else{
            $video[0]['imgurl']='';
        }


        $this->db->from('source');
        $this->db->where('status','1');
        $this->db->where('third_level',$this->session->language);
        $this->db->where("link_url like '%".$video[0]['id']."%'");
        $imgarray=$this->db->get()->result_array();
        if(count($imgarray)>0){
            //$video[0]['imgurl']=$imgarray[0]['source_location'];
            $this->db->from('musicinfo');
            $this->db->where('music_id',$imgarray[0]['id']);
            $musicinfoarray=$this->db->get()->result_array();
            if(count($musicinfoarray)>0) {
                $musictime = $musicinfoarray[0]['musictime'];
                $musiclocation = $musicinfoarray[0]['musiclocation'];
            }else{
                $musictime='';
                $musiclocation='';
            }
        }else{
            $musictime='';
            $musiclocation='';
            //$video[0]['imgurl']='';
        }
        $video[0]['musictime']=$musictime;
        $video[0]['musiclocation']=$musiclocation;

        $tag_data = $this->page_data_model->query_tags();

        $tmp_data = array(
            'video'=>$video,
            'relatedvideo'=>$relatedvideo,
            'logoimage'=>$logoimage,
            'musiclogo'=>$musiclogo,
            'seasondetails'=>$seasondetails,
            'displaydetails'=>$displaydetails,
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('musicinner',$data);
        $this->parser->parse('footer',$data);
    }
    function preview(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $this->load->library('parser');
            $this->load->model('page_data_model');
            if($this->session->language){
                $page_data=$this->page_data_model->get_page_data($this->session->language,'/music');
            }else{
                $this->session->set_userdata('language','zn');
                $page_data=$this->page_data_model->get_page_data('zn','/music');
            }
            $source_info_base=array(
                'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
            );
            $keyword_info_base=array(
                'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language
            );

            $source_info=$source_info_base;
            $source_info['first_level']='music';
            $source_info['second_level']='imagearea1';
            $source_info['third_level']=$this->session->language;
            $source_info['type']='img';
            $imagearea1 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='music';
            $source_info['second_level']='imagearea1';
            $source_info['third_level']=$this->session->language;
            $source_info['type']='img';
            $imagearea1 =array_merge($imagearea1,$this->page_data_model->query_sources($source_info));






            $keyword_info=$keyword_info_base;
            $keyword_info['first_level']='music';
            $keyword_info['second_level']='seasondetails';
            $source_info['third_level']=$this->session->language;
            $seasondetails = $this->page_data_model->query_keywords($keyword_info);

            $keyword_info=$keyword_info_base;
            $keyword_info['first_level']='music';
            $keyword_info['second_level']='displaydetails';
            $source_info['third_level']=$this->session->language;
            $displaydetails = $this->page_data_model->query_keywords($keyword_info);

            $source_info=$source_info_base;
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $source_info['third_level']=$this->session->language;
            $logoimage = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $source_info['third_level']=$this->session->language;
            $logoimage =array_merge($logoimage,$this->page_data_model->query_sources($source_info));




            $source_info=$source_info_base;
            $source_info['first_level']='music';
            $source_info['type']='videoimg';
            $source_info['third_level']=$this->session->language;
            $relatedvideo = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['first_level']='music';
            $source_info['status']='2';
            $source_info['type']='videoimg';
            $source_info['third_level']=$this->session->language;
            $relatedvideo =array_merge($relatedvideo,$this->page_data_model->query_sources($source_info));



            $tag_data = $this->page_data_model->query_tags();

            $tmp_data = array(
                'relatedvideo'=>$relatedvideo,
                'logoimage'=>$logoimage,
                'imagearea1'=>$imagearea1,
                'seasondetails'=>$seasondetails,
                'displaydetails'=>$displaydetails,
            );

            $tmp_data=array_merge($tmp_data,$tag_data);
            $data=array_merge($tmp_data,$page_data);

            $this->parser->parse('header',$data);
            $this->parser->parse('search',$data);
            $this->parser->parse('music',$data);
            $this->db->from('webcontent');
            $this->db->where('page','music');
            $this->db->where('previewstatus','1');
            $this->db->order_by('sequence','asc');
            $homecontents=$this->db->get()->result_array();
            for($i=0;$i<count($homecontents);$i++){
                $this->parser->parse($homecontents[$i]['name'],$data);
            }
            $this->parser->parse('musicend',$data);
            $this->parser->parse('footer',$data);
        }
    }

}
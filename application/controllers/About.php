<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:15
 */
class About extends CI_Controller
{
    function index()
    {
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/about');
        }else{
            $this->session->set_userdata('language','zn');
            $page_data=$this->page_data_model->get_page_data('zn','/about');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','type'=>'','third_level'=>$this->session->language
        );//'third_level'=>$this->session->language,

        $source_info=$source_info_base;
        $source_info['first_level']='about';
        $source_info['second_level']='videoarea1';
        $source_info['type']='video/mp4';
        $video = $this->page_data_model->query_sources($source_info);
        if(count($video)<=0){
            $source_info=$source_info_base;
            $source_info['first_level']='about';
            $source_info['second_level']='videoarea1';
            $source_info['third_level']='zn';
            $source_info['type']='video/mp4';
            $video = $this->page_data_model->query_sources($source_info);
        }

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
       
        $logoimage = $this->page_data_model->query_sources($source_info);
        if(count($logoimage)<=0){
            $source_info=$source_info_base;
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $source_info['third_level']='zn';
            $logoimage = $this->page_data_model->query_sources($source_info);
        }

        $tag_data = $this->page_data_model->query_tags();

        $tmp_data = array(
            'logoimage'=>$logoimage,
            'video'=>$video,
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $source_info=$source_info_base;
        $source_info['first_level']='about';
        $source_info['second_level']='about01';
        $source_info['type']='img';
        $source_info['deleted']=0;
        $about1 = $this->page_data_model->query_sources($source_info);
        if(count($about1) <=0){
            $source_info=$source_info_base;
            $source_info['first_level']='about';
            $source_info['second_level']='about01';
            $source_info['type']='img';
            $source_info['deleted']=0;
            $source_info['third_level']='zn';
            $about1 = $this->page_data_model->query_sources($source_info);
        }

        $source_info=$source_info_base;
        $source_info['first_level']='about';
        $source_info['second_level']='about02';
        $source_info['type']='img';
        $source_info['deleted']=0;
        $about2 = $this->page_data_model->query_sources($source_info);
        if(count($about2) <=0){
            $source_info=$source_info_base;
            $source_info['first_level']='about';
            $source_info['second_level']='about02';
            $source_info['type']='img';
            $source_info['deleted']=0;
            $source_info['third_level']='zn';
            $about2 = $this->page_data_model->query_sources($source_info);
        }


        $source_info=$source_info_base;
        $source_info['first_level']='about';
        $source_info['second_level']='about03';
        $source_info['type']='img';
        $source_info['deleted']=0;
        $about3 = $this->page_data_model->query_sources($source_info);
        if(count($about3) <=0){
            $source_info=$source_info_base;
            $source_info['first_level']='about';
            $source_info['second_level']='about03';
            $source_info['type']='img';
            $source_info['deleted']=0;
            $source_info['third_level']='zn';
            $about3 = $this->page_data_model->query_sources($source_info);
        }

        $source_info=$source_info_base;
        $source_info['first_level']='about';
        $source_info['second_level']='about04';
        $source_info['type']='img';
        $source_info['deleted']=0;
        $about4 = $this->page_data_model->query_sources($source_info);
        if(count($about4) <=0){
            $source_info=$source_info_base;
            $source_info['first_level']='about';
            $source_info['second_level']='about04';
            $source_info['type']='img';
            $source_info['deleted']=0;
            $source_info['third_level']='zn';
            $about4 = $this->page_data_model->query_sources($source_info);
        }

        $aboutData = array(
            'about1'=>$about1,
            'about2'=>$about2,
            'about3'=>$about3,
            'about4'=>$about4,
        );


        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('about',$data);
       /* $this->db->from('webcontent');
        $this->db->where('page','about');
        $this->db->where('status','1');
        $this->db->order_by('sequence','asc');
        $homecontents=$this->db->get()->result_array();
        for($i=0;$i<3;$i++){
            $this->parser->parse($homecontents[$i]['name'],$data);
        }*/

        $this->parser->parse('about1',$tmp_data);
        $this->parser->parse('about2',$tmp_data);
        $this->parser->parse('about3',$aboutData);
        $this->parser->parse('aboutend',$data);
           $this->parser->parse('footer',$data);
    }
    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }
    function preview(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $this->load->library('parser');
            $this->load->model('page_data_model');

            if($this->session->language){
                $page_data=$this->page_data_model->get_page_data($this->session->language,'/about');
            }else{
                $this->session->set_userdata('language','zn');
                $page_data=$this->page_data_model->get_page_data('zn','/about');
            }
            $source_info_base=array(
                'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
            );

            $source_info=$source_info_base;
            $source_info['first_level']='about';
            $source_info['second_level']='videoarea1';
            $source_info['type']='video/mp4';
            $source_info['status']='1';
         
            $video = $this->page_data_model->query_sources($source_info);
          /*  $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='about';
            $source_info['second_level']='videoarea1';
            $source_info['type']='video/mp4';
          
            $video =array_merge($video,$this->page_data_model->query_sources($source_info));*/

            $source_info=$source_info_base;
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
           
            $logoimage = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $source_info['third_level']=$this->session->language;
            $logoimage =array_merge($logoimage,$this->page_data_model->query_sources($source_info));

            $tag_data = $this->page_data_model->query_tags();

            $tmp_data = array(
                'logoimage'=>$logoimage,
                'video'=>$video,
            );

            $tmp_data=array_merge($tmp_data,$tag_data);
            $data=array_merge($tmp_data,$page_data);

            $this->parser->parse('header',$data);
            $this->parser->parse('search',$data);
            $this->parser->parse('about',$data);
            $this->db->from('webcontent');
            $this->db->where('page','about');
            $this->db->where('previewstatus','1');
            $this->db->order_by('sequence','asc');
            $homecontents=$this->db->get()->result_array();
            for($i=0;$i<count($homecontents);$i++){
                $this->parser->parse($homecontents[$i]['name'],$data);
            }
            echo $data;
            $this->parser->parse('aboutend',$data);
         //   $this->parser->parse('footer',$data);
        }
    }
}
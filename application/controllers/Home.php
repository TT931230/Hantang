<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:14
 */
class Home extends CI_Controller
{

    function index()
    {
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/home');
        }else{
            $page_data=$this->page_data_model->get_page_data('zn','/home');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
        );

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea1';
        $source_info['type']='img';
        $imagearea1 = $this->page_data_model->query_sources($source_info);
var_dump($imagearea1);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea2';
        $source_info['type']='img';
        $imagearea2 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea3';
        $source_info['type']='img';
        $imagearea3 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea4';
        $source_info['type']='img';
        $imagearea4 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea11';
        $source_info['type']='img';
        $imagearea11 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea12';
        $source_info['type']='img';
        $imagearea12 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea13';
        $source_info['type']='img';
        $imagearea13 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $tag_data = $this->page_data_model->query_tags();
        $tmp_data = array(
            'logoimage'=>$logoimage,
            'imagearea1'=>$imagearea1,
            'imagearea2'=>$imagearea2,
            'imagearea3'=>$imagearea3,
            'imagearea4'=>$imagearea4,
            'imagearea11'=>$imagearea11,
            'imagearea12'=>$imagearea12,
            'imagearea13'=>$imagearea13,
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('home',$data);
        $this->db->from('webcontent');
        $this->db->where('page','home');
        $this->db->where('status','1');
        $this->db->order_by('sequence','asc');
        $homecontents=$this->db->get()->result_array();
        for($i=0;$i<count($homecontents);$i++){
            $this->parser->parse($homecontents[$i]['name'],$data);
        }
        $this->parser->parse('homeend',$data);
        $this->parser->parse('footer',$data);
    }
    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }
    function getfooter(){
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/home');
        }else{
            $page_data=$this->page_data_model->get_page_data('zn','/home');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
        );

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea1';
        $source_info['type']='img';
        $imagearea1 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea2';
        $source_info['type']='img';
        $imagearea2 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea3';
        $source_info['type']='img';
        $imagearea3 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea4';
        $source_info['type']='img';
        $imagearea4 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea11';
        $source_info['type']='img';
        $imagearea11 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea12';
        $source_info['type']='img';
        $imagearea12 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='home';
        $source_info['second_level']='imagearea13';
        $source_info['type']='img';
        $imagearea13 = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $tag_data = $this->page_data_model->query_tags($source_info);

        $tmp_data = array(
            'logoimage'=>$logoimage,
            'imagearea1'=>$imagearea1,
            'imagearea2'=>$imagearea2,
            'imagearea3'=>$imagearea3,
            'imagearea4'=>$imagearea4,
            'imagearea11'=>$imagearea11,
            'imagearea12'=>$imagearea12,
            'imagearea13'=>$imagearea13,
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);
        //var_dump($page_data);
        return $this->parser->parse('footer',$data);
    }
    function preview(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $this->load->library('parser');
            $this->load->model('page_data_model');

            if($this->session->language){
                $page_data=$this->page_data_model->get_page_data($this->session->language,'/home');
            }else{
                $page_data=$this->page_data_model->get_page_data('zn','/home');
            }
            $source_info_base=array(
                'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
            );

            $source_info=$source_info_base;
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea1';
            $source_info['type']='img';
            $imagearea1 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea1';
            $source_info['type']='img';
            $imagearea1 =array_merge($imagearea1,$this->page_data_model->query_sources($source_info));



            $source_info=$source_info_base;
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea2';
            $source_info['type']='img';
            $imagearea2 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea2';
            $source_info['type']='img';
            $imagearea2 =array_merge($imagearea2,$this->page_data_model->query_sources($source_info));


            $source_info=$source_info_base;
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea3';
            $source_info['type']='img';
            $imagearea3 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea3';
            $source_info['type']='img';
            $imagearea3 =array_merge($imagearea3,$this->page_data_model->query_sources($source_info));



            $source_info=$source_info_base;
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea4';
            $source_info['type']='img';
            $imagearea4 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea4';
            $source_info['type']='img';
            $imagearea4 =array_merge($imagearea4,$this->page_data_model->query_sources($source_info));


            $source_info=$source_info_base;
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea11';
            $source_info['type']='img';
            $imagearea11 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea11';
            $source_info['type']='img';
            $imagearea11 =array_merge($imagearea11,$this->page_data_model->query_sources($source_info));



            $source_info=$source_info_base;
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea12';
            $source_info['type']='img';
            $imagearea12 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea12';
            $source_info['type']='img';
            $imagearea12 =array_merge($imagearea12,$this->page_data_model->query_sources($source_info));



            $source_info=$source_info_base;
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea13';
            $source_info['type']='img';
            $imagearea13 = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='home';
            $source_info['second_level']='imagearea13';
            $source_info['type']='img';
            $imagearea13 =array_merge($imagearea13,$this->page_data_model->query_sources($source_info));


            $source_info=$source_info_base;
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $logoimage = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $logoimage =array_merge($logoimage,$this->page_data_model->query_sources($source_info));


            $tag_data = $this->page_data_model->query_tags();

            $tmp_data = array(
                'logoimage'=>$logoimage,
                'imagearea1'=>$imagearea1,
                'imagearea2'=>$imagearea2,
                'imagearea3'=>$imagearea3,
                'imagearea4'=>$imagearea4,
                'imagearea11'=>$imagearea11,
                'imagearea12'=>$imagearea12,
                'imagearea13'=>$imagearea13,
            );

            $tmp_data=array_merge($tmp_data,$tag_data);
            $data=array_merge($tmp_data,$page_data);

            $this->parser->parse('header',$data);
            $this->parser->parse('search',$data);
            $this->parser->parse('home',$data);
            $this->db->from('webcontent');
            $this->db->where('page','home');
            $this->db->where('previewstatus','1');
            $this->db->order_by('sequence','asc');
            $homecontents=$this->db->get()->result_array();
            for($i=0;$i<count($homecontents);$i++){
                $this->parser->parse($homecontents[$i]['name'],$data);
            }
            $this->parser->parse('homeend',$data);
            $this->parser->parse('footer',$data);
        }
    }

}
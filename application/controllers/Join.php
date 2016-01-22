<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 8:16
 */
class Join extends CI_Controller
{
    function index(){
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('page_data_model');

        if($this->session->language){
            $page_data=$this->page_data_model->get_page_data($this->session->language,'/join');
        }else{
            $page_data=$this->page_data_model->get_page_data('zn','/join');
        }
        $source_info_base=array(
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>'','type'=>'',
        );

        $source_info=$source_info_base;
        $source_info['first_level']='join';
        $source_info['type']='video/mp4';
        $video = $this->page_data_model->query_sources($source_info);

        $source_info=$source_info_base;
        $source_info['first_level']='logoimage';
        $source_info['type']='img';
        $logoimage = $this->page_data_model->query_sources($source_info);

        $d_status=array(
            'd_status'=>'1',
            'j_status'=>'1'
        );
        $department = $this->page_data_model->query_departments($d_status);
        $tag_data = $this->page_data_model->query_tags($source_info);
        $tmp_data = array(
            'first_id'=>$department[0]['job'][0]['id'],
            'logoimage'=>$logoimage,
            'department' => $department,
            'video' => $video
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('join',$data);
        $this->parser->parse('footer',$data);
    }
    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }
    function getJobInfo(){
        $this->db->where('status','1');
        $this->db->where('id',$_POST['job_id']);
        $this->db->from('jobinfo');
        $query = $this->db->get();
        $jobinfo = $query->result_array();
        $jobname=$jobinfo[0]['jobname'];
        $todo=$jobinfo[0]['todo'];
        $need=$jobinfo[0]['need'];
        echo('<div class="jobname">');
        echo($jobname);
        echo('</div>');
        echo('</hr>');
        echo('<div class="gzzz">工作职责:</div>');
        echo('<pre class="departcontent">');
        echo($todo);
        echo('</pre>');
        echo('<div class="gzzz">岗位要求:</div>');
        echo('<pre  class="departcontent">');
        echo($need);
        echo('</pre>');
    }
    function ask4job(){
        echo($_POST['job_id']);
        echo($_POST['remark']);
        echo($_POST['call']);
        echo($_POST['name']);
        echo($_POST['phoneno']);
        echo($_POST['email']);

    }

}
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
            'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
        );

        $source_info=$source_info_base;
        $source_info['first_level']='join';
        $source_info['second_level']='videoarea1';
        $source_info['type']='video/mp4';
        $video = $this->page_data_model->query_sources($source_info);

        if(count($video) <=0){
            $source_info=$source_info_base;
            $source_info['first_level']='join';
            $source_info['second_level']='videoarea1';
            $source_info['third_level']='zn';
            $source_info['type']='video/mp4';
            $video = $this->page_data_model->query_sources($source_info);
        }

//         $source_info=$source_info_base;
//         $source_info['first_level']='logoimage';
//         $source_info['third_level']='zn';
//         $source_info['type']='img';
//         $logoimage = $this->page_data_model->query_sources($source_info);

        $d_status=array(
            'd_status'=>'1',
            'j_status'=>'1'
        );
        
        $department = $this->page_data_model->query_departments($d_status);
        
   
        
        $tag_data = $this->page_data_model->query_tags();
        $tmp_data = array(
            'first_id'=>$department[0]['id'],
       //     'logoimage'=>$logoimage,
            'department' => $department,
            'video' => $video,
        );

        $tmp_data=array_merge($tmp_data,$tag_data);
        $data=array_merge($tmp_data,$page_data);

        $this->parser->parse('header',$data);
        $this->parser->parse('search',$data);
        $this->parser->parse('join',$data);
        $this->db->from('webcontent');
        $this->db->where('page','join');
        $this->db->where('status','1');
        $this->db->order_by('sequence','asc');
        $homecontents=$this->db->get()->result_array();
        for($i=0;$i<count($homecontents);$i++){
            $this->parser->parse($homecontents[$i]['name'],$data);
        }
        $this->parser->parse('joinend',$data);
        if($this->session->language == 'en'){
            return $this->parser->parse('footeren',$data);
        }else{
            return $this->parser->parse('footer',$data);
        }
    }
    function Changelanguage(){
        $this->load->library('session');
        $this->session->set_userdata('language',$_POST['language']);
        $this->index();
    }

//     	echo('<div class="job-detals">');
//     	echo('<span class="jds-content1">');
//     	echo($jobname[$x]);
//     	echo('</a></span>');

// //     	echo('<span class="jds-content2">');
// //     	echo();
// //     	echo('</span>');
    	
// //     	echo('<span class="jds-content3">');
// //     	echo();
// //     	echo('</span>');
    	
// //     	echo('<span class="jds-content4">');
// //     	echo();
// //     	echo('</span>');
    	
//     	echo('<span class="jds-content5">');
//     	echo($jobdate[$x]);
//     	echo('</span>');
    	
//     	echo('<span id="righToDown1" class="glyphicon glyphicon-chevron-down jds-arrow"></span>');
//     	echo('</div>');}

    
    function getJobName(){
    	$this->db->from('jobinfo');
    	$this->db->where('status','1');
    	$this->db->where('department_id',$_POST['dep_id']);
    	$this->db->order_by("sequence","asc");
    	$query = $this->db->get();
    	$jobs = $query->result_array();

    	for($i=0;$i<count($jobs);$i++){
    		$jobname=$jobs[$i]['jobname'];
    		$jobdate=$jobs[$i]['update_time'];
    		$jobinfo=array($jobname,$jobdate);
    		echo('<div class="job-detals">');
    		echo('<span class="jds-content1">');
    		echo($jobname);
    		echo('</a></span>');

            echo('<span class="jds-content2">');
            echo('test');
    		echo('</span>');    		 
    		echo('<span class="jds-content3">');  
    		echo('test');
    		echo('</span>');    		 
    		echo('<span class="jds-content4">');
    		echo('test');
    		echo('</span>');
    		echo('<span class="jds-content5">');
    		echo($jobdate);
    		echo('</span>');
    		echo('<span id="righToDown1" class="glyphicon glyphicon-chevron-down jds-arrow"></span>');
    		echo('</div>');
    	}
//     	$this->db->where('status','1');
//     	$this->db->where('department_id',$depin);
//     	$this->db->from('jobinfo');
//     	$query2 = $this->db->get();
//     	$depinfo2 = $query2->result_array();
//     	$jobname=$depinfo2['jobname'];
//     	$jobdate=$depinfo2['update_time'];
//     	echo($_POST['dep_id']);
//         echo('<div class="job-detals">');
//     	echo('<span class="jds-content1">');    	
//     	echo($jobname);
//     	echo('</a></span>');
//     	echo('<span class="jds-content5">');
//        	echo($jobdate);
//        	echo('</span>');
//        	echo('<span id="righToDown1" class="glyphicon glyphicon-chevron-down jds-arrow"></span>');
//        	echo('</div>');

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
    function preview(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $this->load->library('parser');
            $this->load->model('page_data_model');

            if($this->session->language){
                $page_data=$this->page_data_model->get_page_data($this->session->language,'/join');
            }else{
                $page_data=$this->page_data_model->get_page_data('zn','/join');
            }
            $source_info_base=array(
                'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
            );

            $source_info=$source_info_base;
            $source_info['first_level']='join';
            $source_info['second_level']='videoarea1';
            $source_info['type']='video/mp4';
            $video = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='join';
            $source_info['second_level']='videoarea1';
            $source_info['type']='video/mp4';
            $video =array_merge($video,$this->page_data_model->query_sources($source_info));




            $source_info=$source_info_base;
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $logoimage = $this->page_data_model->query_sources($source_info);
            $source_info=$source_info_base;
            $source_info['status']='2';
            $source_info['first_level']='logoimage';
            $source_info['type']='img';
            $logoimage =array_merge($logoimage,$this->page_data_model->query_sources($source_info));


            $d_status=array(
                'd_status'=>'1',
                'j_status'=>'1'
            );
            $department = $this->page_data_model->query_departments($d_status);
            $tag_data = $this->page_data_model->query_tags();
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
            $this->db->from('webcontent');
            $this->db->where('page','join');
            $this->db->where('previewstatus','1');
            $this->db->order_by('sequence','asc');
            $homecontents=$this->db->get()->result_array();
            for($i=0;$i<count($homecontents);$i++){
                $this->parser->parse($homecontents[$i]['name'],$data);
            }
            $this->parser->parse('joinend',$data);
            $this->parser->parse('footer',$data);
        }
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 13:18
 */
class PageManager extends CI_Controller
{
    function redirectpage(){
        $pagename=$_POST['pagename'];
        return $this->load->view($pagename);
    }

    function saveImage(){
        $sequence=$_POST['sequence'];
        $url=$_POST['url'];
        $source_location=$_POST['source_location'];
        $source_name=$_POST['source_name'];
        $source_remark=$_POST['source_remark'];
        $insertcontent=array(
            'source_location'=>$source_location,
            'status'=>'2',
            'source_name'=>$source_name,
            'source_remark'=>$source_remark,
            'link_url'=>$url,
            'sequence'=>$sequence,
            'type'=>'img',
            'updater'=>'ADMIN',
            'creator'=>'ADMIN',
            'first_level'=>null,
            'second_level'=>null,
            'third_level'=>null,
        );
        $this->load->model('source_model');
        echo($insertcontent);
        return $this->source_model->insertSource($insertcontent);
    }
    function saveVideo(){
        $sequence=$_POST['sequence'];
        $url=$_POST['url'];
        $source_location=$_POST['source_location'];
        $source_name=$_POST['source_name'];
        $source_remark=$_POST['source_remark'];
        $videoimg=$_POST['videoimg'];
        
        $insertcontent=array(
            'source_location'=>$source_location,
            'status'=>'2',
            'source_name'=>$source_name,
            'source_remark'=>$source_remark,
            'link_url'=>$url,
            'sequence'=>$sequence,
            'type'=>'img',
            'updater'=>'ADMIN',
            'creator'=>'ADMIN',
            'first_level'=>null,
            'second_level'=>null,
            'third_level'=>null,
        );
        $this->load->model('source_model');
        $this->source_model->insertSource($insertcontent);
        $this->source_model->updateSource($insertcontent);
        $this->source_model->insertRelation($insertcontent);
    }
}
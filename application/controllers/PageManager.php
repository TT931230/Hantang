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
        $this->load->library('parser');
        $this->load->model('source_model');
        $this->load->model('keyword_model');

        $imgsource=$this->source_model->querySource(
            array(
                'status'=>null,
                'source_name'=>null,
                'first_level'=>null,
                'second_level'=>null,
                'third_level'=>null,
                'type'=>'img'
            )
        );
        $keyword=$this->keyword_model->queryKeyword(
            array(
                'first_level'=>null,
                'second_level'=>null,
                'third_level'=>null,
                'type'=>null
            )
        );
        $videosource=$this->source_model->querySource(
            array(
                'status'=>null,
                'source_name'=>null,
                'first_level'=>null,
                'second_level'=>null,
                'third_level'=>null,
                'type'=>'video/mp4'
            )
        );
        $data=array(
            'img'=>$imgsource,
            'keyword'=>$keyword,
            'video'=>$videosource
        );
        return $this->parser->parse($pagename,$data);
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
        $source_location=$_POST['source_location'];
        $source_name=$_POST['source_name'];
        $source_remark=$_POST['source_remark'];
        $videoimg=$_POST['videoimg'];
        $keyword=$_POST['keyword'];
        $keywordarray = explode('|||',$keyword);
        $insertvideo=array(
            'videoimg'=>$videoimg,
            'keyword'=>$keyword,
            'source_location'=>$source_location,
            'status'=>'2',
            'source_name'=>$source_name,
            'source_remark'=>$source_remark,
            'sequence'=>$sequence,
            'type'=>'video/mp4',
            'updater'=>'ADMIN',
            'creator'=>'ADMIN',
            'first_level'=>null,
            'second_level'=>null,
            'third_level'=>null,
            'link_url'=>null,
            'videoimgid'=>$videoimg,
            'keywordid'=>$keywordarray
        );
        $this->load->model('source_model');
        $this->source_model->insertvideoSource($insertvideo);
    }
}
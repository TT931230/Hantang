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
                'status'=>'1'
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
        var_dump($insertcontent);
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
        $third_level=$_POST['third_level'];
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
            'third_level'=>$third_level,
            'link_url'=>null,
            'videoimgid'=>$videoimg,
            'keywordid'=>$keywordarray
        );
        $this->load->model('source_model');
        $this->source_model->insertvideoSource($insertvideo);
    }
    function inserttags(){
        $this->load->model('keyword_model');
        $filename = $_FILES['file']['tmp_name'];
        if (empty ($filename)) {
            echo '请选择要导入的CSV文件！';
            exit;
        }
        $handle = fopen($filename, 'r');
        while ($data = fgetcsv($handle)) { //每次读取CSV里面的一行内容
//print_r($data); //此为一个数组，要获得每一个数据，访问数组下标即可
            $goods_list[] = $data;
        }
//print_r($goods_list);
        for($i=1;$i<count($goods_list);$i++){
            $insertcontent=array(
                'keyword'=>iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                'sequence'=>$goods_list[$i][1],
                'first_level'=>$goods_list[$i][2],
                'second_level'=>$goods_list[$i][3],
                'third_level'=>$goods_list[$i][4],
                'keyword_remark'=>iconv('gb2312', 'utf-8', $goods_list[$i][5]),
                'creator'=>'ADMIN',
                'updater'=>'ADMIN',
                'status'=>'1',
            );
            $this->keyword_model->insertKeyword($insertcontent);
        }
        echo "<script>alert('导入成功！')</script>";
        echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/contentm'>";
    }
}
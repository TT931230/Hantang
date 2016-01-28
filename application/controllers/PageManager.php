<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 13:18
 */
class Pagemanager extends CI_Controller
{
    function redirectpage(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            for($i=0;$i<count($privilige4user);$i++){
                $privilige41=false;
                $privilige42=false;
                $privilige43=false;
                $privilige44=false;
                $privilige45=false;
                $privilige46=false;
                $privilige47=false;
                $privilige48=false;
                $privilige49=false;
                $privilige410=false;
                switch($privilige4user[$i]){
                    case '1':$privilige41=true;break;
                    case '2':$privilige42=true;break;
                    case '3':$privilige43=true;break;
                    case '4':$privilige44=true;break;
                    case '5':$privilige45=true;break;
                    case '6':$privilige46=true;break;
                    case '7':$privilige47=true;break;
                    case '8':$privilige48=true;break;
                    case '9':$privilige49=true;break;
                    case '10':$privilige410=true;break;
                }
            }
            $pagename = $_POST['pagename'];
            $this->load->library('parser');
            $this->load->model('source_model');
            $this->load->model('keyword_model');


            $imagelists = array();
            $videolists = array();
            $keywordlists = array();
            $musiclists = array();
            $brandlists = array();
            $examinevideolists = array();
            $privilige = array();


            //imagelists
            $this->db->from('source');
            $this->db->where('type', 'img');
            $this->db->or_where('type', 'videoimg');
            $this->db->or_where('type', 'partnerimg');
            $imgarray = $this->db->get()->result_array();
            $imgtypearray = array(
                'img', 'videoimg', 'partnerimg'
            );
            for ($i = 0; $i < count($imgarray); $i++) {
                $tmpselect = '';
                for ($j = 0; $j < count($imgtypearray); $j++) {
                    if ($imgtypearray[$j] == $imgarray[$i]['type']) {
                        $tmpselect .= '<option value="' . $imgtypearray[$j] . '" selected>' . $imgtypearray[$j] . '</option>';
                    } else {
                        $tmpselect .= '<option value="' . $imgtypearray[$j] . '">' . $imgtypearray[$j] . '</option>';
                    }
                }
                $tmpimgarray = array(
                    'language' => $imgarray[$i]['third_level'],
                    'source_id' => $imgarray[$i]['id'],
                    'source_location' => $imgarray[$i]['source_location'],
                    'source_name' => $imgarray[$i]['source_name'],
                    'imgtype' => '<select id="' . $imgarray[$i]['id'] . '_imgtype">' . $tmpselect . '</select>',
                    'sequence' => $imgarray[$i]['sequence']
                );
                array_push($imagelists, $tmpimgarray);
            }


            //videolists
            $this->db->from('source');
            $this->db->where('type', 'video/mp4');
            $videoarray = $this->db->get()->result_array();
            for ($i = 0; $i < count($videoarray); $i++) {
                $this->db->from('source');
                $this->db->where('link_url', '/' . $videoarray[$i]['first_level'] . '/' . $videoarray[$i]['first_level'] . 'inner/' . $videoarray[$i]['id']);
                $videoimgarray = $this->db->get()->result_array();
                if (count($videoimgarray) > 0) {
                    $videoimgid = $videoimgarray[0]['id'];
                    $imgurl = $videoimgarray[0]['source_location'];
                    $videosequence = $videoimgarray[0]['sequence'];
                } else {
                    $videoimgid = 'none';
                    $imgurl = '';
                    $videosequence = '';
                }

                $tmpvideoarray = array(
                    'language' => $videoarray[$i]['third_level'],
                    'first_level' => $videoarray[$i]['first_level'],
                    'source_id' => $videoarray[$i]['id'],
                    'source_location' => $videoarray[$i]['source_location'],
                    'source_name' => $videoarray[$i]['source_name'],
                    'sequence' => $videosequence,
                    'imgid' => $videoimgid,
                    'linkimg' => $imgurl
                );
                array_push($videolists, $tmpvideoarray);
            }


            //musiclists
            $this->db->from('source');
            $this->db->where('first_level', 'music');
            $this->db->where('type', 'video/mp4');
            $musicarray = $this->db->get()->result_array();
            for ($i = 0; $i < count($musicarray); $i++) {
                $this->db->from('source');
                $this->db->where('link_url', '/' . $musicarray[$i]['first_level'] . '/' . $musicarray[$i]['first_level'] . 'inner/' . $musicarray[$i]['id']);
                $musicimgarray = $this->db->get()->result_array();
                if (count($musicimgarray) > 0) {
                    $musicimgid = $musicimgarray[0]['id'];
                    $imgurl = $musicimgarray[0]['source_location'];
                    $musicsequence = $musicimgarray[0]['sequence'];
                    $this->db->from('keyword_source_relation');
                    $this->db->where('source_id', $musicimgid);
                    $musickeywordarray = $this->db->get()->result_array();
                    $musicshower = '';
                    $musicseason = '';
                    if (count($musickeywordarray) > 0) {
                        for ($j = 0; $j < count($musickeywordarray); $j++) {
                            $this->db->from('keyword');
                            $this->db->where('id', $musickeywordarray[$j]['keyword_id']);
                            $tmpmusickeywordarray = $this->db->get()->result_array();
                            if ($tmpmusickeywordarray[0]['second_level'] == 'displayperson') {
                                $musicshower = $tmpmusickeywordarray[0]['keyword'];
                            }
                            if ($tmpmusickeywordarray[0]['second_level'] == 'seasondetails') {
                                $musicseason = $tmpmusickeywordarray[0]['keyword'];
                            }
                        }
                    }
                } else {
                    $musicshower = '';
                    $musicseason = '';
                    $musicimgid = 'none';
                    $imgurl = '';
                    $musicsequence = '';
                }


                $tmpmusicarray = array(
                    'shower' => $musicshower,
                    'season' => $musicseason,
                    'language' => $musicarray[$i]['third_level'],
                    'first_level' => $musicarray[$i]['first_level'],
                    'source_id' => $musicarray[$i]['id'],
                    'source_location' => $musicarray[$i]['source_location'],
                    'source_name' => $musicarray[$i]['source_name'],
                    'sequence' => $musicsequence,
                    'imgid' => $musicimgid,
                    'linkimg' => $imgurl
                );
                array_push($musiclists, $tmpmusicarray);
            }


            //$examinevideolists
            $this->db->from('source');
            $this->db->where('status', '2');
            $this->db->where('type', 'video/mp4');
            $examinevideoarray = $this->db->get()->result_array();
            for ($i = 0; $i < count($examinevideoarray); $i++) {
                $this->db->from('source');
                $this->db->where('link_url', '/' . $examinevideoarray[$i]['first_level'] . '/' . $examinevideoarray[$i]['first_level'] . 'inner/' . $examinevideoarray[$i]['id']);
                $examinevideoimgarray = $this->db->get()->result_array();
                if (count($examinevideoimgarray) > 0) {
                    $examinevideoimgid = $examinevideoimgarray[0]['id'];
                    $examinevideoimgurl = $examinevideoimgarray[0]['source_location'];
                    $examinevideosequence = $examinevideoimgarray[0]['sequence'];
                } else {
                    $examinevideoimgid = 'none';
                    $examinevideoimgurl = '';
                    $examinevideosequence = '';
                }

                $tmpexaminevideoarray = array(
                    'language' => $examinevideoarray[$i]['third_level'],
                    'first_level' => $examinevideoarray[$i]['first_level'],
                    'source_id' => $examinevideoarray[$i]['id'],
                    'source_location' => $examinevideoarray[$i]['source_location'],
                    'source_name' => $examinevideoarray[$i]['source_name'],
                    'sequence' => $examinevideosequence,
                    'imgid' => $examinevideoimgid,
                    'linkimg' => $examinevideoimgurl
                );
                array_push($examinevideolists, $tmpexaminevideoarray);
            }


            //keywordlists
            $this->db->from('keyword');
            $this->db->order_by('update_time', 'desc');
            $keywordarray = $this->db->get()->result_array();

            for ($i = 0; $i < count($keywordarray); $i++) {
                $tmpkeywordarray = array(
                    'first_level' => $keywordarray[$i]['first_level'],
                    'language' => $keywordarray[$i]['third_level'],
                    'id' => $keywordarray[$i]['id'],
                    'keyword' => $keywordarray[$i]['keyword'],
                    'type' => $keywordarray[$i]['second_level'],
                    'sequence' => $keywordarray[$i]['sequence']
                );
                array_push($keywordlists, $tmpkeywordarray);
            }


            //brands
            $this->db->from('keyword');
            $this->db->where('first_level', 'brandname');
            $this->db->order_by('update_time', 'desc');
            $brandarray = $this->db->get()->result_array();
            for ($i = 0; $i < count($brandarray); $i++) {
                $this->db->from('source');
                $this->db->where('type', 'img');
                $this->db->or_where('type', 'partnerimg');
                $this->db->order_by('update_time', 'desc');
                $brandimgarray = $this->db->get()->result_array();
                $this->db->from('source');
                $this->db->where('type', 'partnerimg');
                $this->db->where('second_level', $brandarray[$i]['id']);
                $this->db->order_by('update_time', 'desc');
                $brandimg = $this->db->get()->result_array();

                $tmpselect = '';
                if (count($brandimg) > 0) {
                    for ($j = 0; $j < count($brandimgarray); $j++) {
                        if ($brandimgarray[$j]['id'] == $brandimg[0]['id']) {
                            $realsequence = $brandimgarray[$j]['sequence'];
                            $brandimgurl = $brandimgarray[$j]['source_location'];
                            $tmpselect .= '<option value="' . $brandimgarray[$j]['id'] . '" selected>' . $brandimgarray[$j]['source_name'] . '</option>';
                        } else {
                            $tmpselect .= '<option value="' . $brandimgarray[$j]['id'] . '">' . $brandimgarray[$j]['source_name'] . '</option>';
                        }
                    }
                } else {
                    $realsequence = '';
                    $brandimgurl = '';
                    $tmpselect .= '<option value="">--无--</option>';
                    for ($j = 0; $j < count($brandimgarray); $j++) {
                        $tmpselect .= '<option value="' . $brandimgarray[$j]['id'] . '">' . $brandimgarray[$j]['source_name'] . '</option>';
                    }
                }
                $tmpbrandarray = array(
                    'first_level' => $brandarray[$i]['first_level'],
                    'language' => $brandarray[$i]['third_level'],
                    'keyword_id' => $brandarray[$i]['id'],
                    'imgurl' => $brandimgurl,
                    'keyword' => $brandarray[$i]['keyword'],
                    'selections' => '<select id="' . $brandarray[$i]['id'] . '_img">' . $tmpselect . '</select>',
                    'sequence' => $realsequence
                );
                array_push($brandlists, $tmpbrandarray);
            }


            //departments
            $this->db->from('department');
            $departments = $this->db->get()->result_array();

            //jobs
            $this->db->from('jobinfo');
            $jobs = $this->db->get()->result_array();

            for ($i = 0; $i < count($jobs); $i++) {
                $this->db->from('department');
                $this->db->where('id', $jobs[$i]['department_id']);
                $jobs[$i]['department'] = $this->db->get()->result_array()[0]['department'];
            }

            //seasons
            $this->db->from('keyword');
            $this->db->where('second_level', 'seasondetails');
            $seasons = $this->db->get()->result_array();
            for ($i = 0; $i < count($seasons); $i++) {
                $seasons[$i]['keyword'] = $seasons[$i]['keyword'] . $seasons[$i]['third_level'];
            }


            //displayer
            $this->db->from('keyword');
            $this->db->where('second_level', 'shower');
            $showers = $this->db->get()->result_array();
            for ($i = 0; $i < count($showers); $i++) {
                $showers[$i]['keyword'] = $showers[$i]['keyword'] . $showers[$i]['third_level'];
            }


            //musicvideo
            $this->db->from('source');
            $this->db->where('type', 'videoimg');
            $this->db->where("link_url like '%music%'");
            $musicvido = $this->db->get()->result_array();


            //privilige
            $this->db->from('privilige');
            $privilige = $this->db->get()->result_array();


            //userlists
            $this->db->from('user_info');
            $userlists=$this->db->get()->result_array();
            for ($i = 0; $i < count($userlists); $i++) {
                $this->db->from('privilige_user');
                $this->db->where('user_id',$userlists[$i]['id']);
                $tmpuserprivilige= $this->db->get()->result_array();
                $userlists[$i]['privilige']='';
                for ($j = 0; $j < count($tmpuserprivilige); $j++) {
                    $this->db->from('privilige');
                    $this->db->where('id',$tmpuserprivilige[$j]['privilige_id']);
                    $userlists[$i]['privilige'].=$this->db->get()->result_array()[0]['privilige'].' ';
                }
            }

            $imgsource = $this->source_model->querySource(
                array(
                    'status' => null,
                    'source_name' => null,
                    'first_level' => null,
                    'second_level' => null,
                    'third_level' => null,
                    'type' => 'img'
                )
            );
            $keyword = $this->keyword_model->queryKeyword(
                array(
                    'keyword' => null,
                    'first_level' => null,
                    'second_level' => null,
                    'third_level' => null,
                    'status' => '1'
                )
            );
            $videosource = $this->source_model->querySource(
                array(
                    'status' => null,
                    'source_name' => null,
                    'first_level' => null,
                    'second_level' => null,
                    'third_level' => null,
                    'type' => 'video/mp4'
                )
            );
            $data = array(
                'userlists'=>$userlists,
                'username' => $username,
                'privilige' => $privilige,
                'musiclists' => $musiclists,
                'musicvideo' => $musicvido,
                'showers' => $showers,
                'seasons' => $seasons,
                'jobs' => $jobs,
                'departmentselect' => $departments,
                'examinevideolists' => $examinevideolists,
                'brands' => $brandlists,
                'keywordlists' => $keywordlists,
                'videolists' => $videolists,
                'imagelists' => $imagelists,
                'img' => $imgsource,
                'keyword' => $keyword,
                'video' => $videosource
            );
            return $this->parser->parse($pagename, $data);
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }

    function saveImage(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            for($i=0;$i<count($privilige4user);$i++){
                $privilige41=false;
                $privilige42=false;
                $privilige43=false;
                $privilige44=false;
                $privilige45=false;
                $privilige46=false;
                $privilige47=false;
                $privilige48=false;
                $privilige49=false;
                $privilige410=false;
                switch($privilige4user[$i]){
                    case '1':$privilige41=true;break;
                    case '2':$privilige42=true;break;
                    case '3':$privilige43=true;break;
                    case '4':$privilige44=true;break;
                    case '5':$privilige45=true;break;
                    case '6':$privilige46=true;break;
                    case '7':$privilige47=true;break;
                    case '8':$privilige48=true;break;
                    case '9':$privilige49=true;break;
                    case '10':$privilige410=true;break;
                }
            }
            $sequence = '1';
//        $url=$_POST['url'];
            $source_location = $_POST['source_location'];
            $source_name = $_POST['source_name'];
            $source_remark = $_POST['source_remark'];
            $insertcontent = array(
                'source_location' => $source_location,
                'status' => '1',
                'source_name' => $source_name,
                'source_remark' => $source_remark,
                'link_url' => $_POST['url'],
                'sequence' => $sequence,
                'type' => 'img',
                'updater' => $username,
                'creator' => $username,
                'first_level' => null,
                'second_level' => null,
                'third_level' => $_POST['third_level'],
            );
            $this->load->model('source_model');
            var_dump($insertcontent);
            return $this->source_model->insertSource($insertcontent);
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    function saveVideo(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            for($i=0;$i<count($privilige4user);$i++){
                $privilige41=false;
                $privilige42=false;
                $privilige43=false;
                $privilige44=false;
                $privilige45=false;
                $privilige46=false;
                $privilige47=false;
                $privilige48=false;
                $privilige49=false;
                $privilige410=false;
                switch($privilige4user[$i]){
                    case '1':$privilige41=true;break;
                    case '2':$privilige42=true;break;
                    case '3':$privilige43=true;break;
                    case '4':$privilige44=true;break;
                    case '5':$privilige45=true;break;
                    case '6':$privilige46=true;break;
                    case '7':$privilige47=true;break;
                    case '8':$privilige48=true;break;
                    case '9':$privilige49=true;break;
                    case '10':$privilige410=true;break;
                }
            }
            $sequence = '1';
            $source_location = $_POST['source_location'];
            $source_name = $_POST['source_name'];
            $source_remark = $_POST['source_remark'];
            $videoimg = $_POST['videoimg'];
            $keyword = $_POST['keyword'];
            $keywordarray = explode('|||', $keyword);
            $third_level = $_POST['third_level'];
            $first_level = $_POST['first_level'];
            $insertvideo = array(
                'videoimg' => $videoimg,
                'keyword' => $keyword,
                'source_location' => $source_location,
                'status' => '2',
                'source_name' => $source_name,
                'source_remark' => $source_remark,
                'sequence' => $sequence,
                'type' => 'video/mp4',
                'updater' => $username,
                'creator' => $username,
                'first_level' => $first_level,
                'second_level' => null,
                'third_level' => $third_level,
                'link_url' => null,
                'videoimgid' => $videoimg,
                'keywordid' => $keywordarray
            );
            $this->load->model('source_model');
            $this->source_model->insertvideoSource($insertvideo);
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    function inserttags(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            for($i=0;$i<count($privilige4user);$i++){
                $privilige41=false;
                $privilige42=false;
                $privilige43=false;
                $privilige44=false;
                $privilige45=false;
                $privilige46=false;
                $privilige47=false;
                $privilige48=false;
                $privilige49=false;
                $privilige410=false;
                switch($privilige4user[$i]){
                    case '1':$privilige41=true;break;
                    case '2':$privilige42=true;break;
                    case '3':$privilige43=true;break;
                    case '4':$privilige44=true;break;
                    case '5':$privilige45=true;break;
                    case '6':$privilige46=true;break;
                    case '7':$privilige47=true;break;
                    case '8':$privilige48=true;break;
                    case '9':$privilige49=true;break;
                    case '10':$privilige410=true;break;
                }
            }
            $this->load->model('keyword_model');
            $tagtype = $_POST['tagtype'];
            $filename = $_FILES['file']['tmp_name'];
            if (empty ($filename)) {
                echo '请选择要导入的CSV文件！';
                exit;
            }
            $handle = fopen($filename, 'r');
            while ($data = fgetcsv($handle)) {
                $goods_list[] = $data;
            }
            if ('brandname' == $tagtype) {
                for ($i = 1; $i < count($goods_list); $i++) {
                    $insertcontent = array(
                        'keyword' => iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                        'sequence' => $goods_list[$i][1],
                        'first_level' => $tagtype,
                        'second_level' => $goods_list[$i][2],
                        'third_level' => $goods_list[$i][3],
                        'keyword_remark' => iconv('gb2312', 'utf-8', $goods_list[$i][4]),
                        'creator' =>$username,
                        'updater' => $username,
                        'status' => '1',
                    );
                    $this->keyword_model->insertKeyword($insertcontent);
                }
            } else {
                if ('locationdetails' != $tagtype) {
                    for ($i = 1; $i < count($goods_list); $i++) {

                        $insertcontent = array(
                            'keyword' => iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                            'sequence' => $goods_list[$i][1],
                            'first_level' => $tagtype,
                            'second_level' => $goods_list[$i][2],
                            'third_level' => $goods_list[$i][3],
                            'keyword_remark' => iconv('gb2312', 'utf-8', $goods_list[$i][4]),
                            'creator' => $username,
                            'updater' => $username,
                            'status' => '1',
                        );
                        $this->keyword_model->insertKeyword($insertcontent);
                    }
                } else {
                    for ($i = 1; $i < count($goods_list); $i++) {
                        $this->db->from('keyword');
                        $this->db->where('keyword', iconv('gb2312', 'utf-8', $goods_list[$i][0]));
                        $this->db->where('second_level', 'locationdetails');
                        $country = $this->db->get()->result_array();
                        if (count($country) > 0) {
                            $country_id = $country[0]['id'];
                        } else {
                            $insertcontent = array(
                                'keyword' => iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                                'sequence' => $goods_list[$i][1],
                                'first_level' => $goods_list[$i][4],
                                'second_level' => $tagtype,
                                'third_level' => $goods_list[$i][5],
                                'keyword_remark' => iconv('gb2312', 'utf-8', $goods_list[$i][6]),
                                'creator' => $username,
                                'updater' => $username,
                                'status' => '1',
                            );
                            $this->keyword_model->insertKeyword($insertcontent);
                            $country_id = $this->db->insert_id();
                        }
                        $insertcontent = array(
                            'keyword' => iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                            'sequence' => $goods_list[$i][1],
                            'first_level' => $goods_list[$i][4],
                            'second_level' => $country_id,
                            'third_level' => $goods_list[$i][5],
                            'keyword_remark' => iconv('gb2312', 'utf-8', $goods_list[$i][6]),
                            'creator' => $username,
                            'updater' => $username,
                            'status' => '1',
                        );
                        $this->keyword_model->insertKeyword($insertcontent);
                    }
                }
            }

            echo "<script>alert('导入成功！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/contentm'>";
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    function updateareainfo()
    {
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            for($i=0;$i<count($privilige4user);$i++){
                $privilige41=false;
                $privilige42=false;
                $privilige43=false;
                $privilige44=false;
                $privilige45=false;
                $privilige46=false;
                $privilige47=false;
                $privilige48=false;
                $privilige49=false;
                $privilige410=false;
                switch($privilige4user[$i]){
                    case '1':$privilige41=true;break;
                    case '2':$privilige42=true;break;
                    case '3':$privilige43=true;break;
                    case '4':$privilige44=true;break;
                    case '5':$privilige45=true;break;
                    case '6':$privilige46=true;break;
                    case '7':$privilige47=true;break;
                    case '8':$privilige48=true;break;
                    case '9':$privilige49=true;break;
                    case '10':$privilige410=true;break;
                }
            }
            date_default_timezone_set("UTC");
            $areatype = $_POST['areatype'];
            $third_level = $_POST['arealanguage'];
            switch ($areatype) {
                case 'homearea':
                    if($privilige41){
                        $modelupdateinfo1 = array(
                            'is_hide' => $_POST['homearea1_is_hide'],
                            'is_auto' => $_POST['homearea1_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'home', 'second_level' => 'area1', 'third_level' => $third_level));
                        $modelupdateinfo2 = array(
                            'is_hide' => $_POST['homearea2_is_hide'],
                            'is_auto' => $_POST['homearea2_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo2, array('first_level' => 'home', 'second_level' => 'area2', 'third_level' => $third_level));
                        $modelupdateinfo3 = array(
                            'is_hide' => $_POST['homearea3_is_hide'],
                            'is_auto' => $_POST['homearea3_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo3, array('first_level' => 'home', 'second_level' => 'area3', 'third_level' => $third_level));
                        $modelupdateinfo4 = array(
                            'is_hide' => $_POST['homearea4_is_hide'],
                            'is_auto' => $_POST['homearea4_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo4, array('first_level' => 'home', 'second_level' => 'area4', 'third_level' => $third_level));
                        $listarray1 = explode('|||', $_POST['homeimglist1']);
                        $listarray2 = explode('|||', $_POST['homeimglist2']);
                        $listarray3 = explode('|||', $_POST['homeimglist3']);
                        $listarray4 = explode('|||', $_POST['homeimglist4']);
                        if ($listarray1[0]) {
                            for ($i = 0; $i < count($listarray1); $i++) {
                                $this->db->from('source');
                                $this->db->where('id', $listarray1[$i]);
                                if ($this->db->get()->result_array()[0]['status'] == 1) {
                                    $sourceupdateinfo = array(
                                        'first_level' => 'home',
                                        'second_level' => 'imagearea1',
                                        'third_level' => $third_level,
                                        'updatetime' => date("y-m-d", time()),
                                        'status' => '1'
                                    );
                                } else {
                                    $sourceupdateinfo = array(
                                        'first_level' => 'home',
                                        'second_level' => 'imagearea1',
                                        'third_level' => $third_level,
                                        'updatetime' => date("y-m-d", time()),
                                        'status' => '2'
                                    );
                                }
                                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1[$i]));
                            };
                        }
                        if ($listarray2[0]) {
                            for ($i = 0; $i < count($listarray2); $i++) {
                                $this->db->from('source');
                                $this->db->where('id', $listarray2[$i]);
                                if ($this->db->get()->result_array()[0]['status'] == 1) {
                                    $sourceupdateinfo = array(
                                        'first_level' => 'home',
                                        'second_level' => 'imagearea2',
                                        'third_level' => $third_level,
                                        'updatetime' => date("y-m-d", time()),
                                        'status' => '1'
                                    );
                                } else {
                                    $sourceupdateinfo = array(
                                        'first_level' => 'home',
                                        'second_level' => 'imagearea2',
                                        'third_level' => $third_level,
                                        'updatetime' => date("y-m-d", time()),
                                        'status' => '2'
                                    );
                                }
                                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray2[$i]));
                            };
                        }
                        if ($listarray3[0]) {
                            for ($i = 0; $i < count($listarray3); $i++) {
                                $this->db->from('source');
                                $this->db->where('id', $listarray3[$i]);
                                if ($this->db->get()->result_array()[0]['status'] == 1) {
                                    $sourceupdateinfo = array(
                                        'first_level' => 'home',
                                        'second_level' => 'imagearea3',
                                        'third_level' => $third_level,
                                        'updatetime' => date("y-m-d", time()),
                                        'status' => '1'
                                    );
                                } else {
                                    $sourceupdateinfo = array(
                                        'first_level' => 'home',
                                        'second_level' => 'imagearea3',
                                        'third_level' => $third_level,
                                        'updatetime' => date("y-m-d", time()),
                                        'status' => '2'
                                    );
                                }
                                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray3[$i]));
                            };
                        }
                        if ($listarray4[0]) {
                            for ($i = 0; $i < count($listarray4); $i++) {
                                $this->db->from('source');
                                $this->db->where('id', $listarray4[$i]);
                                if ($this->db->get()->result_array()[0]['status'] == 1) {
                                    $sourceupdateinfo = array(
                                        'first_level' => 'home',
                                        'second_level' => 'imagearea4',
                                        'third_level' => $third_level,
                                        'updatetime' => date("y-m-d", time()),
                                        'status' => '1'
                                    );
                                } else {
                                    $sourceupdateinfo = array(
                                        'first_level' => 'home',
                                        'second_level' => 'imagearea4',
                                        'third_level' => $third_level,
                                        'updatetime' => date("y-m-d", time()),
                                        'status' => '2'
                                    );
                                }
                                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray4[$i]));
                            }
                        };
                    }else{
                        echo '<script>alert("无权限！")</script>';
                    }
                    break;


                case 'aboutarea':
                    if($privilige42){
                        $modelupdateinfo1 = array(
                            'is_hide' => $_POST['aboutarea1_is_hide'],
                            'is_auto' => $_POST['aboutarea1_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'about', 'second_level' => 'area1', 'third_level' => $third_level));
                        $modelupdateinfo2 = array(
                            'is_hide' => $_POST['aboutarea2_is_hide'],
                            'is_auto' => $_POST['aboutarea2_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo2, array('first_level' => 'about', 'second_level' => 'area2', 'third_level' => $third_level));
                        $modelupdateinfo3 = array(
                            'is_hide' => $_POST['aboutarea3_is_hide'],
                            'is_auto' => $_POST['aboutarea3_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo3, array('first_level' => 'about', 'second_level' => 'area3', 'third_level' => $third_level));
                        $listarray1 = $_POST['aboutimglist1'];
                        $listarray2 = $_POST['aboutimglist2'];
                        $listarray3 = $_POST['aboutimglist3'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'about',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'about',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));


                        $this->db->from('source');
                        $this->db->where('id', $listarray2);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'about',
                                'second_level' => 'videoarea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'about',
                                'second_level' => 'videoarea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray2));


                        $this->db->from('source');
                        $this->db->where('id', $listarray3);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'about',
                                'second_level' => 'imagearea3',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'about',
                                'second_level' => 'imagearea3',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray3));
                    }else{
                        echo '<script>alert("无权限！")</script>';
                    }
                    break;


                case 'platformarea':
                    if($privilige43){
                        $modelupdateinfo1 = array(
                            'is_hide' => $_POST['platformarea1_is_hide'],
                            'is_auto' => $_POST['platformarea1_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'platform', 'second_level' => 'area1', 'third_level' => $third_level));
                        $modelupdateinfo2 = array(
                            'is_hide' => $_POST['platformarea2_is_hide'],
                            'is_auto' => $_POST['platformarea2_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo2, array('first_level' => 'platform', 'second_level' => 'area2', 'third_level' => $third_level));
                        $modelupdateinfo3 = array(
                            'is_hide' => $_POST['platformarea3_is_hide'],
                            'is_auto' => $_POST['platformarea3_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo3, array('first_level' => 'platform', 'second_level' => 'area3', 'third_level' => $third_level));
                        $listarray1 = $_POST['platformimglist1'];
                        $listarray2 = $_POST['platformimglist2'];
                        $listarray3 = $_POST['platformimglist3'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'platform',
                                'second_level' => 'videoarea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'platform',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));


                        $this->db->from('source');
                        $this->db->where('id', $listarray2);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'platform',
                                'second_level' => 'imagearea2',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'platform',
                                'second_level' => 'imagearea2',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray2));


                        $this->db->from('source');
                        $this->db->where('id', $listarray3);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'platform',
                                'second_level' => 'imagearea3',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'platform',
                                'second_level' => 'imagearea3',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray3));
                    }else{
                        echo '<script>alert("无权限！")</script>';
                    }
                    break;


                case 'partnerarea':
                    if($privilige44){
                        $modelupdateinfo1 = array(
                            'is_hide' => $_POST['partnerarea1_is_hide'],
                            'is_auto' => $_POST['partnerarea1_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'partner', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['partnerimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'partner',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'partner',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));
                    }else{
                        echo '<script>alert("无权限！")</script>';
                    }

                    break;


                case 'ularea':
                    if($privilige45){
                        $modelupdateinfo1 = array(
                            'is_hide' => $_POST['ularea1_is_hide'],
                            'is_auto' => $_POST['ularea1_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'ul', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['ulimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'ul',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'ul',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));
                    }else{
                        echo '<script>alert("无权限！")</script>';
                    }
                    break;


                case 'awoearea':
                    if($privilige46){
                        $modelupdateinfo1 = array(
                            'is_hide' => $_POST['awoearea1_is_hide'],
                            'is_auto' => $_POST['awoearea1_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'awoe', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['awoeimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'awoe',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'awoe',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));
                    }else{
                        echo '<script>alert("无权限！")</script>';
                    }
                    break;


                case 'musicarea':
                    if($privilige47){
                        $modelupdateinfo1 = array(
                            'is_hide' => $_POST['musicarea1_is_hide'],
                            'is_auto' => $_POST['musicarea1_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'music', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['musicimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'music',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'music',
                                'second_level' => 'imagearea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));
                    }else{
                        echo '<script>alert("无权限！")</script>';
                    }
                    break;


                case 'joinarea':
                    if($privilige48){
                        $modelupdateinfo1 = array(
                            'is_hide' => $_POST['joinarea1_is_hide'],
                            'is_auto' => $_POST['joinarea1_is_auto']
                        );
                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'join', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['joinimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        if ($this->db->get()->result_array()[0]['status'] == 1) {
                            $sourceupdateinfo = array(
                                'first_level' => 'join',
                                'second_level' => 'videoarea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '1'
                            );
                        } else {
                            $sourceupdateinfo = array(
                                'first_level' => 'join',
                                'second_level' => 'videoarea1',
                                'third_level' => $third_level,
                                'updatetime' => date("y-m-d", time()),
                                'status' => '2'
                            );
                        };
                        $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));
                    }else{
                        echo '<script>alert("无权限！")</script>';
                    }
                    break;
            }
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function savesingleimg(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            $updateitem = array(
                'type' => $_POST['imgtype'],
                'sequence' => $_POST['sequence']
            );
            $this->db->update('source', $updateitem, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function savesinglevideo(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            $updateitem = array(
                'sequence' => $_POST['sequence']
            );
            $this->db->update('source', $updateitem, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function deletesinglesource(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            $deleteitem = array(
                'id' => $_POST['source_id']
            );
            $this->db->delete('source', $deleteitem);
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function savebrand(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            $updateitem = array(
                'type' => 'partnerimg',
                'second_level' => $_POST['brand_id'],
                'sequence' => $_POST['sequence']
            );
            $this->db->update('source', $updateitem, array('id' => $_POST['source_id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function savedepartment(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $insertdepartment = array(
                'department' => $_POST['department'],
                'create_time' => date('y-m-d', time()),
                'creator' => $username,
                'update_time' => date('y-m-d', time()),
                'updater' => $username
            );
            $this->db->from('department');
            $this->db->where('department', $_POST['department']);
            if (count($this->db->get()->result_array()) > 0) {
                echo false;
            } else {
                $this->db->insert('department', $insertdepartment);
                echo true;
            }
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function savejob(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $insertjob = array(
                'jobname' => $_POST['jobname'],
                'department_id' => $_POST['department_id'],
                'need' => $_POST['need'],
                'todo' => $_POST['todo'],
                'create_time' => date('y-m-d', time()),
                'creator' => $username,
                'update_time' => date('y-m-d', time()),
                'updater' => $username
            );
            $this->db->from('jobinfo');
            $this->db->where('jobname', $_POST['jobname']);
            $this->db->where('department_id', $_POST['department_id']);
            if (count($this->db->get()->result_array()) > 0) {
                echo false;
            } else {
                $this->db->insert('jobinfo', $insertjob);
                echo true;
            }
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function updatedepartment(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $departmentupdateinfo = array(
                'sequence' => $_POST['sequence'],
                'update_time' => date('y-m-d', time()),
                'updater' => $username
            );
            $this->db->update('department', $departmentupdateinfo, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function changedepartmentstatus(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $this->db->from('department');
            $this->db->where('id', $_POST['id']);
            if ($this->db->get()->result_array()[0]['status'] == '1') {
                $departmentupdateinfo = array(
                    'status' => '0',
                    'update_time' => date('y-m-d', time()),
                    'updater' => $username
                );
            } else {
                $departmentupdateinfo = array(
                    'status' => '1',
                    'update_time' => date('y-m-d', time()),
                    'updater' => $username
                );
            }
            $this->db->update('department', $departmentupdateinfo, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function deletedepartment(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            $this->db->delete('department', array('id' => $_POST['id']));
        }
    }
    public function updatejob(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $jobupdateinfo = array(
                'sequence' => $_POST['sequence'],
                'update_time' => date('y-m-d', time()),
                'updater' => $username
            );
            $this->db->update('jobinfo', $jobupdateinfo, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function changejobstatus(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $this->db->from('jobinfo');
            $this->db->where('id', $_POST['id']);
            if ($this->db->get()->result_array()[0]['status'] == '1') {
                $jobupdateinfo = array(
                    'status' => '0',
                    'update_time' => date('y-m-d', time()),
                    'updater' => $username
                );
            } else {
                $jobupdateinfo = array(
                    'status' => '1',
                    'update_time' => date('y-m-d', time()),
                    'updater' => $username
                );
            }
            $this->db->update('jobinfo', $jobupdateinfo, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function deletejob(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            $this->db->delete('jobinfo', array('id' => $_POST['id']));
        }
    }

    public function savemusic(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            $music_id = $_POST['music_id'];
            $shower_id = $_POST['shower'];
            $season_id = $_POST['season'];
            $time = $_POST['time'];
            $location = $_POST['location'];
            if ($music_id && $shower_id) {
                $this->db->from('keyword_source_relation');
                $this->db->where('source_id', $music_id);
                $this->db->where('keyword_id', $shower_id);
                if (count($this->db->get()->result_array()) > 0) {

                } else {
                    $this->db->insert('keyword_source_relation', array(
                        'source_id' => $music_id,
                        'keyword_id' => $shower_id
                    ));
                }
            }
            if ($music_id && $season_id) {
                $this->db->from('keyword_source_relation');
                $this->db->where('source_id', $music_id);
                $this->db->where('keyword_id', $season_id);
                if (count($this->db->get()->result_array()) > 0) {

                } else {
                    $this->db->insert('keyword_source_relation', array(
                        'source_id' => $music_id,
                        'keyword_id' => $season_id
                    ));
                }
            }
            if ($music_id) {
                $this->db->from('musicinfo');
                $this->db->where('music_id', $music_id);
                $tmpinfo = $this->db->get()->result_array();
                if (count($tmpinfo) > 0) {
                    $this->db->update('musicinfo', array(
                        'musiclocation' => $location,
                        'musiclocation' => $time
                    ), array('id' => $tmpinfo[0]['id']));
                } else {
                    $this->db->insert('keyword_source_relation', array(
                        'source_id' => $music_id,
                        'keyword_id' => $season_id
                    ));
                }
            }
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function addadmin()
    {
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            for($i=0;$i<count($privilige4user);$i++){
                $privilige41=false;
                $privilige42=false;
                $privilige43=false;
                $privilige44=false;
                $privilige45=false;
                $privilige46=false;
                $privilige47=false;
                $privilige48=false;
                $privilige49=false;
                $privilige410=false;
                switch($privilige4user[$i]){
                    case '1':$privilige41=true;break;
                    case '2':$privilige42=true;break;
                    case '3':$privilige43=true;break;
                    case '4':$privilige44=true;break;
                    case '5':$privilige45=true;break;
                    case '6':$privilige46=true;break;
                    case '7':$privilige47=true;break;
                    case '8':$privilige48=true;break;
                    case '9':$privilige49=true;break;
                    case '10':$privilige410=true;break;
                }
            }
            if($privilige49){
                date_default_timezone_set("UTC");
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $privilige = array($_POST['privilige1'], $_POST['privilige2'], $_POST['privilige3'], $_POST['privilige4'], $_POST['privilige5'], $_POST['privilige6'], $_POST['privilige7'], $_POST['privilige8'], $_POST['privilige9'], $_POST['privilige10']);
                $userinsertinfo = array(
                    'user_name' => $username,
                    'password' => $password,
                    'create_time' => date('y-m-d', time()),
                    'creator' => $username
                );
                $this->db->from('user_info');
                $this->db->where('user_name', $username);
                $tmpuserarray = $this->db->get()->result_array();
                if (count($tmpuserarray) > 0) {
                    echo false;
                } else {
                    $this->db->insert('user_info', $userinsertinfo);
                    $insertedid = $this->db->insert_id();
                    for ($i = 0; $i < count($privilige); $i++) {
                        if ($privilige[$i]) {
                            $this->db->insert('privilige_user', array('user_id' => $insertedid, 'privilige_id' => $i + 1));
                        }
                    }
                    echo true;
                }
            }
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }

    public function deleteuser(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            for($i=0;$i<count($privilige4user);$i++){
                $privilige41=false;
                $privilige42=false;
                $privilige43=false;
                $privilige44=false;
                $privilige45=false;
                $privilige46=false;
                $privilige47=false;
                $privilige48=false;
                $privilige49=false;
                $privilige410=false;
                switch($privilige4user[$i]){
                    case '1':$privilige41=true;break;
                    case '2':$privilige42=true;break;
                    case '3':$privilige43=true;break;
                    case '4':$privilige44=true;break;
                    case '5':$privilige45=true;break;
                    case '6':$privilige46=true;break;
                    case '7':$privilige47=true;break;
                    case '8':$privilige48=true;break;
                    case '9':$privilige49=true;break;
                    case '10':$privilige410=true;break;
                }
            }
            if($privilige410){
                $id = $_POST['id'];
                $this->db->delete('user_info', array('id' => $id));
                $this->db->delete('privilige_user', array('user_id' => $id));
            }
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function submitarea(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            for($i=0;$i<count($privilige4user);$i++){
                $privilige41=false;
                $privilige42=false;
                $privilige43=false;
                $privilige44=false;
                $privilige45=false;
                $privilige46=false;
                $privilige47=false;
                $privilige48=false;
                $privilige49=false;
                $privilige410=false;
                switch($privilige4user[$i]){
                    case '1':$privilige41=true;break;
                    case '2':$privilige42=true;break;
                    case '3':$privilige43=true;break;
                    case '4':$privilige44=true;break;
                    case '5':$privilige45=true;break;
                    case '6':$privilige46=true;break;
                    case '7':$privilige47=true;break;
                    case '8':$privilige48=true;break;
                    case '9':$privilige49=true;break;
                    case '10':$privilige410=true;break;
                }
            }
            switch($_POST['area']){
                case'home':if($privilige41){
                    $this->db->update('source', array('status' => '1'),array('first_level'=>$_POST['area'],'status' => '2'));
                }else{

                };break;
                case'about':if($privilige42){
                    $this->db->update('source', array('status' => '1'),array('first_level'=>$_POST['area'],'status' => '2'));
                }else{

                };break;
                case'platform':if($privilige43){
                    $this->db->update('source', array('status' => '1'),array('first_level'=>$_POST['area'],'status' => '2'));
                }else{

                };break;
                case'partner':if($privilige44){
                    $this->db->update('source', array('status' => '1'),array('first_level'=>$_POST['area'],'status' => '2'));
                }else{

                };break;
                case'ul':if($privilige45){
                    $this->db->update('source', array('status' => '1'),array('first_level'=>$_POST['area'],'status' => '2'));
                }else{

                };break;
                case'awoe':if($privilige46){
                    $this->db->update('source', array('status' => '1'),array('first_level'=>$_POST['area'],'status' => '2'));
                }else{

                };break;
                case'music':if($privilige47){
                    $this->db->update('source', array('status' => '1'),array('first_level'=>$_POST['area'],'status' => '2'));
                }else{

                };break;
                case'join':if($privilige48){
                    $this->db->update('source', array('status' => '1'),array('first_level'=>$_POST['area'],'status' => '2'));
                }else{

                };break;
            }

        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
}
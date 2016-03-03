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
            $pieces = explode("pagemanage", $pagename);




            //var_dump($query->result());



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
            $shows = array();
            $arealists=array();



            //arealists
            $this->db->from('webcontent');
            $areaarray = $this->db->get()->result_array();
            for ($i = 0; $i < count($areaarray); $i++) {
                $this->db->from('webcontent');
                $this->db->where('page',$areaarray[$i]['page']);//select every page get count
                $this->db->where('status','1');
                $tmparray = $this->db->get()->result_array();
                $tmpareaarray = array(
                    'id' => $areaarray[$i]['id'],
                    'name' => $areaarray[$i]['name'],
                    'page' => $areaarray[$i]['page'],
                    'status' => $areaarray[$i]['status'],
                    'sequence' => $areaarray[$i]['sequence'],
                    'update_time' => $areaarray[$i]['update_time'],
                    'count' => count($tmparray)
                );
                array_push($arealists, $tmpareaarray);
            }

            $affiliatedmodules='';

            //relatedimg
            $tmparr='';
            $relatedimg=array();
            switch($pieces[0]){
                case 'home':
                    $affiliatedmodules=array(
                        array('name'=>'首页1'),
                        array('name'=>'首页2'),
                        array('name'=>'首页3'),
                        array('name'=>'首页4'),
                    );
                    $tmparr=array('imagearea1','imagearea2','imagearea3','imagearea4');break;
                case 'about':
                    $affiliatedmodules=array(
                        array('name'=>'关于汉唐1'),
                        array('name'=>'关于汉唐2'),
                        array('name'=>'关于汉唐3'),
                        array('name'=>'关于汉唐4'),
                    );
                    $tmparr=array('about01','about02','about03','about04');break;
                case 'platform':
                    $affiliatedmodules=array(
                        array('name'=>'播出平台1'),
                        array('name'=>'播出平台2'),
                    );
                    $tmparr=array('aboutmap1','aboutmap2');break;
                case 'partner':
                    $affiliatedmodules=array(
                        array('name'=>'合作伙伴1'),
                    );
                    $tmparr=array('imagearea1');break;
                case 'ul':
                    $affiliatedmodules=array(
                        array('name'=>'极致1'),
                    );
                    $tmparr=array('imagearea1');break;
                case 'awoe':
                    $affiliatedmodules=array(
                        array('name'=>'问鼎世界1'),
                    );
                    $tmparr=array('imagearea1');break;
                case 'music':
                    $affiliatedmodules=array(
                        array('name'=>'音乐年1'),
                        array('name'=>'音乐年2')
                    );
                    $tmparr=array('imagearea1','imagearea2');break;
                case 'join':
                    $tmparr=NULL;break;
            }

            if($pieces[0] == 'music'){
                $this->db->from('source');
                $this->db->where('deleted', 0);
                $this->db->where('first_level',$pieces[0]);
                $this->db->where('third_level','zn');
                $this->db->where('type', 'img');

                $imgarray1 = $this->db->get()->result_array();

                $this->db->from('source');
                $this->db->where('deleted', 0);
                $this->db->where('first_level',$pieces[0]);
                $this->db->where('third_level','zn');
                $this->db->where('type', 'proimg');

                $imgarray2 = $this->db->get()->result_array();
                $imgarray = array_merge($imgarray1,$imgarray2);
                for ($i = 0; $i < count($imgarray); $i++) {
                    $tmpselect='';
                    $str=$imgarray[$i]['second_level'];
                    if($str=='imagearea11'||$str=='imagearea12'||$str=='imagearea13'){
                        continue;
                    }
                    for ($j = 0; $j < count($tmparr); $j++) {
                        if ($tmparr[$j] == $imgarray[$i]['second_level']) {
                            $tmpselect .= '<option value="' . $tmparr[$j] . '" selected>' . $tmparr[$j] . '</option>';
                        } else {
                            $tmpselect .= '<option value="' . $tmparr[$j] . '">' . $tmparr[$j] . '</option>';
                        }
                    }
                    $tmpimgarray = array(
                        'source_id' => $imgarray[$i]['id'],
                        'source_name' => $imgarray[$i]['source_name'],
                        'source_remark' => $imgarray[$i]['source_remark'],
                        'source_location' => $imgarray[$i]['source_location'],
                        'second_level' => '<select id="' . $imgarray[$i]['id'] . '_imgarea">' . $tmpselect . '</select>',
                    );
                    array_push($relatedimg, $tmpimgarray);
                }
            }else{
                $this->db->from('source');
                $this->db->where('deleted', 0);
                $this->db->where('first_level',$pieces[0]);
                $this->db->where('third_level','zn');
                $this->db->where('type', 'img');
                $imgarray = $this->db->get()->result_array();
                for ($i = 0; $i < count($imgarray); $i++) {
                    $tmpselect='';
                    $str=$imgarray[$i]['second_level'];
                    if($str=='imagearea11'||$str=='imagearea12'||$str=='imagearea13'){
                        continue;
                    }
                    for ($j = 0; $j < count($tmparr); $j++) {
                        if ($tmparr[$j] == $imgarray[$i]['second_level']) {
                            $tmpselect .= '<option value="' . $tmparr[$j] . '" selected>' . $tmparr[$j] . '</option>';
                        } else {
                            $tmpselect .= '<option value="' . $tmparr[$j] . '">' . $tmparr[$j] . '</option>';
                        }
                    }
                    $tmpimgarray = array(
                        'source_id' => $imgarray[$i]['id'],
                        'source_name' => $imgarray[$i]['source_name'],
                        'source_remark' => $imgarray[$i]['source_remark'],
                        'source_location' => $imgarray[$i]['source_location'],
                        'second_level' => '<select id="' . $imgarray[$i]['id'] . '_imgarea">' . $tmpselect . '</select>',
                    );
                    array_push($relatedimg, $tmpimgarray);
                }
            }




            //imagelists
            $this->db->from('source');
            $this->db->where('deleted', 0);
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
            $this->db->where('deleted', 0);
            $videoarray = $this->db->get()->result_array();
            for ($i = 0; $i < count($videoarray); $i++) {
                $this->db->from('source');
                $this->db->where('link_url', '/' . $videoarray[$i]['first_level'] . '/' . $videoarray[$i]['first_level'] . 'inner/' . $videoarray[$i]['id']);
                $videoimgarray = $this->db->get()->result_array();
                if (count($videoimgarray) > 0) {
                    $videoimgid = $videoimgarray[0]['id'];
                    $imgurl = $videoimgarray[0]['source_location'];
                    $videosequence = $videoimgarray[0]['sequence'];
                    //$index=$videoimgarray[0]['index'];
                } else {
                    $videoimgid = 'none';
                    $imgurl = '';
                    $videosequence = '';
                    $index='';
                }

                $tmpvideoarray = array(
                    'index'=>$index,
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
                    'status'=>$keywordarray[$i]['status'],
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

            //shows
            $this->db->from('keyword');
            $this->db->where('second_level', 'shower');
            $this->db->order_by('update_time', 'desc');
            $showarray = $this->db->get()->result_array();
            for ($i = 0; $i < count($showarray); $i++) {
                $this->db->from('source');
                $this->db->where('type', 'img');
                $this->db->or_where('type', 'partnerimg');
                $this->db->order_by('update_time', 'desc');
                $showerimgarray = $this->db->get()->result_array();
                $this->db->from('source');
                $this->db->where('second_level', $showarray[$i]['id']);
                $this->db->order_by('update_time', 'desc');
                $showerimg = $this->db->get()->result_array();

                $tmpselect = '';
                if (count($showerimg) > 0) {
                    for ($j = 0; $j < count($showerimgarray); $j++) {
                        if ($brandimgarray[$j]['id'] == $showerimg[0]['id']) {
                            $realsequence = $showerimgarray[$j]['sequence'];
                            $showerimgurl = $showerimgarray[$j]['source_location'];
                            $tmpselect .= '<option value="' . $showerimgarray[$j]['id'] . '" selected>' . $showerimgarray[$j]['source_name'] . '</option>';
                        } else {
                            $tmpselect .= '<option value="' . $showerimgarray[$j]['id'] . '">' . $showerimgarray[$j]['source_name'] . '</option>';
                        }
                    }
                } else {
                    $realsequence = '';
                    $showerimgurl = '';
                    $tmpselect .= '<option value="">--无--</option>';
                    for ($j = 0; $j < count($showerimgarray); $j++) {
                        $tmpselect .= '<option value="' . $showerimgarray[$j]['id'] . '">' . $showerimgarray[$j]['source_name'] . '</option>';
                    }
                }
                $tmpshowarray = array(
                    'first_level' => $showarray[$i]['first_level'],
                    'language' => $showarray[$i]['third_level'],
                    'keyword_id' => $showarray[$i]['id'],
                    'imgurl' => $showerimgurl,
                    'keyword' => $showarray[$i]['keyword'],
                    'selections' => '<select id="' . $showarray[$i]['id'] . '_img">' . $tmpselect . '</select>',
                    'sequence' => $realsequence
                );
                array_push($shows, $tmpshowarray);
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
                $departmentData = $this->db->get()->result_array();
                $jobs[$i]['department'] = $departmentData[0]['department'];
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
            $this->db->or_where('type','proimg');
            $this->db->where("link_url like '%music%'");
            $musicvido = $this->db->get()->result_array();


            //privilige
            $this->db->from('privilige');
            $privilige = $this->db->get()->result_array();


            //userlists
            $this->db->from('user_info');
            $userlists=$this->db->get()->result_array();
            for ($i = 0; $i < count($userlists); $i++) {
                $this->db->from('user_privilege');
                $this->db->where('user_id',$userlists[$i]['id']);
                $tmpuserprivilige= $this->db->get()->result_array();
                $userlists[$i]['privilige']='';
                for ($j = 0; $j < count($tmpuserprivilige); $j++) {
                    $this->db->from('privilige');
                    $this->db->where('id',$tmpuserprivilige[$j]['privilige_id']);
                    $priviligeData = $this->db->get()->result_array();
                    $userlists[$i]['privilige'].=$priviligeData[0]['privilige'].' ';
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
            //过滤
            for($i=0;$i<count($arealists);$i ++){
                $arealists[$i]['page'] = $this->getzn($arealists[$i]['page']);
                $arealists[$i]['name'] = $this->getzn($arealists[$i]['name']);
            }





            $data = array(
                'arealists'=>$arealists,
                'userlists'=>$userlists,
                'username' => $username,
                'privilige' => $privilige,
                'musiclists' => $musiclists,
                'musicvideo' => $musicvido,
                'showers' => $showers,
                'shows'=>$shows,
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
                'video' => $videosource,
                'affiliatedmodules'=>$affiliatedmodules,
                'relatedimg'=>$relatedimg,
            );
            //var_dump($arealists);
            return $this->parser->parse($pagename, $data);
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }

    function getzn($newStr){
        if(strstr($newStr,'home')){
            if(strlen($newStr) > strlen('home')){
                return '首页'.substr($newStr,4);
            }else{
                return '首页';
            }
        }
        if(strstr($newStr,'about')){
            if(strlen($newStr) > strlen('about')){
                return '关于汉唐'.substr($newStr,5);
            }else{
                return '关于汉唐';
            }

        }
        if(strstr($newStr,'platform')){
            if(strlen($newStr) > strlen('platform')){
                return '播出平台'.substr($newStr,8);
            }else{
                return '播出平台';
            }
        }
        if(strstr($newStr,'partner')){
            if(strlen($newStr) > strlen('partner')){
                return '合作伙伴'.substr($newStr,7);
            }else{
                return '合作伙伴';
            }
        }
        if(strstr($newStr,'ul')){
            if(strlen($newStr) > strlen('ul')){
                return '极致'.substr($newStr,2);
            }else{
                return '极致';
            }
        }
        if(strstr($newStr,'awoe')){
            if(strlen($newStr) > strlen('awoe')){
                return '问鼎'.substr($newStr,4);
            }else{
                return '问鼎';
            }
        }
        if(strstr($newStr,'music')){
            if(strlen($newStr) > strlen('music')){
                return '音乐年'.substr($newStr,5);
            }else{
                return '音乐年';
            }
        }
        if(strstr($newStr,'join')){
            if(strlen($newStr) > strlen('join')){
                return '加入汉唐'.substr($newStr,4);
            }else{
                return '加入汉唐';
            }
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
            //var_dump($insertcontent);
            return $this->source_model->insertSource($insertcontent);
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }

    function uploadLocalImg(){
        date_default_timezone_set("UTC");
        $this->load->library('session');
        if($this->session->username) {
            $username = $this->session->username;
            if ($_FILES["img"]["error"] > 0) {
                return json_encode(array("msg" => "Return Code:" . $_FILES["img"]["error"], "error" => "true"));
            } else {
                $id = $_POST['id'];
                echo $id;
                $first_level = $_POST['first_level'];
                $third_level = $_POST['third_level'];

                $fileUrl = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].'/img/';

                $imageName = $_FILES["img"]["name"];

                $insertLocalImgArray = array(
                    'source_location' => $fileUrl.$imageName,
                    'status' => '1',
                    'source_name' => $imageName,
                    'type' => 'videoimg',
                    'updater' => $username,
                    'creator' => $username,
                    'first_level' => $first_level,
                    'third_level' => $third_level,
                    'update_time'=>date("y-m-d", time()),
                    'create_time'=>date("y-m-d", time()),
                    'link_url'=>'/' . $first_level . '/' . $first_level . 'inner/' . $id,
                );


                $this->load->model('source_model');
                $this->source_model->insertLocalImg($insertLocalImgArray);

                move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/img/' .$imageName);    //缓存文件存入服务器
            }
        }
        else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    function savepageimg(){
        date_default_timezone_set("UTC");
        $this->load->library('session');

        if($this->session->username) {

            $username = $this->session->username;
            if ($_FILES["files"]["error"] > 0) {
                return json_encode(array("msg" => "Return Code:" . $_FILES["files"]["error"], "error" => "true"));
            } else {
                $sequence = '1';

                $fileUrl = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].'/bootstrap/images/';
                $source_location = $fileUrl.$_FILES["files"]["name"];
                //echo $_POST['source_location'];
                $source_name = $_POST['source_name'];
                $source_remark = $_POST['source_remark'];
                $third_level = 'zn';
                $first_level = $_POST['first_level'];
                $second_level=$_POST['affiliated'];
                $link_url = $_POST['link_url'];
                //echo $_FILES["files"]["tmp_name"];
                move_uploaded_file($_FILES["files"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'].'/bootstrap/images/'.$_FILES["files"]["name"]);
                if($second_level == 'imagearea2' && $first_level == 'music'){
                    $this->db->from('source');
                    //$this->db->select('id');
                    $this->db->where('source_location',$link_url);
                    $this->db->where('first_level','music');
                    $query=$this->db->get();
                    $results=$query->result_array();
                    $url="/music/musicinner/".$results[0]['id'];

                    $insertimg=array(
                        'source_location' => $source_location,
                        'status' => '1',
                        'source_name' => $source_name,
                        'link_url' => $url,
                        'sequence' => $sequence,
                        'updater' => $username,
                        'type' => 'proimg',
                        'creator' => $username,
                        'first_level' => $first_level,
                        'second_level' => $second_level,
                        'source_remark' => $source_remark,
                        'third_level' => $third_level,
                    );
                }else{
                    $insertimg=array(
                        'source_location' => $source_location,
                        'status' => '1',
                        'source_name' => $source_name,
                        'link_url' => null,
                        'sequence' => $sequence,
                        'updater' => $username,
                        'type' => 'img',
                        'creator' => $username,
                        'first_level' => $first_level,
                        'second_level' => $second_level,
                        'source_remark' => $source_remark,
                        'third_level' => $third_level,
                    );
                }




               $this->load->model('source_model');
                $this->source_model->insertimg($insertimg);
                echo 'success'.'||||';

            }



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
            //$videoimg = $_POST['videoimg'];
            $keyword = $_POST['keyword'];
            $keywordarray = explode('|||', $keyword);
            $third_level = $_POST['third_level'];
            $first_level = $_POST['first_level'];
            //$index = $_POST['index'];
            $this->load->model('source_model');

            if($first_level == 'about' || $first_level == 'platform' || $first_level == 'join'){
                $insertvideo = array(
                    //'videoimg' => $videoimg,
                    //'index'=>$index,
                    'keyword' => $keyword,
                    'source_location' => $source_location,
                    'status' => '1',
                    'source_name' => $source_name,
                    'source_remark' => $source_remark,
                    'sequence' => $sequence,
                    'type' => 'video/mp4',
                    'updater' => $username,
                    'creator' => $username,
                    'first_level' => $first_level,
                    'second_level' => 'videoarea1',
                    'third_level' => $third_level,
                    'link_url' => null,
                    //'videoimgid' => $videoimg,
                    'keywordid' => $keywordarray
                );
                $returnId=$this->source_model->insertvideoSource($insertvideo);
                $returnData = 'noimg';
                echo $returnData;
            }else{
                $insertvideo = array(
                    //'videoimg' => $videoimg,
                    //'index'=>$index,
                    'keyword' => $keyword,
                    'source_location' => $source_location,
                    'status' => '1',
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
                    //'videoimgid' => $videoimg,
                    'keywordid' => $keywordarray
                );
                $returnId=$this->source_model->insertvideoSource($insertvideo);
                $returnData = $returnId.'|'.$first_level.'|'.$third_level;
                echo $returnData;
            }
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    function excelTime($date, $time = false) {
        if(function_exists('GregorianToJD')){
            if (is_numeric( $date )) {
                $jd = GregorianToJD( 1, 1, 1970 );
                $gregorian = JDToGregorian( $jd + intval ( $date ) - 25569 );
                $date = explode( '/', $gregorian );
                $date_str = str_pad( $date [2], 4, '0', STR_PAD_LEFT )
                    ."-". str_pad( $date [0], 2, '0', STR_PAD_LEFT )
                    ."-". str_pad( $date [1], 2, '0', STR_PAD_LEFT )
                    . ($time ? " 00:00:00" : '');
                return $date_str;
            }
        }else{
            $date=$date>25568?$date+1:25569;
            /*There was a bug if Converting date before 1-1-1970 (tstamp 0)*/
            $ofs=(70 * 365 + 17+2) * 86400;
            $date = date("Y-m-d",($date * 86400) - $ofs).($time ? " 00:00:00" : '');
        }
        return $date;
    }
    function inserttags(){
        require_once $_SERVER['DOCUMENT_ROOT'].'/application/libraries/PHPExcel_1.8.0/Classes/PHPExcel.php';
        $this->load->library('session');
        if($this->session->username) {
            $username = $this->session->username;
            $this->load->model('keyword_model');
            //$tagtype = $_POST['tagtype'];
            $filename = $_FILES['file']['tmp_name'];
            if (empty ($filename)) {
                echo '请选择要导入的EXCEL文件！';
                exit;
            }
            $objReader = PHPExcel_IOFactory::createReaderForFile($filename);
            $objPHPExcel = $objReader->load($filename);
            $currentSheet = $objPHPExcel->getSheet(0); //第一个工作簿
            $allRow = $currentSheet->getHighestRow(); //行数
            $goods_list=array();
            for($currentRow = 2;$currentRow<=$allRow;$currentRow++){
                $xhA = $currentSheet->getCell('A'.$currentRow)->getValue();
                $xhC = $currentSheet->getCell('C'.$currentRow)->getValue();
                $xhE = $currentSheet->getCell('E'.$currentRow)->getValue();
                $xhF = $currentSheet->getCell('F'.$currentRow)->getValue();
                $xhG = $currentSheet->getCell('G'.$currentRow)->getValue();
                $xhJ = $currentSheet->getCell('J'.$currentRow)->getValue();
                $str1 = substr(self::excelTime($xhG),0,4);
                $first_level='';
                if (strpos($xhA, '极致') !== false) {
                    $first_level='ul';
                }else if(strpos($xhA, '问鼎') !== false){
                    $first_level='awoe';
                }else if(strpos($xhA, '音乐年') !== false){
                    $first_level='music';
                }
                //echo $first_level;
                //locationdetails
                $keyword1=array(
                    'keyword' => $xhE,
                    'sequence' => 2,
                    'first_level' => $first_level,
                    'second_level' => 'locationdetails',
                    'third_level' => '',
                    'keyword_remark' => iconv('gb2312', 'utf-8', $xhC),
                    'creator' =>$username,
                    'updater' => $username,
                    'status' => '1',
                );
                $this->keyword_model->insertKeyword($keyword1);

                $this->db->from('keyword');
                $this->db->where('keyword', $xhE);
                $this->db->where('first_level', $first_level);
                $this->db->where('second_level', 'locationdetails');
                $country = $this->db->get()->result_array();
                $country_id = $country[0]['id'];
                //yeardetails
                $keyword2=array(
                    'keyword' => $str1,
                    'sequence' => 2,
                    'first_level' => $first_level,
                    'second_level' => 'yeardetails',
                    'third_level' => '',
                    'keyword_remark' => iconv('gb2312', 'utf-8', $xhC),
                    'creator' =>$username,
                    'updater' => $username,
                    'status' => '1',
                );
                $this->keyword_model->insertKeyword($keyword2);
                //typedetails
                $keyword3=array(
                    'keyword' => $xhJ,
                    'sequence' => 2,
                    'first_level' => $first_level,
                    'second_level' => 'typedetails',
                    'third_level' => '',
                    'keyword_remark' => iconv('gb2312', 'utf-8', $xhC),
                    'creator' =>$username,
                    'updater' => $username,
                    'status' => '1',
                );
                $this->keyword_model->insertKeyword($keyword3);
                //citydetails
                $keyword4=array(
                    'keyword' => $xhF,
                    'sequence' => 2,
                    'first_level' => $first_level,
                    'second_level' => $country_id,
                    'third_level' => '',
                    'keyword_remark' => iconv('gb2312', 'utf-8', $xhC),
                    'creator' =>$username,
                    'updater' => $username,
                    'status' => '1',
                );
                $this->keyword_model->insertKeyword($keyword4);
            }

//            for($currentRow = 2;$currentRow<=$allRow;$currentRow++){
//                $xhA = $currentSheet->getCell('A'.$currentRow)->getValue();
//                $xhB = $currentSheet->getCell('B'.$currentRow)->getValue();
//                $xhC = $currentSheet->getCell('C'.$currentRow)->getValue();
//                $xhD = $currentSheet->getCell('D'.$currentRow)->getValue();
//                $xhE = $currentSheet->getCell('E'.$currentRow)->getValue();
//                $xhF = $currentSheet->getCell('F'.$currentRow)->getValue();
//                $temparr=array(
//                    'A'=>$xhA, 'B'=>$xhB,'C'=>$xhC,
//                    'D'=>$xhD, 'E'=>$xhE,'F'=>$xhF,
//                );
//                $goods_list[]=$temparr;
//            }
//
//            if ('brandname' == $tagtype) {
//                for ($i = 1; $i < count($goods_list); $i++) {
//                    $insertcontent = array(
//                        'keyword' => iconv('gb2312', 'utf-8', $goods_list[$i]['A']),
//                        'sequence' => $goods_list[$i]['B'],
//                        'first_level' => $tagtype,
//                        'second_level' => $goods_list[$i]['D'],
//                        'third_level' => $goods_list[$i]['E'],
//                        'keyword_remark' => iconv('gb2312', 'utf-8', $goods_list[$i]['F']),
//                        'creator' =>$username,
//                        'updater' => $username,
//                        'status' => '1',
//                    );
//                    $this->keyword_model->insertKeyword($insertcontent);
//                }
//            } else {
//                if ('locationdetails' != $tagtype) {
//                    for ($i = 1; $i < count($goods_list); $i++) {
//                        $insertcontent = array(
//                            'keyword' => iconv('gb2312', 'utf-8', $goods_list[$i]['A']),
//                            'sequence' => $goods_list[$i]['B'],
//                            'first_level' => $goods_list[$i]['C'],
//                            'second_level' => $tagtype,
//                            'third_level' => $goods_list[$i]['E'],
//                            'keyword_remark' => iconv('gb2312', 'utf-8', $goods_list[$i]['F']),
//                            'creator' => $username,
//                            'updater' => $username,
//                            'status' => '1',
//                        );
//                        $this->keyword_model->insertKeyword($insertcontent);
//                    }
//                } else {
//                    for ($i = 1; $i < count($goods_list); $i++) {
//                        $this->db->from('keyword');
//                        $this->db->where('keyword', iconv('gb2312', 'utf-8', $goods_list[$i]['A']));
//                        $this->db->where('second_level', 'locationdetails');
//                        $country = $this->db->get()->result_array();
//                        if (count($country) > 0) {
//                            $country_id = $country[0]['id'];
//                        } else {
//                            $insertcontent = array(
//                                'keyword' => iconv('gb2312', 'utf-8', $goods_list[$i]['A']),
//                                'sequence' => $goods_list[$i]['B'],
//                                'first_level' => $goods_list[$i]['C'],
//                                'second_level' => $tagtype,
//                                'third_level' => $goods_list[$i]['E'],
//                                'keyword_remark' => iconv('gb2312', 'utf-8', $goods_list[$i]['F']),
//                                'creator' => $username,
//                                'updater' => $username,
//                                'status' => '1',
//                            );
//                            $this->keyword_model->insertKeyword($insertcontent);
//                            $country_id = $this->db->insert_id();
//                        }
//                        $insertcontent = array(
//                            'keyword' => iconv('gb2312', 'utf-8', $goods_list[$i]['A']),
//                            'sequence' => $goods_list[$i]['B'],
//                            'first_level' => $goods_list[$i]['C'],
//                            'second_level' => $country_id,
//                            'third_level' => $goods_list[$i]['E'],
//                            'keyword_remark' => iconv('gb2312', 'utf-8', $goods_list[$i]['F']),
//                            'creator' => $username,
//                            'updater' => $username,
//                            'status' => '1',
//                        );
//                        $this->keyword_model->insertKeyword($insertcontent);
//                    }
//                }
//            }

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
//                        $modelupdateinfo1 = array(
//                            'is_hide' => $_POST['homearea1_is_hide'],
//                            'is_auto' => $_POST['homearea1_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'home', 'second_level' => 'area1', 'third_level' => $third_level));
//                        $modelupdateinfo2 = array(
//                            'is_hide' => $_POST['homearea2_is_hide'],
//                            'is_auto' => $_POST['homearea2_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo2, array('first_level' => 'home', 'second_level' => 'area2', 'third_level' => $third_level));
//                        $modelupdateinfo3 = array(
//                            'is_hide' => $_POST['homearea3_is_hide'],
//                            'is_auto' => $_POST['homearea3_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo3, array('first_level' => 'home', 'second_level' => 'area3', 'third_level' => $third_level));
//                        $modelupdateinfo4 = array(
//                            'is_hide' => $_POST['homearea4_is_hide'],
//                            'is_auto' => $_POST['homearea4_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo4, array('first_level' => 'home', 'second_level' => 'area4', 'third_level' => $third_level));
                        $listarray1 = explode('|||', $_POST['homeimglist1']);
                        $listarray2 = explode('|||', $_POST['homeimglist2']);
                        $listarray3 = explode('|||', $_POST['homeimglist3']);
                        $listarray4 = explode('|||', $_POST['homeimglist4']);
                        if ($listarray1[0]) {
                            for ($i = 0; $i < count($listarray1); $i++) {
                                $this->db->from('source');
                                $this->db->where('id', $listarray1[$i]);
                                $listData1 = $this->db->get()->result_array();
                                if ($listData1[0]['status'] == 1) {
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
                                $listData2 = $this->db->get()->result_array();
                                if ($listData2[0]['status'] == 1) {
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
                                $listData3 = $this->db->get()->result_array();
                                if ($listData3[0]['status'] == 1) {
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
                                $listData4 = $this->db->get()->result_array();
                                if ($listData4[0]['status'] == 1) {
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
//                        $modelupdateinfo1 = array(
//                            'is_hide' => $_POST['aboutarea1_is_hide'],
//                            'is_auto' => $_POST['aboutarea1_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'about', 'second_level' => 'area1', 'third_level' => $third_level));
//                        $modelupdateinfo2 = array(
//                            'is_hide' => $_POST['aboutarea2_is_hide'],
//                            'is_auto' => $_POST['aboutarea2_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo2, array('first_level' => 'about', 'second_level' => 'area2', 'third_level' => $third_level));
//                        $modelupdateinfo3 = array(
//                            'is_hide' => $_POST['aboutarea3_is_hide'],
//                            'is_auto' => $_POST['aboutarea3_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo3, array('first_level' => 'about', 'second_level' => 'area3', 'third_level' => $third_level));
                        $listarray1 = $_POST['aboutimglist1'];
                        $listarray2 = $_POST['aboutimglist2'];
                        $listarray3 = $_POST['aboutimglist3'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        $listarray1Data = $this->db->get()->result_array();
                        if ($listarray1Data[0]['status'] == 1) {
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
                        $listarray2Data = $this->db->get()->result_array();
                        if ($listarray2Data[0]['status'] == 1) {
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
                        $listarray3Data = $this->db->get()->result_array();
                        if ($listarray3Data[0]['status'] == 1) {
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
//                        $modelupdateinfo1 = array(
//                            'is_hide' => $_POST['platformarea1_is_hide'],
//                            'is_auto' => $_POST['platformarea1_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'platform', 'second_level' => 'area1', 'third_level' => $third_level));
//                        $modelupdateinfo2 = array(
//                            'is_hide' => $_POST['platformarea2_is_hide'],
//                            'is_auto' => $_POST['platformarea2_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo2, array('first_level' => 'platform', 'second_level' => 'area2', 'third_level' => $third_level));
//                        $modelupdateinfo3 = array(
//                            'is_hide' => $_POST['platformarea3_is_hide'],
//                            'is_auto' => $_POST['platformarea3_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo3, array('first_level' => 'platform', 'second_level' => 'area3', 'third_level' => $third_level));
                        $listarray1 = $_POST['platformimglist1'];
                        $listarray2 = $_POST['platformimglist2'];
                        $listarray3 = $_POST['platformimglist3'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        $listarray4Data = $this->db->get()->result_array();
                        if ($listarray4Data[0]['status'] == 1) {
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
                        $listarray5Data = $this->db->get()->result_array();
                        if ($listarray5Data[0]['status'] == 1) {
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
                        $listarray6Data = $this->db->get()->result_array();
                        if ($listarray6Data[0]['status'] == 1) {
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
//                        $modelupdateinfo1 = array(
//                            'is_hide' => $_POST['partnerarea1_is_hide'],
//                            'is_auto' => $_POST['partnerarea1_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'partner', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['partnerimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        $listarray7Data = $this->db->get()->result_array();
                        if ($listarray7Data[0]['status'] == 1) {
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

                        $listarray1 = $_POST['ulimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        $listarray8Data = $this->db->get()->result_array();
                        if ($listarray8Data[0]['status'] == 1) {
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
//                        $modelupdateinfo1 = array(
//                            'is_hide' => $_POST['awoearea1_is_hide'],
//                            'is_auto' => $_POST['awoearea1_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'awoe', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['awoeimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        $listarray9Data = $this->db->get()->result_array();
                        if ($listarray9Data[0]['status'] == 1) {
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
//                        $modelupdateinfo1 = array(
//                            'is_hide' => $_POST['musicarea1_is_hide'],
//                            'is_auto' => $_POST['musicarea1_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'music', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['musicimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        $listarray10Data = $this->db->get()->result_array();
                        if ($listarray10Data[0]['status'] == 1) {
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
//                        $modelupdateinfo1 = array(
//                            'is_hide' => $_POST['joinarea1_is_hide'],
//                            'is_auto' => $_POST['joinarea1_is_auto']
//                        );
//                        $this->db->update('webmodel', $modelupdateinfo1, array('first_level' => 'join', 'second_level' => 'area1', 'third_level' => $third_level));
                        $listarray1 = $_POST['joinimglist1'];
                        $this->db->from('source');
                        $this->db->where('id', $listarray1);
                        $listarray11Data = $this->db->get()->result_array();
                        if ($listarray11Data[0]['status'] == 1) {
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
    public function savhpmsingleimg(){
        $this->load->library('session');
        if($this->session->username) {
            $updateitem = array(
                'source_name' => $_POST['sourcename'],
                'source_remark' => $_POST['sourceremark'],
                'second_level' => $_POST['second_level']
            );
            $this->db->update('source', $updateitem, array('id' => $_POST['id']));
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
            $first_level = $_POST['first_level'];
            $video_id = $_POST['video_id'];
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            if($first_level == 'about' || $first_level == 'platform' || $first_level == 'join'){
                $updateitem1 = array(
                   'status'=>'2'
                );

               $this->db->update('source',$updateitem1,
                    array(
                        'first_level'=>$first_level,
                        'second_level'=>'videoarea1',
                        'type'=>'video/mp4'
                    )
                );
                $updateitem2 = array(
                    'status'=>'1'
                );
                $this->db->update('source', $updateitem2, array('id' => $video_id));
            }else{
                $updateitem = array(
                    'sequence' => $_POST['sequence']
                );
                $this->db->update('source', $updateitem, array('id' => $_POST['id']));
            }
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function deletesinglesource(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
//            $deleteitem = array(
//                'id' => $_POST['source_id']
//            );
//            $this->db->delete('source', $deleteitem);
            $data = array(
                'deleted' => 1,
            );

            $this->db->where('id', $_POST['source_id']);
            $this->db->update('source', $data);
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
    public function saveshower(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            $updateitem = array(
                'second_level' => $_POST['shower_id'],
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
            $departmentData = $this->db->get()->result_array();
            if ($departmentData[0]['status'] == '1') {
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
            $jobInfoData = $this->db->get()->result_array();
            if ($jobInfoData[0]['status'] == '1') {
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
            $music_id = $_POST['musicId'];
            $season = $_POST['season'];
            $time = $_POST['time'];
            $location = $_POST['location'];
            /*if ($music_id) {
                $this->db->from('keyword_source_relation');
                $this->db->where('source_id', $music_id);
                if (count($this->db->get()->result_array()) > 0) {

                } else {
                    $this->db->insert('keyword_source_relation', array(
                        'source_id' => $music_id,
                        'keyword_id' => $shower_id
                    ));
                }
            }*/
           /* if ($music_id && $season_id) {
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
            }*/
            if ($music_id) {
                $this->db->from('musicinfo');
                $this->db->where('music_id', $music_id);
                $tmpinfo = $this->db->get()->result_array();
                if (count($tmpinfo) > 0) {
                    $this->db->update('musicinfo', array(
                        'musiclocation' => $location,
                        'musictime' => $season.$time
                    ), array('id' => $tmpinfo[0]['id']));
                } else {
                    //$this->db->from('musicinfo');
                    //$maxid =  $this->db->select_max('id')->get_where('musicinfo');
                    $maxid = $this->db->count_all('musicinfo');
                    $this->db->insert('musicinfo', array(
                        'id'=>$maxid+1,
                        'music_id' => $music_id,
                        'musiclocation' => $location,
                        'musictime' => $season.$time
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

    /**
     *
     */
    public function queryimage(){
        $this->load->library('session');

        if($this->session->username) {
            $imglevel=$_POST['imglevel'];
            $imgname=$_POST['imgname'];
            $this->db->from('source');
            if($imglevel){
                $this->db->where("source_name like '%".$imgname."%' and first_level='".$imglevel."' and ( type='img' or type='partnerimg')");
            }else{
                $this->db->where("source_name like '%".$imgname."%' and ( type='img' or type='partnerimg')");
            }

//            $this->db->where("first_level",$imglevel);
//            $this->db->where('type', 'img');
//            $this->db->or_where('type', 'partnerimg');
            $resultarray=$this->db->get()->result_array();
            $result="";
            $result.="<table><tr><td>图片名称</td><td>图片地址</td><td>图片类型</td><td>顺序</td><td>图片缩略图</td><td>编辑</td></tr>";


            $imgtypearray = array(
                'img', 'videoimg', 'partnerimg'
            );
            for($i=0;$i<count($resultarray);$i++){
                $tmpselect = '';
                for ($j = 0; $j < count($imgtypearray); $j++) {
                    if ($imgtypearray[$j] == $resultarray[$i]['type']) {
                        $tmpselect .= '<option value="' . $imgtypearray[$j] . '" selected>' . $imgtypearray[$j] . '</option>';
                    } else {
                        $tmpselect .= '<option value="' . $imgtypearray[$j] . '">' . $imgtypearray[$j] . '</option>';
                    }
                }
                $result.="<tr><td id=\'".$resultarray[$i]['id']."\' class=\'cl-imgname\'>";
                $result.=$resultarray[$i]['source_name'];
                $result.="</td><td class=\"cl-imgadd\">";
                $result.=$resultarray[$i]['source_location'];
                $result.="</td><td class=\"cl-imgtype\">";
                $result.=<<<TAG
<select id=\'
TAG;
                $result.=$resultarray[$i]['id'];
                $result.=<<<TAG
_imgtype\'>
TAG;
                $result.=$tmpselect;
                $result.="</select>";
                $result.="</td><td class=\"cl-imgseq\"><input type=\"number\" value=\'";
                $result.=$resultarray[$i]['sequence'];
                $result.=<<<TAG
\' name="sequence" id=\'
TAG;
                $result.=$resultarray[$i]['id'];
                $result.="_sequence\' class=\"cl-imgseqinput\"></td><td id=\'";
                $result.=$resultarray[$i]['id'];
                $result.=<<<TAG
_img\' class="cl-imgmini"><img src=\'
TAG;
                $result.=$resultarray[$i]['source_location'];
                $result.=<<<TAG
\' style="width:96px;height: 54px;"></td><td class="cl-imgedit"><a href="javascript:;" onclick="\$savesingleimg(\'
TAG;
                $result.=$resultarray[$i]['id'];
                $result.=<<<TAG
\')" class="cl-imgeditbtn">保存</a><a href="javascript:;" onclick="\$deletesingleimg(\'
TAG;
                $result.=$resultarray[$i]['id'];
                $result.="\')\" class=\"cl-imgeditbtn\">删除</a></td></tr>";
            }
            $result.="</table></div></div>";
            echo $result;
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function queryvideo(){
        $this->load->library('session');

        if($this->session->username) {
            $videolevel=$_POST['videolevel'];
            $videoname=$_POST['videoname'];
            $this->db->from('source');
            if($videolevel){
                $this->db->where("source_name like '%".$videoname."%' and first_level='".$videolevel."' and type='video/mp4'");
            }else{
                $this->db->where("source_name like '%".$videoname."%' and type='video/mp4'");
            }

            $videoarray = $this->db->get()->result_array();
            $result="";
            $result.="<table><tr><td class=\"vl-title1\">视频名称</td><td class=\"vl-title2\">视频地址</td><td class=\"vl-title3\">栏目</td><td class=\"vl-title4\">语言</td><td class=\"vl-title5\">顺序</td><td class=\"vl-title6\">封面缩略图</td><td class=\"vl-title7\">编辑</td></tr>";
            for ($i = 0; $i < count($videoarray); $i++) {
                $this->db->from('source');
                $this->db->where('link_url', '/' . $videoarray[$i]['first_level'] . '/' . $videoarray[$i]['first_level'] . 'inner/' . $videoarray[$i]['id']);
                $videoimgarray = $this->db->get()->result_array();
                if (count($videoimgarray) > 0) {
                    $videoimgid = $videoimgarray[0]['id'];
                    $imgurl = $videoimgarray[0]['source_location'];
                    $videosequence = $videoimgarray[0]['sequence'];
                    /*$index=$videoimgarray[0]['index'];*/
                } else {
                    $videoimgid = 'none';
                    $imgurl = '';
                    $videosequence = '';
                    $index='';
                }

                $tmpvideoarray = array(
                    //'index'=>$index,
                    'language' => $videoarray[$i]['third_level'],
                    'first_level' => $videoarray[$i]['first_level'],
                    'source_id' => $videoarray[$i]['id'],
                    'source_location' => $videoarray[$i]['source_location'],
                    'source_name' => $videoarray[$i]['source_name'],
                    'sequence' => $videosequence,
                    'imgid' => $videoimgid,
                    'linkimg' => $imgurl
                );
                $result.="                <tr>";
                $result.="<td id=\"".$tmpvideoarray['imgid']."\" class=\"vl-imgname\">".$tmpvideoarray['source_name']. "</td>";
                $result.="<td id=\"".$tmpvideoarray['imgid']."_url\" class=\"vl-imgadd\">";
                $result.=$tmpvideoarray['source_location'];
                $result.="</td>";
                $result.="<td id=\"".$tmpvideoarray['source_id']."_first\" class=\"vl-imgfirst\">";
                $result.=$tmpvideoarray['first_level'];
                $result.="</td>";
                $result.="<td id=\"".$tmpvideoarray['source_id']."_lang\" class=\"vl-imglang\">";
                $result.=$tmpvideoarray['language'];
                $result.="</td>";
                $result.="<td class=\"vl-imgseq\">";
                $result.="    <input type=\"number\" value=\"".$tmpvideoarray['sequence']."\" name=\"sequence\" id=\"".$tmpvideoarray['imgid']."_sequence\" class=\"vl-imgseqinput\">";
                $result.="</td>";
                $result.="<td id=\"".$tmpvideoarray['imgid']."_img\" class=\"vl-imgmini\">";
                $result.="    <img src=\"".$tmpvideoarray['linkimg']."\" style=\"width:96px;height: 54px;\">";
                $result.="</td>";
               /* $result.="<td class=\"vl-imgseq\">";
                $result.="<input type=\"text\" value=\"".$tmpvideoarray['index']."\" name=\"sequence\" id=\"".$tmpvideoarray['imgid']."_index\" class=\"vl-imgseqinput\">";
                $result.="</td>";*/
                $result.="<td id=\"".$tmpvideoarray['imgid']."_edit\" class=\"vl-imgedit\">";
                $result.=<<<TAG
<a href="javascript:;" onclick="\$savesinglevideo(\'
TAG
.$tmpvideoarray['imgid'].<<<TAG
\') " class="cl-imgeditbtn">保存</a>
TAG;
                $result.=<<<TAG
    <a href="javascript:;" onclick="\$deletesinglevideo(\'
TAG
.$tmpvideoarray['source_id'].<<<TAG
\')" class="cl-imgeditbtn">删除</a>
TAG;
                $result.="</td>";
                $result.="</tr>";

            }
            $result.="</table>";
            echo $result;
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function querykeyword(){
        $this->load->library('session');

        if($this->session->username) {
            $keywordlevel=$_POST['keywordlevel'];
            $keywordname=$_POST['keywordname'];
            $this->db->from('keyword');
            if($keywordlevel){
                $this->db->where("keyword like '%".$keywordname."%' and first_level='".$keywordlevel."'");
            }else{
                $this->db->where("keyword like '%".$keywordname."%'");
            }

            $keywordarray = $this->db->get()->result_array();
            $result="";
            $result.="<table>";
            $result.="<tr>";
            $result.="<td class=\""."vl-check\">";
            $result.="<input type=\"checkbox\" name=\"test\"";
            $result.=" onclick=\"if(this.checked==true) { checkAll(); } else { clearAll(); }\">全选";
            $result.="</td>";
            $result.="<td class=\""."hpm-tags1\">标签名称</td>";
            $result.="<td class=\""."hpm-tags2\">标签栏目</td>";
            $result.="<td class=\""."hpm-tags3\">标签语言</td>";
            $result.="<td class=\""."hpm-tags4\">标签状态</td>";
            $result.="<td class=\""."hpm-tags5\">顺序</td>";
            $result.="<td class=\""."hpm-tags6\">标签类型</td>";
            $result.="<td class=\""."hpm-tags7\">";
            $result.="<a href=\""."javascript:;\" onclick=\""."\$saveselectedkeyword()\">保存所选</a>";
            $result.="</td>";
            $result.="<td class=\""."hpm-tags8\">";
            $result.="<a href=\""."javascript:;\" onclick=\""."\$deleteselectedkeyword()\">删除所选</a>";
            $result.="</td>";
            $result.="<td class=\""."hpm-tags9\">";
            $result.="<a href=\""."javascript:;\" onclick=\""."\$changeselectedkeyword()\">隐/显 所选</a>";
            $result.="</td>"."</tr>";



            for ($i = 0; $i < count($keywordarray); $i++) {
                $tmpkeywordarray = array(
                    'first_level' => $keywordarray[$i]['first_level'],
                    'language' => $keywordarray[$i]['third_level'],
                    'id' => $keywordarray[$i]['id'],
                    'status'=>$keywordarray[$i]['status'],
                    'keyword' => $keywordarray[$i]['keyword'],
                    'type' => $keywordarray[$i]['second_level'],
                    'sequence' => $keywordarray[$i]['sequence']
                );
                $result.="<tr>";
                $result.="<td id=\""."hpm-check\""." class=\""."vl-check\""."><input type=\""."checkbox\""." name=\""."check\""."></td>";
                $result.="<td class=\""."hpm-tags1\""." id=\"".$tmpkeywordarray['id']."\">".$tmpkeywordarray['keyword']."</td>";
                $result.="<td class=\""."hpm-tags2\""." id=\"".$tmpkeywordarray['id']."_first\">";
                $result.=$tmpkeywordarray['first_level'];
                $result.="</td>";
                $result.="<td class=\""."hpm-tags3\""." id=\"".$tmpkeywordarray['id']."_lang\">";
                $result.=$tmpkeywordarray['language'];
                $result.="</td>";
                $result.="<td class=\""."hpm-tags4\">";
                $result.=$tmpkeywordarray['status'];
                $result.="</td>";
                $result.="<td class=\""."hpm-tags5\">";
                $result.="<input type=\"number\" value=\"".$tmpkeywordarray['sequence']."\" name=\"sequence\" id=\"".$tmpkeywordarray['id']."_sequence\">";
                $result.="</td>";
                $result.="<td class=\""."hpm-tags6\""." id=\"".$tmpkeywordarray['id']."_type\">";
                $result.=$tmpkeywordarray['type'];
                $result.="</td>";
                $result.="<td class=\""."hpm-tags7\""." id=\"".$tmpkeywordarray['id']."_edit1\">";
                $result.="<a href=\"javascript:;\" onclick=\"\$savekeywordchanges('".$tmpkeywordarray['id']."')\">保存</a>";
                $result.="</td>";
                $result.="<td class=\""."hpm-tags8\""." id=\"".$tmpkeywordarray['id']."_edit2\">";
                $result.="<a href=\"javascript:;\" onclick=\"\$deletesinglekeyword('".$tmpkeywordarray['id']."')\">删除</a>";
                $result.="</td>";
                $result.="<td class=\""."hpm-tags9\""." id=\"".$tmpkeywordarray['id']."_edit3\">";
                $result.="<a href=\"javascript:;\" onclick=\"\$changekeywordstatus('".$tmpkeywordarray['id']."')\">隐藏/显示</a>";
                $result.="</td>";
                $result.="</tr>";
            }

            $result.="</table>";
            echo $result;
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function savekeywordchanges(){
        $this->load->library('session');
        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");

            $keywordupdateinfo = array(
                'sequence' => $_POST['sequence'],
                'update_time' => date('y-m-d', time()),
                'updater' => $username
            );
            $this->db->update('keyword', $keywordupdateinfo, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function changekeywordstatus(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $this->db->from('keyword');
            $this->db->where('id', $_POST['id']);
            $userInfoData = $this->db->get()->result_array();
            if ($userInfoData[0]['status'] == '1') {
                $keywordupdateinfo = array(
                    'status' => '0',
                    'update_time' => date('y-m-d', time()),
                    'updater' => $username
                );
            } else {
                $keywordupdateinfo = array(
                    'status' => '1',
                    'update_time' => date('y-m-d', time()),
                    'updater' => $username
                );
            }
            $this->db->update('keyword', $keywordupdateinfo, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function changeareastatus(){
        $this->load->library('session');
        if($this->session->username) {
            $username = $this->session->username;
            $privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $this->db->from('webcontent');
            $this->db->where('id', $_POST['id']);
            $userInfoData = $this->db->get()->result_array();

            if ($userInfoData[0]['status'] == '1') {
                $areaupdateinfo = array(
                    'status' => '0',
                    'update_time' => date('y-m-d', time()),
                    'updater' => $username
                );
            } else {
                $areaupdateinfo = array(
                    'status' => '1',
                    'update_time' => date('y-m-d', time()),
                    'updater' => $username
                );
            }
            $this->db->update('webcontent', $areaupdateinfo, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }

    public function queryarea(){
        $this->load->library('session');
        if($this->session->username){
            $arealevel=$_POST['arealevel'];
            $areaname=$_POST['areaname'];

            $result="";
            $result.="<table><tr><td>模块名称</td><td>所属页面</td><td>状态</td><td>顺序</td><td>更新时间</td><td>所属页面内容数</td><td>编辑</td></tr>";
            $this->db->from('webcontent');

            if(!$arealevel && !$areaname){
            }else{
                if(!$arealevel && $areaname){
                    $this->db->where("name like '%".$areaname."%'");
                }else if(!$areaname && $arealevel){
                    $this->db->where("page='".$arealevel."'");
                }else{
                    $this->db->where("name like '%".$areaname."%' and page='".$arealevel."'");
                }
            }
            $this->db->where('status','1');
            $tmparray = $this->db->get()->result_array();

            for ($i = 0; $i < count($tmparray); $i++){
                $this->db->from('webcontent');
                $this->db->where('page',$tmparray[$i]['page']);
                $this->db->where('status','1');
                $tmpcount = $this->db->get()->result_array();
                $countContentInPage = count($tmpcount);
                $tmpareaarray = array(
                    'id' => $tmparray[$i]['id'],
                    'name' => $tmparray[$i]['name'],
                    'page' => $tmparray[$i]['page'],
                    'status' => $tmparray[$i]['status'],
                    'sequence' => $tmparray[$i]['sequence'],
                    'update_time' => $tmparray[$i]['update_time'],
                    'count' => $countContentInPage
                );
                $result.="<tr>";
                $result.="<td class=\"cl-imgname\">";
                $result.=$this->getzn($tmpareaarray['name']);
                $result.="</td>";
                $result.="<td class=\"cl-imgadd\">";
                $result.=$this->getzn($tmpareaarray['page']);
                $result.="</td>";
                $result.="<td class=\"cl-imgtype\">";
                $result.=$tmpareaarray['status'];
                $result.="</td>";
                $result.="<td class=\"cl-imgseq\">";
                $result.="<input type=\"number\" value=\"".$tmpareaarray['sequence']."\" name=\"sequence\" id=\"".$tmpareaarray['id']."_sequence\" class=\"cl-imgseqinput\">";
                $result.="</td>";
                $result.="<td class=\"cl-imgmini\">";
                $result.=$tmpareaarray['update_time'];
                $result.="</td>";
                $result.="<td class=\"cl-imgmini\">";
                $result.=$tmpareaarray['count'];
                $result.="</td>";
                $result.="<td class=\"cl-imgedit\">";
                $result.="<a href=\"javascript:;\" onclick=\"\$updatearea('".$tmpareaarray['id']."')\" class=\"cl-imgeditbtn\">保存</a>";
                $result.="<a href=\"javascript:;\" onclick=\"\$changeareastatus('".$tmpareaarray['id']."')\" class=\"cl-imgeditbtn\">显示/隐藏</a>";
                $result.="<a href=\"javascript:;\" onclick=\"\$deletearea('".$tmpareaarray['id']."')\" class=\"cl-imgeditbtn\">删除</a>";
                $result.="</td>";
                $result.="</tr>";
            }

            $result.="</table>";
            echo $result;

        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    /*public function queryarea(){
        $this->load->library('session');
        if($this->session->username) {
            $arealevel=$_POST['arealevel'];
            $areaname=$_POST['areaname'];
            $this->db->from('keyword');
            if($arealevel){
                $this->db->where("name like '%".$areaname."%' and page='".$arealevel."'");
            }else{
                $this->db->where("name like '%".$areaname."%'");
            }

            $areaarray = $this->db->get()->result_array();
            $result="";
            $result.="<table><tr><td>模块名称</td><td>所属页面</td><td>状态</td><td>顺序</td><td>更新时间</td><td>所属页面内容数</td><td>编辑</td></tr>";
            for ($i = 0; $i < count($areaarray); $i++) {
                $this->db->from('webcontent');
                $this->db->where('page',$areaarray[$i]['page']);
                $this->db->where('status','1');
                $tmparray = $this->db->get()->result_array();
                $tmpareaarray = array(
                    'id' => $areaarray[$i]['id'],
                    'name' => $areaarray[$i]['name'],
                    'page' => $areaarray[$i]['page'],
                    'status' => $areaarray[$i]['status'],
                    'sequence' => $areaarray[$i]['sequence'],
                    'update_time' => $areaarray[$i]['update_time'],
                    'count' => count($tmparray)
                );

                $result.="<tr>";
                $result.="<td class=\"cl-imgname\">";
                $result.=$tmpareaarray['name'];
                $result.="</td>";
                $result.="<td class=\"cl-imgadd\">";
                $result.=$tmpareaarray['page'];
                $result.="</td>";
                $result.="<td class=\"cl-imgtype\">";
                $result.=$tmpareaarray['status'];
                $result.="</td>";
                $result.="<td class=\"cl-imgseq\">";
                $result.="<input type=\"number\" value=\"".$tmpareaarray['sequence']."\" name=\"sequence\" id=\"".$tmpareaarray['id']."_sequence\" class=\"cl-imgseqinput\">";
                $result.="</td>";
                $result.="<td class=\"cl-imgmini\">";
                $result.=$tmpareaarray['update_time'];
                $result.="</td>";
                $result.="<td class=\"cl-imgmini\">";
                $result.=$tmpareaarray['count'];
                $result.="</td>";
                $result.="<td class=\"cl-imgedit\">";
                $result.="<a href=\"javascript:;\" onclick=\"\$updatearea('".$tmpareaarray['id']."')\" class=\"cl-imgeditbtn\">保存</a>";
                $result.="<a href=\"javascript:;\" onclick=\"\$changeareastatus('".$tmpareaarray['id']."')\" class=\"cl-imgeditbtn\">显示/隐藏</a>";
                $result.="<a href=\"javascript:;\" onclick=\"\$deletearea('".$tmpareaarray['id']."')\" class=\"cl-imgeditbtn\">删除</a>";
                $result.="</td>";
                $result.="</tr>";
            }
            $result.="</table>";
            echo $result;
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }*/

    public function updatearea(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            date_default_timezone_set("UTC");
            $areaupdateinfo = array(
                'sequence' => $_POST['sequence'],
                'update_time' => date('y-m-d', time()),
                'updater' => $username
            );
            $this->db->update('webcontent', $areaupdateinfo, array('id' => $_POST['id']));
        }else{
            echo "<script>alert('请先登录！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    public function deletearea(){
        $this->load->library('session');

        if($this->session->username) {
            $username = $this->session->username;$privilige4user=$this->session->privilige;
            $this->db->delete('webcontent', array('id' => $_POST['id']));
        }
    }
}
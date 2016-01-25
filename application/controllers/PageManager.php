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

        $imagelists=array();

        $this->db->from('source');
        $this->db->where('type','img');
        $this->db->or_where('type','videoimg');
        $this->db->or_where('type','partnerimg');
        $imgarray=$this->db->get()->result_array();
        $imgtypearray=array(
            'img','videoimg','partnerimg'
        );
        for($i=0;$i<count($imgarray);$i++){
            $tmpselect='';
            for($j=0;$j<count($imgtypearray);$j++){
                if($imgtypearray[$j]==$imgarray[$i]['type']){
                    $tmpselect.='<option value="'.$imgtypearray[$j].'" selected>'.$imgtypearray[$j].'</option>';
                }else{
                    $tmpselect.='<option value="'.$imgtypearray[$j].'">'.$imgtypearray[$j].'</option>';
                }
            }
            $tmpimgarray=array(
                'source_id'=>$imgarray[$i]['id'],
                'source_location'=>$imgarray[$i]['source_location'],
                'source_name'=>$imgarray[$i]['source_name'],
                'imgtype'=>'<select id="'.$imgarray[$i]['id'].'_imgtype">'.$tmpselect.'</select>',
                'sequence'=>$imgarray[$i]['sequence']
            );
            array_push($imagelists,$tmpimgarray);
        }

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
                'keyword'=>null,
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
            'imagelists'=>$imagelists,
            'img'=>$imgsource,
            'keyword'=>$keyword,
            'video'=>$videosource
        );
        return $this->parser->parse($pagename,$data);
    }

    function saveImage(){
        $sequence='1';
//        $url=$_POST['url'];
        $source_location=$_POST['source_location'];
        $source_name=$_POST['source_name'];
        $source_remark=$_POST['source_remark'];
        $insertcontent=array(
            'source_location'=>$source_location,
            'status'=>'1',
            'source_name'=>$source_name,
            'source_remark'=>$source_remark,
            'link_url'=>null,
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
        $sequence='1';
        $source_location=$_POST['source_location'];
        $source_name=$_POST['source_name'];
        $source_remark=$_POST['source_remark'];
        $videoimg=$_POST['videoimg'];
        $keyword=$_POST['keyword'];
        $keywordarray = explode('|||',$keyword);
        $third_level=$_POST['third_level'];
        $first_level=$_POST['first_level'];
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
            'first_level'=>$first_level,
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
        $tagtype=$_POST['tagtype'];
        $filename = $_FILES['file']['tmp_name'];
        if (empty ($filename)) {
            echo '请选择要导入的CSV文件！';
            exit;
        }
        $handle = fopen($filename, 'r');
        while ($data = fgetcsv($handle)) {
            $goods_list[] = $data;
        }
        if('brandname'==$tagtype){
            for($i=1;$i<count($goods_list);$i++){
                $insertcontent=array(
                    'keyword'=>iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                    'sequence'=>$goods_list[$i][1],
                    'first_level'=>$tagtype,
                    'second_level'=>$goods_list[$i][2],
                    'third_level'=>$goods_list[$i][3],
                    'keyword_remark'=>iconv('gb2312', 'utf-8', $goods_list[$i][4]),
                    'creator'=>'ADMIN',
                    'updater'=>'ADMIN',
                    'status'=>'1',
                );
                $this->keyword_model->insertKeyword($insertcontent);
            }
        }else{
            if('locationdetails'!=$tagtype){
                for($i=1;$i<count($goods_list);$i++){

                    $insertcontent=array(
                        'keyword'=>iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                        'sequence'=>$goods_list[$i][1],
                        'first_level'=>$tagtype,
                        'second_level'=>$goods_list[$i][2],
                        'third_level'=>$goods_list[$i][3],
                        'keyword_remark'=>iconv('gb2312', 'utf-8', $goods_list[$i][4]),
                        'creator'=>'ADMIN',
                        'updater'=>'ADMIN',
                        'status'=>'1',
                    );
                    $this->keyword_model->insertKeyword($insertcontent);
                }
            }else{
                for($i=1;$i<count($goods_list);$i++){
                    $this->db->from('keyword');
                    $this->db->where('keyword',iconv('gb2312', 'utf-8', $goods_list[$i][0]));
                    $this->db->where('second_level','locationdetails');
                    $country=$this->db->get()->result_array();
                    if(count($country)>0){
                        $country_id=$country[0]['id'];
                    }else{
                        $insertcontent=array(
                            'keyword'=>iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                            'sequence'=>$goods_list[$i][1],
                            'first_level'=>$goods_list[$i][4],
                            'second_level'=>$tagtype,
                            'third_level'=>$goods_list[$i][5],
                            'keyword_remark'=>iconv('gb2312', 'utf-8', $goods_list[$i][6]),
                            'creator'=>'ADMIN',
                            'updater'=>'ADMIN',
                            'status'=>'1',
                        );
                        $this->keyword_model->insertKeyword($insertcontent);
                        $country_id=$this->db->insert_id();
                    }
                    $insertcontent=array(
                        'keyword'=>iconv('gb2312', 'utf-8', $goods_list[$i][0]),
                        'sequence'=>$goods_list[$i][1],
                        'first_level'=>$goods_list[$i][4],
                        'second_level'=>$country_id,
                        'third_level'=>$goods_list[$i][5],
                        'keyword_remark'=>iconv('gb2312', 'utf-8', $goods_list[$i][6]),
                        'creator'=>'ADMIN',
                        'updater'=>'ADMIN',
                        'status'=>'1',
                    );
                    $this->keyword_model->insertKeyword($insertcontent);
                }
            }
        }

        echo "<script>alert('导入成功！')</script>";
        echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/contentm'>";
    }
    function updateareainfo()
    {
        date_default_timezone_set("UTC");
        $areatype=$_POST['areatype'];
        $third_level=$_POST['arealanguage'];
        switch($areatype){
            case 'homearea':
                $modelupdateinfo1=array(
                    'is_hide'=>$_POST['homearea1_is_hide'],
                    'is_auto'=>$_POST['homearea1_is_auto']
                );
                $this->db->update('source', $modelupdateinfo1, array('first_level' => 'home','second_level'=>'area1','third_level'=>$third_level));
                $modelupdateinfo2=array(
                    'is_hide'=>$_POST['homearea2_is_hide'],
                    'is_auto'=>$_POST['homearea2_is_auto']
                );
                $this->db->update('source', $modelupdateinfo2, array('first_level' => 'home','second_level'=>'area2','third_level'=>$third_level));
                $modelupdateinfo3=array(
                    'is_hide'=>$_POST['homearea3_is_hide'],
                    'is_auto'=>$_POST['homearea3_is_auto']
                );
                $this->db->update('source', $modelupdateinfo3, array('first_level' => 'home','second_level'=>'area3','third_level'=>$third_level));
                $modelupdateinfo4=array(
                    'is_hide'=>$_POST['homearea4_is_hide'],
                    'is_auto'=>$_POST['homearea4_is_auto']
                );
                $this->db->update('source', $modelupdateinfo4, array('first_level' => 'home','second_level'=>'area4','third_level'=>$third_level));
                $listarray1 = explode('|||',$_POST['homeimglist1']);
                $listarray2 = explode('|||',$_POST['homeimglist2']);
                $listarray3 = explode('|||',$_POST['homeimglist3']);
                $listarray4 = explode('|||',$_POST['homeimglist4']);
                for($i=0;$i<count($listarray1);$i++){
                    $this->db->from('source');
                    $this->db->where('id',$listarray1[$i]);
                    if($this->db->get()->result_array()[0]['status']==1){
                        $sourceupdateinfo=array(
                            'first_level'=>'home',
                            'second_level'=>'imagearea1',
                            'third_level'=>$third_level,
                            'updatetime'=>date("y-m-d",time()),
                            'status'=>'1'
                        );
                    }else{
                        $sourceupdateinfo=array(
                            'first_level'=>'home',
                            'second_level'=>'imagearea1',
                            'third_level'=>$third_level,
                            'updatetime'=>date("y-m-d",time()),
                            'status'=>'2'
                        );
                    }
                    $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1[$i]));
                };
                for($i=0;$i<count($listarray2);$i++){
                    $this->db->from('source');
                    $this->db->where('id',$listarray2[$i]);
                    if($this->db->get()->result_array()[0]['status']==1){
                        $sourceupdateinfo=array(
                            'first_level'=>'home',
                            'second_level'=>'imagearea1',
                            'third_level'=>$third_level,
                            'updatetime'=>date("y-m-d",time()),
                            'status'=>'1'
                        );
                    }else{
                        $sourceupdateinfo=array(
                            'first_level'=>'home',
                            'second_level'=>'imagearea1',
                            'third_level'=>$third_level,
                            'updatetime'=>date("y-m-d",time()),
                            'status'=>'2'
                        );
                    }
                    $this->db->update('source', $sourceupdateinfo, array('id' => $listarray2[$i]));
                };
                for($i=0;$i<count($listarray3);$i++){
                    $this->db->from('source');
                    $this->db->where('id',$listarray3[$i]);
                    if($this->db->get()->result_array()[0]['status']==1){
                        $sourceupdateinfo=array(
                            'first_level'=>'home',
                            'second_level'=>'imagearea1',
                            'third_level'=>$third_level,
                            'updatetime'=>date("y-m-d",time()),
                            'status'=>'1'
                        );
                    }else{
                        $sourceupdateinfo=array(
                            'first_level'=>'home',
                            'second_level'=>'imagearea1',
                            'third_level'=>$third_level,
                            'updatetime'=>date("y-m-d",time()),
                            'status'=>'2'
                        );
                    }
                    $this->db->update('source', $sourceupdateinfo, array('id' => $listarray3[$i]));
                };
                for($i=0;$i<count($listarray4);$i++){
                    $this->db->from('source');
                    $this->db->where('id',$listarray4[$i]);
                    if($this->db->get()->result_array()[0]['status']==1){
                        $sourceupdateinfo=array(
                            'first_level'=>'home',
                            'second_level'=>'imagearea1',
                            'third_level'=>$third_level,
                            'updatetime'=>date("y-m-d",time()),
                            'status'=>'1'
                        );
                    }else{
                        $sourceupdateinfo=array(
                            'first_level'=>'home',
                            'second_level'=>'imagearea1',
                            'third_level'=>$third_level,
                            'updatetime'=>date("y-m-d",time()),
                            'status'=>'2'
                        );
                    }
                    $this->db->update('source', $sourceupdateinfo, array('id' => $listarray4[$i]));
                };
                break;




            case 'aboutarea':
                $modelupdateinfo1=array(
                    'is_hide'=>$_POST['aboutarea1_is_hide'],
                    'is_auto'=>$_POST['aboutarea1_is_auto']
                );
                $this->db->update('source', $modelupdateinfo1, array('first_level' => 'about','second_level'=>'area1','third_level'=>$third_level));
                $modelupdateinfo2=array(
                    'is_hide'=>$_POST['aboutarea2_is_hide'],
                    'is_auto'=>$_POST['aboutarea2_is_auto']
                );
                $this->db->update('source', $modelupdateinfo2, array('first_level' => 'about','second_level'=>'area2','third_level'=>$third_level));
                $modelupdateinfo3=array(
                    'is_hide'=>$_POST['aboutarea3_is_hide'],
                    'is_auto'=>$_POST['aboutarea3_is_auto']
                );
                $this->db->update('source', $modelupdateinfo3, array('first_level' => 'about','second_level'=>'area3','third_level'=>$third_level));
                $listarray1 = $_POST['aboutimglist1'];
                $listarray2 = $_POST['aboutimglist2'];
                $listarray3 = $_POST['aboutimglist3'];
                $this->db->from('source');
                $this->db->where('id',$listarray1);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'about',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'about',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));


                $this->db->from('source');
                $this->db->where('id',$listarray2);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'about',
                        'second_level'=>'imagearea2',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'about',
                        'second_level'=>'imagearea2',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray2));


                $this->db->from('source');
                $this->db->where('id',$listarray3);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'about',
                        'second_level'=>'imagearea3',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'about',
                        'second_level'=>'imagearea3',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray3));
                break;




            case 'platformarea':
                $modelupdateinfo1=array(
                    'is_hide'=>$_POST['platformarea1_is_hide'],
                    'is_auto'=>$_POST['platformarea1_is_auto']
                );
                $this->db->update('source', $modelupdateinfo1, array('first_level' => 'platform','second_level'=>'area1','third_level'=>$third_level));
                $modelupdateinfo2=array(
                    'is_hide'=>$_POST['platformarea2_is_hide'],
                    'is_auto'=>$_POST['platformarea2_is_auto']
                );
                $this->db->update('source', $modelupdateinfo2, array('first_level' => 'platform','second_level'=>'area2','third_level'=>$third_level));
                $modelupdateinfo3=array(
                    'is_hide'=>$_POST['platformarea3_is_hide'],
                    'is_auto'=>$_POST['platformarea3_is_auto']
                );
                $this->db->update('source', $modelupdateinfo3, array('first_level' => 'platform','second_level'=>'area3','third_level'=>$third_level));
                $listarray1 = $_POST['platformimglist1'];
                $listarray2 = $_POST['platformimglist2'];
                $listarray3 = $_POST['platformimglist3'];
                $this->db->from('source');
                $this->db->where('id',$listarray1);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'platform',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'platform',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));


                $this->db->from('source');
                $this->db->where('id',$listarray2);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'platform',
                        'second_level'=>'imagearea2',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'platform',
                        'second_level'=>'imagearea2',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray2));


                $this->db->from('source');
                $this->db->where('id',$listarray3);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'platform',
                        'second_level'=>'imagearea3',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'platform',
                        'second_level'=>'imagearea3',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray3));
                break;


            case 'partnerarea':
                $modelupdateinfo1=array(
                    'is_hide'=>$_POST['partnerarea1_is_hide'],
                    'is_auto'=>$_POST['partnerarea1_is_auto']
                );
                $this->db->update('source', $modelupdateinfo1, array('first_level' => 'partner','second_level'=>'area1','third_level'=>$third_level));
                $listarray1 = $_POST['partnerimglist1'];
                $this->db->from('source');
                $this->db->where('id',$listarray1);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'partner',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'partner',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));

                break;


            case 'ularea':
                $modelupdateinfo1=array(
                    'is_hide'=>$_POST['ularea1_is_hide'],
                    'is_auto'=>$_POST['ularea1_is_auto']
                );
                $this->db->update('source', $modelupdateinfo1, array('first_level' => 'ul','second_level'=>'area1','third_level'=>$third_level));
                $listarray1 = $_POST['ulimglist1'];
                $this->db->from('source');
                $this->db->where('id',$listarray1);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'ul',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'ul',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));

                break;


            case 'awoearea':
                $modelupdateinfo1=array(
                    'is_hide'=>$_POST['awoearea1_is_hide'],
                    'is_auto'=>$_POST['awoearea1_is_auto']
                );
                $this->db->update('source', $modelupdateinfo1, array('first_level' => 'awoe','second_level'=>'area1','third_level'=>$third_level));
                $listarray1 = $_POST['awoeimglist1'];
                $this->db->from('source');
                $this->db->where('id',$listarray1);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'awoe',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'awoe',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));

                break;


            case 'musicarea':
                $modelupdateinfo1=array(
                    'is_hide'=>$_POST['musicarea1_is_hide'],
                    'is_auto'=>$_POST['musicarea1_is_auto']
                );
                $this->db->update('source', $modelupdateinfo1, array('first_level' => 'music','second_level'=>'area1','third_level'=>$third_level));
                $listarray1 = $_POST['musicimglist1'];
                $this->db->from('source');
                $this->db->where('id',$listarray1);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'music',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'music',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));
                break;


            case 'joinarea':
                $modelupdateinfo1=array(
                    'is_hide'=>$_POST['joinarea1_is_hide'],
                    'is_auto'=>$_POST['joinarea1_is_auto']
                );
                $this->db->update('source', $modelupdateinfo1, array('first_level' => 'join','second_level'=>'area1','third_level'=>$third_level));
                $listarray1 = $_POST['joinimglist1'];
                $this->db->from('source');
                $this->db->where('id',$listarray1);
                if($this->db->get()->result_array()[0]['status']==1){
                    $sourceupdateinfo=array(
                        'first_level'=>'join',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'1'
                    );
                }else{
                    $sourceupdateinfo=array(
                        'first_level'=>'join',
                        'second_level'=>'imagearea1',
                        'third_level'=>$third_level,
                        'updatetime'=>date("y-m-d",time()),
                        'status'=>'2'
                    );
                };
                $this->db->update('source', $sourceupdateinfo, array('id' => $listarray1));

                break;
        }
    }
}
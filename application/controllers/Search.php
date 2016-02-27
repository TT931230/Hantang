<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/12
 * Time: 14:42
 */
class Search extends CI_Controller
{
    function globalSearch(){
        $tags = explode('|||',$_POST['tags']);
        $searchinput = explode('|||',$_POST['searchinput']);
        $where="";
        if(!empty($searchinput)) {
            $where="(";
            $i=0;
            $arr_n=count($searchinput)-1;
            foreach ($searchinput as $searchword) {
                if ($arr_n==$i) {
                    $where .= "a.source_name like '%".$searchword."%')";
                } else {
                    $where .= "a.source_name like '%".$searchword."%' OR ";
                }
                $i++;
            }
        }
        if($tags[0]){
            if(!empty($searchinput)) {
                $where .=" AND (";
                $i=0;
                $arr_n=count($tags)-1;
                foreach($tags as $tag){
                    $this->db->from('keyword');
                    $this->db->where('status','1');
                    $this->db->where('id',$tag);
                    $tmptagname=$this->db->get()->result_array()[0]['keyword'];
                    if ($arr_n==$i) {
                        $where .= "c.keyword='".$tmptagname."')";
                    } else {
                        $where .= "c.keyword='".$tmptagname."' OR ";
                    }
                    $i++;
                }
            }else{
                $i=0;
                $arr_n=count($tags)-1;
                foreach($tags as $tag){
                    $this->db->from('keyword');
                    $this->db->where('status','1');
                    $this->db->where('id',$tag);
                    $tmptagname=$this->db->get()->result_array()[0]['keyword'];
                    if ($arr_n==$i) {
                        $where .= "c.keyword='".$tmptagname."')";
                    } else {
                        $where .= "c.keyword='".$tmptagname."' OR ";
                    }
                    $i++;
                }
            }
        }

        $this->db->from('source as a');
        if($tags[0]) {
            $this->db->join('keyword_source_relation as b', 'a.id = b.source_id');
            $this->db->join('keyword as c', 'b.keyword_id = c.id');
        }
        $this->db->where($where);
        $this->db->where('a.status','1');
        $this->db->where('a.type','videoimg');
        $query=$this->db->get();
        $results=$query->result_array();
        $resultareas ="";
        for($i=0;$i<count($results);$i++){
            $resultareas.="<div class='result_container'>";
            $resultareas.="<div class='result_img'>";
            $resultareas.="<a href='".$results[$i]['link_url']."'><img src='".$results[$i]['source_location']."'></a>";
            $resultareas.="</div>";
            $resultareas.="<div class='result_content'>";
            $resultareas.="<div class='content_title'>".$results[$i]['source_name']."</div>";
            $resultareas.="<div class='content_remark'>".$results[$i]['source_remark']."</div>";
            $resultareas.="</div>";
            $resultareas.="<div class='result_tag'>";
            switch($results[$i]['first_level']){
                case 'ul':
                    $resultareas.="<div>极致</div>";
                    break;
                case 'awoe':
                    $resultareas.="<div>问鼎世界</div>";
                    break;
                case 'music':
                    $resultareas.="<div>汉唐文化音乐年</div>";
                    break;
            }
            $resultareas.="</div>";
            $resultareas.="</div>";
        }
        echo($resultareas);
    }

    function searchrelatedvideo(){
        $keyword_id=$_POST['keyword_id'];
        $this->db->from('source as a');
        $this->db->join('keyword_source_relation as b','b.source_id=a.id','inner');
        $this->db->join('keyword as c','b.keyword_id=c.id','inner');

        $this->db->where('a.status','1');
        $this->db->where('c.id',$keyword_id);
        $this->db->where('a.type','videoimg');
        $query=$this->db->get();
        $results=$query->result_array();
        $return="";
        for($i=0;$i<count($results);$i++){
            $return.='<div class="relatedvideos">';
            $return.='<a href="'.$results[$i]['link_url'].'"><img src="'.$results[$i]['source_location'].'"></a>';
            $return.='<div class="relavideostitle">';
            $return.=$results[$i]['source_name'];
            $return.='</div>';
            $return.='</div>';
        }
        echo $return;
//        return $return;
    }
    function searchbrandname(){
        $this->load->library('session');
        if($this->session->language){
        }else{
            $this->session->set_userdata('language','zn');
        }
        $brandtype=$_POST['brandtype'];
        $this->db->where('first_level','brandname');
        $this->db->where('second_level',$brandtype);
        $this->db->where('third_level',$this->session->language);
        $this->db->from('keyword');
        $this->db->order_by('sequence','asc');
        $query=$this->db->get();
        $results=$query->result_array();
        $return="";
        for($i=0;$i<count($results);$i++){
            $return.='<span class="searchcontent-brand">';
            $return.='<input type="checkbox" id="'.$results[$i]['id'].'" value="'.$results[$i]['keyword'].'" onclick="$searchcontent('.$results[$i]['id'].')"/><span class="searchItem">'.$results[$i]['keyword'].'</span>';
            $return.='</span>';
        }
        echo $return;
//        return $return;
    }
    function searchcountry(){
        $this->load->library('session');
        if($this->session->language){
        }else{
            $this->session->set_userdata('language','zn');
        }
        $countryid=$_POST['countryid'];
        $this->db->where('second_level',$countryid);
        $this->db->where('third_level',$this->session->language);
        $this->db->from('keyword');
        $this->db->order_by('sequence','asc');
        $query=$this->db->get();
        $results=$query->result_array();
        $return="";
        for($i=0;$i<count($results);$i++){
            $return.='<span class="searchcontent">';
            $return.='<input type="checkbox" id="'.$results[$i]['id'].'" value="'.$results[$i]['keyword'].'" onclick="$searchcontent('.$results[$i]['id'].')"/><span class="searchItem">'.$results[$i]['keyword'].'</span>';
            $return.='</span>';
        }
        echo $return;

    }
}
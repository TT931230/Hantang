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
                    $where .= "a.source_name='".$searchword."')";
                } else {
                    $where .= "a.source_name='".$searchword."' OR ";
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
                    if ($arr_n==$i) {
                        $where .= "c.id='".$tag."')";
                    } else {
                        $where .= "c.id='".$tag."' OR ";
                    }
                    $i++;
                }
            }else{
                $i=0;
                $arr_n=count($tags)-1;
                foreach($tags as $tag){
                    if ($arr_n==$i) {
                        $where .= "c.id='".$tag."')";
                    } else {
                        $where .= "c.id='".$tag."' OR ";
                    }
                    $i++;
                }
            }
        }
        $this->db->from('source as a');
 //       $this->db->join('keyword_source_relation as b', 'a.id = b.source_id');
 //       $this->db->join('keyword as c', 'b.keyword_id = c.id');
        $this->db->where($where);
        $this->db->where('a.status','1');
        $this->db->where('a.type','videoimg');
        $query=$this->db->get();
        $results=$query->result_array();
        $resultareas ="";
        foreach($results as $result){
            $resultareas.="<div class='searchresult'>";
            $resultareas.="<div class='searchresulta'>";
            $resultareas.="</div>";
            $resultareas.="<div class='searchresultb'>";
            $resultareas.="</div>";
            $resultareas.="<div class='searchresultc'>";
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
        $brandtype=$_POST['brandtype'];
        $this->db->where('first_level','brandname');
        $this->db->where('second_level',$brandtype);
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
//        return $return;
    }
    function searchcountry(){
        $countryid=$_POST['countryid'];
        $this->db->where('first_level','citys');
        $this->db->where('second_level',$countryid);
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
<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/18
 * Time: 11:43
 */
class Page_data_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_page_data($languageType,$url){
        $this->lang->load('test',$languageType);
        $this->db->from('source');
        $this->db->where('first_level','footer');
        $this->db->where('third_level',$languageType);
        $returnquery=$this->db->get()->result_array();
        $weixin="";
        $weibo="";
        $youku="";
        $wangyi="";
        $tengxun="";
        $jianshu="";
        $douban="";
        $footerlogo1="";
        $footerlogo2="";
        $footerlogo3="";
        $footerlogo4="";
        $guanzhu="";
        $erwei="";
        $guanbi="";
        $this->db->from('source');
        $this->db->where('type','partnerimg');
        $this->db->where('status','1');
        $this->db->where('third_level',$languageType);
        $this->db->order_by('sequence','asc');
        $partner=$this->db->get()->result_array();
        for($i=0;$i<count($returnquery);$i++){
            switch ($returnquery[$i]['second_level']){
                case 'weixin':
                    $weixin=$returnquery[$i]['source_location'];
                    break;
                case 'weibo':
                    $weibo=$returnquery[$i]['source_location'];
                    break;
                case 'youku':
                    $youku=$returnquery[$i]['source_location'];
                    break;
                case 'douban':
                    $douban=$returnquery[$i]['source_location'];
                    break;
                case 'tengxun':
                    $tengxun=$returnquery[$i]['source_location'];
                    break;
                case 'jianshu':
                    $jianshu=$returnquery[$i]['source_location'];
                    break;
                case 'wangyi':
                    $wangyi=$returnquery[$i]['source_location'];
                    break;
                case 'footerlogo1':
                    $footerlogo1=$returnquery[$i]['source_location'];
                    break;
                case 'footerlogo2':
                    $footerlogo2=$returnquery[$i]['source_location'];
                    break;
                case 'footerlogo3':
                    $footerlogo3=$returnquery[$i]['source_location'];
                    break;
                case 'footerlogo4':
                    $footerlogo4=$returnquery[$i]['source_location'];
                    break;
                case 'guanzhu':
                    $guanzhu=$returnquery[$i]['source_location'];
                    break;
                case 'erwei':
                    $erwei=$returnquery[$i]['source_location'];
                    break;
                case 'guanbi':
                    $guanbi=$returnquery[$i]['source_location'];
                    break;
            }
        }
        $this->db->from('source');
        $this->db->where('first_level','platform');
        $this->db->where('second_level','ulmap');
        $this->db->where('third_level',$languageType);
        $ulmap=$this->db->get()->result_array();
        $this->db->from('source');
        $this->db->where('first_level','platform');
        $this->db->where('second_level','awoemap');
        $this->db->where('third_level',$languageType);
        $awoemap=$this->db->get()->result_array();

        $this->db->from('language');
        $this->db->where('lang',$languageType);
        $languages=$this->db->get()->result_array();
        $data = array(
            'partnerimgs'=>$partner,
            'awoemap'=>$awoemap[0]['source_location'],
            'ulmap'=>$ulmap[0]['source_location'],
            'wangyi'=>$wangyi,
            'jianshu'=>$jianshu,
            'tengxun'=>$tengxun,
            'douban'=>$douban,
            'youku'=>$youku,
            'weibo'=>$weibo,
            'weixin'=>$weixin,
            'footerlogo1'=>$footerlogo1,
            'footerlogo2'=>$footerlogo2,
            'footerlogo3'=>$footerlogo3,
            'footerlogo4'=>$footerlogo4,
            'guanzhu'=>$guanzhu,
            'erwei'=>$erwei,
            'guanbi'=>$guanbi,
            'url' => $url,
            'homenav' => '',
            'aboutnav' =>  '',
            'ulnav' => '',
            'awoenav' => '',
            'musicnav' => '',
            'joinnav' => ''
        );
        for($i=0;$i<count($languages);$i++){
            $temp_array=array(
                $languages[$i]['tag']=>$languages[$i]['value']
            );
            $data=array_merge($data,$temp_array);
        }
        $this->db->from('webmodel');
        $areadis=$this->db->get()->result_array();
        for($i=0;$i<count($areadis);$i++){
            $tmpname=$areadis[$i]['first_level'];
            $autotmp=$areadis[$i]['first_level'];
            $tmpname.='dis';
            $autotmp.='auto';
            $tmpname.=$areadis[$i]['areaname'];
            $autotmp.=$areadis[$i]['areaname'];
                $temp_array=array(
                    $tmpname=>$areadis[$i]['is_hide'],
                    $autotmp=>$areadis[$i]['is_auto']
                );
            $data=array_merge($data,$temp_array);
        }
        switch($url){
            case '/ul':
                $data['ulnav']='active';
                break;
            case '/about':
                $data['aboutnav']='active';
                break;
            case '/awoe':
                $data['awoenav']='active';
                break;
            case '/home':
                $data['homenav']='active';
                break;
            case '/join':
                $data['joinnav']='active';
                break;
            case '/music':
                $data['musicnav']='active';
                break;
            case '/partner':
                $data['aboutnav']='active';
                break;
            case '/platform':
                $data['aboutnav']='active';
                break;
        }
        return $data;
    }

    public function query_sources($source_info){
        $this->db->where('status',$source_info['status']);
        if($source_info['first_level']){
            $this->db->where('first_level',$source_info['first_level']);
        }
        if($source_info['second_level']){
            $this->db->where('second_level',$source_info['second_level']);
        }
        if($source_info['third_level']){
            $this->db->where('third_level',$source_info['third_level']);
        }
        $this->db->where('type',$source_info['type']);
        $this->db->from('source');
        $this->db->order_by("sequence"," desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function query_departments($status){
        $this->db->from('department');
        $this->db->where('status',$status['d_status']);
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $departments=$query->result_array();
        $return_array=array();
        for($i=0;$i<count($departments);$i++){
            $this->db->from('jobinfo');
            $this->db->where('status',$status['j_status']);
            $this->db->where('department_id',$departments[$i]['id']);
            $this->db->order_by("sequence","asc");
            $query = $this->db->get();
            $jobs=$query->result_array();
            $temp_array=array(
                'department'=>$departments[$i]['department'],
                'job'=>$jobs
            );
            array_push($return_array,$temp_array);
        }
        return $return_array;
    }

    public function query_tags(){
        $this->load->library('session');
        $this->db->from('keyword');
        $this->db->where('second_level','typedetails');
        $this->db->where('third_level',$this->session->language);
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $search_type=$query->result_array();
        $this->db->from('keyword');
        $this->db->where('second_level','keyword');
        $this->db->where('third_level',$this->session->language);
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $search_keyword=$query->result_array();
        $this->db->from('keyword');
        $this->db->where('second_level','yeardetails');
        $this->db->where('third_level',$this->session->language);
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $search_time=$query->result_array();
        $this->db->from('keyword');
        $this->db->where('second_level','locationdetails');
        $this->db->where('third_level',$this->session->language);
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $search_country=$query->result_array();
        $data=array(
            'search_type' => $search_type,
            'search_keyword' => $search_keyword,
            'search_location' => $search_country,
            'search_time' => $search_time
        );
        return $data;
    }

    public function query_keywords($keyword_info){
        $this->db->from('keyword');
        $this->db->where('status',$keyword_info['status']);
        if($keyword_info['first_level']){
            $this->db->where('first_level',$keyword_info['first_level']);
        }
        if($keyword_info['second_level']){
            $this->db->where('second_level',$keyword_info['second_level']);
        }
        if($keyword_info['third_level']){
            $this->db->where('third_level',$keyword_info['third_level']);
        }
        $this->db->order_by("sequence","asc");
        $query = $this->db->get();
        $keywords=$query->result_array();
        $return_array=array();
        for($i=0;$i<count($keywords);$i++){
            $temp_array=$keywords[$i];
            array_push($return_array,$temp_array);
        }
        return $return_array;
    }
}
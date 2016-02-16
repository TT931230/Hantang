<?php
/**
 * Created by PhpStorm.
* User: TT
* Date: 2016/1/12
* Time: 8:14
*/
class Legal extends CI_Controller
{
	function index()
	{
		$this->load->library('session');
		$this->load->library('parser');
		$this->load->model('page_data_model');

		if($this->session->language){
			$page_data=$this->page_data_model->get_page_data($this->session->language,'/home');
		}else{
			$page_data=$this->page_data_model->get_page_data('zn','/home');
		}
		$source_info_base=array(
				'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
		);

		

		$source_info=$source_info_base;
		$source_info['first_level']='logoimage';
		$source_info['type']='img';
		$logoimage = $this->page_data_model->query_sources($source_info);

		$tag_data = $this->page_data_model->query_tags();
		$tmp_data = array(
				'logoimage'=>$logoimage,
				
		);

		$tmp_data=array_merge($tmp_data,$tag_data);
		$data=array_merge($tmp_data,$page_data);

		$this->parser->parse('m/header',$data);
		$this->parser->parse('m/search',$data);
		$this->parser->parse('m/legal',$data);
		$this->parser->parse('m/footer',$data);
	}
	function Changelanguage(){
		$this->load->library('session');
		$this->session->set_userdata('language',$_POST['language']);
		$this->index();
	}
	function getfooter(){
		$this->load->library('session');
		$this->load->library('parser');
		$this->load->model('page_data_model');

		if($this->session->language){
			$page_data=$this->page_data_model->get_page_data($this->session->language,'/home');
		}else{
			$page_data=$this->page_data_model->get_page_data('zn','/home');
		}
		$source_info_base=array(
				'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
		);

	

		$source_info=$source_info_base;
		$source_info['first_level']='logoimage';
		$source_info['type']='img';
		$logoimage = $this->page_data_model->query_sources($source_info);

		$tag_data = $this->page_data_model->query_tags($source_info);

		$tmp_data = array(
				'logoimage'=>$logoimage,
		);

		$tmp_data=array_merge($tmp_data,$tag_data);
		$data=array_merge($tmp_data,$page_data);

		return $this->parser->parse('m/footer',$data);
	}
	function preview(){
		$this->load->library('session');

		if($this->session->username) {
			$username = $this->session->username;
			$this->load->library('parser');
			$this->load->model('page_data_model');

			if($this->session->language){
				$page_data=$this->page_data_model->get_page_data($this->session->language,'/home');
			}else{
				$page_data=$this->page_data_model->get_page_data('zn','/home');
			}
			$source_info_base=array(
					'status'=>'1','first_level'=>'','second_level'=>'','third_level'=>$this->session->language,'type'=>'',
			);

			



			


			$source_info=$source_info_base;
			$source_info['first_level']='logoimage';
			$source_info['type']='img';
			$logoimage = $this->page_data_model->query_sources($source_info);
			$source_info=$source_info_base;
			$source_info['status']='2';
			$source_info['first_level']='logoimage';
			$source_info['type']='img';
			$logoimage =array_merge($logoimage,$this->page_data_model->query_sources($source_info));


			$tag_data = $this->page_data_model->query_tags();

			$tmp_data = array(
					'logoimage'=>$logoimage,
					
			);

			$tmp_data=array_merge($tmp_data,$tag_data);
			$data=array_merge($tmp_data,$page_data);

			$this->parser->parse('m/header',$data);
			$this->parser->parse('m/search',$data);
			$this->parser->parse('m/legal',$data);
			$this->parser->parse('m/footer',$data);
		}
	}

}
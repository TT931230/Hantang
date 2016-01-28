<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/26
 * Time: 19:51
 */
class Login extends CI_Controller
{
    function index(){
        $this->load->library('parser');
        $data=array();
        $this->parser->parse('login',$data);
    }
    function formsubmit(){
        $this->load->library ( 'form_validation' );

        $this->form_validation->set_rules ( 'username', 'Username', 'required' );
        $this->form_validation->set_rules ( 'password', 'Password', 'required' );
        if ($this->form_validation->run () == FALSE) {
            $this->load->view ( 'login' );
        } else {
            if (isset ($_POST ['submit']) && !empty ($_POST ['submit'])) {
                $data = array(
                    'user_name' => $_POST ['username'],
                    'password' => md5($_POST ['password'])
                );
            }
        }
        $this->db->from('user_info');
        $this->db->where($data);
        $userinfo=$this->db->get()->result_array();
        if(count($userinfo)>0){
            $this->load->library('session');
            $this->db->from('privilige_user');
            $this->db->where('user_id',$userinfo[0]['id']);
            $userprivilige=$this->db->get()->result_array();
            $privilige=array();
            for($i=0;$i<count($userprivilige);$i++){
                array_push($privilige,$userprivilige[$i]['privilige_id']);
            }
            $this->session->set_userdata('username',$userinfo[0]['user_name']);
            $this->session->set_userdata('privilige',$privilige);
            echo "<script>alert('登录成功！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/contentm'>";
        }else{
            echo "<script>alert('登录失败！')</script>";
            echo "<meta http-equiv='Refresh' content='0;URL=http://localhost:8080/login'>";
        }
    }
    function logout(){
        $this->load->library('session');
        $this->session->set_userdata('username',null);
        $this->session->set_userdata('privilige',array());
        echo 'http://localhost:8080/login';
    }
}
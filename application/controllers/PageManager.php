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
        return $this->load->view($pagename);
    }
}
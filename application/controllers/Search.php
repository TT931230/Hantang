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
        var_dump($tags);
    }
}
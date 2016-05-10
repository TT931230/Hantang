<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/11
 * Time: 8:23
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="author" content="">
    <!--    <link rel="icon" href="../../favicon.ico">-->

    <title>汉唐文化</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/bootstrap/css/global.css" rel="stylesheet">
    <link href="/bootstrap/css/home.css" rel="stylesheet">
    <link href="/bootstrap/css/about.css" rel="stylesheet">
    <link href="/bootstrap/css/ul-awoe.css" rel="stylesheet">
    <link href="/bootstrap/css/music.css" rel="stylesheet">
    <link href="/bootstrap/css/join.css" rel="stylesheet">
    <link rel="stylesheet"  href="/bootstrap/css/smallScreen.css"/>
    <link rel="stylesheet"  href="/bootstrap/css/fileinput.min.css"/>
</head>
<!-- no copy  -->
<!-- <script type="text/javascript"> 
    // Forbid Copy     
    function rt() 
    {
        return true; 
    }  
    function rf()
    {
        return false;
    } 
    // IE,Chrome
    document.oncontextmenu = rf;
    document.onselectstart = rf;
    document.ondragstart = rf;  

    $(document).ready(function(){
        $("#ctl00_ContentBody_searchTextBox").mousedown(function(){
            //IE 
            document.oncontextmenu = rt;
            document.onselectstart = rt;
            document.ondragstart = rt;  
            //Firefox
            $("body").css("-moz-user-select","-moz-none");     
            
   });
   $("#ctl00_ContentBody_searchTextBox").mouseout(function(){
    //IE
    document.oncontextmenu = rf;
            document.onselectstart = rf;
            document.ondragstart = rf; 
            //Firefox
            $("body").css("-moz-user-select","none");    
   });
   //Firefox
   $("body").css("-moz-user-select","none");    
    });
</script> -->


<body>

<div class="cover-container">
<div class="header-area">
    <div class="clearfix">
    
<!-- header left logo -->
        <div  class="masthead-brand">                       
              <a href="home"><img src="../../bootstrap/images/logo.png" alt=""></a>                       
        </div>
        
<!-- header navigation bar -->
        <?php if($this->session->language == 'zn'){?>
        <div class="masthead_ul">
            <ul class="nav masthead-nav headernavul">
                <li id="homeli"><a href="/home" class="{homenav} navtags"><span>首页</span></a></li>
                <li id="aboutli">
                    <a href="#" class="{aboutnav} dropdown dropdowncust navtags" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false"><span>博览汉唐</span></a>
                    <ul class="dropdown-menu headernav">
                    <span class="dropdown-triangle"></span>
                        <li><a href="/about">公司简介</a></li>
                         <li class="header-dropdown-list-line"><span></span></li>
                        <li><a href="/platform">播出平台</a></li>
                         <li class="header-dropdown-list-line"><span></span></li>
                        <li><a href="/partner">合作伙伴</a></li>
                         
                    </ul>
                </li>
                <li id="ulli"><a href="/ul" class="{ulnav} navtags"><span>《极致》</span></a></li>
                <li id="awoeli"><a href="/awoe" class="{awoenav} navtags"><span>《问鼎世界》</span></a></li>
                <li id="musicli"><a href="/music" class="{musicnav} navtags"><span>国际音乐年</span></a></li>
                <li id="joinli"><a href="/join" class="{joinnav} navtags"><span>加入汉唐</span></a></li>
            </ul>
        </div>
        <?php }else{?>
        <div class="masthead_ul">
            <ul class="nav masthead-nav headernavul">
                <li id="homeli"><a href="/home" class="{homenav} navtags">Home</a></li>
                <li id="aboutli">
                    <a href="#" class="{aboutnav} dropdown dropdowncust navtags" data-toggle="dropdown" data-hover="dropdown" data-delay="500" data-close-others="false">About Us</a>
                    <ul class="dropdown-menu headernav">
                    <span class="dropdown-triangle"></span>
                        <li><a href="/about">Introduce</a></li>
                         <li class="header-dropdown-list-line"><span></span></li>
                        <li><a href="/platform">Platforms</a></li>
                         <li class="header-dropdown-list-line"><span></span></li>
                        <li><a href="/partner">Partners</a></li>
                         
                    </ul>
                </li>
                <li id="ulli"><a href="/ul" class="{ulnav} navtags">The Ultimate Luxury</a></li>
                <li id="awoeli"><a href="/awoe" class="{awoenav} navtags">A World of Excellence</a></li>
                <li id="musicli"><a href="/music" class="{musicnav} navtags">Hantang Music Festival</a></li>
                <li id="joinli"><a href="/join" class="{joinnav} navtags">Join Us</a></li>
            </ul>
        </div>
         <?php }?>
        
<!-- mobile -->
        <div class="mob_menu">
            <img src="http://localhost:8080/bootstrap/images/menu.png">
        </div>
    </div>
    
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bootstrap/jquery/jquery-1.12.0.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/bootstrap/js/main.js"></script>
<script src="/bootstrap/js/asszy.js" charset="gb2312"></script>
<script src="http://api.html5media.info/1.1.6/html5media.min.js"></script>


</body>
</html>
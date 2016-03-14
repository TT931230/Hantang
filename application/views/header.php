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
    <link href="/bootstrap/css/main.css" rel="stylesheet">
    <link href="/bootstrap/css/main2.css" rel="stylesheet">
    <link href="/bootstrap/css/main3.css" rel="stylesheet">
    <link href="/bootstrap/css/main4.css" rel="stylesheet">
    <link rel="stylesheet"  href="/bootstrap/css/smallScreen.css"/>
    <link rel="stylesheet"  href="/bootstrap/css/fileinput.min.css"/>
</head>
<!--<script type="text/javascript"> 
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
</script>   -->
<body>

<div class="cover-container">
<div class="brand_logo">
    <div class="clearfix newborder">
        <div  class="masthead-brand">
         
                {logoimage}
                <a href="{link_url}"><img src="{source_location}"></a>
                {/logoimage}
         
        </div>

        <div class="masthead_ul">
            <ul class="nav masthead-nav headernavul">
                <li id="homeli"><a href="/home" class="{homenav} navtags">{home}</a></li>
                <li id="aboutli">
                    <a href="#" class="{aboutnav} dropdown dropdowncust navtags" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{about}</a>
                    <ul class="dropdown-menu dropdownmenucust headernav" style="width:75px;">
                    <span class="dropdown-triangle"></span>
                        <li><a href="/about">{introduce}</a></li>
                         <li class="dropdown-list-line" style="padding-left:30%;"><span></span></li>
                        <li><a href="/platform">{platform}</a></li>
                         <li class="dropdown-list-line" style="padding-left:30%;"><span></span></li>
                        <li><a href="/partner">{partner}</a></li>
                         
                    </ul>
                </li>
                <li id="ulli"><a href="/ul" class="{ulnav} navtags">{ul}</a></li>
                <li id="awoeli"><a href="/awoe" class="{awoenav} navtags">{awoe}</a></li>
                <li id="musicli"><a href="/music" class="{musicnav} navtags">{music}</a></li>
                <li id="joinli"><a href="/join" class="{joinnav} navtags">{join}</a></li>
            </ul>
        </div>
<!--        <div class="inner">-->
<!--            -->
<!---->
<!--        </div>-->
        <!--<div class="mob_menu">
            <img src="http://localhost:8080/bootstrap/images/menu.png">
        </div>-->
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
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后�->
    <meta name="description" content="">


<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->

<!--    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">




    <meta name="author" content="">
    <!--    <link rel="icon" href="../../favicon.ico">-->

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/bootstrap/css/main.css" rel="stylesheet">
    <link href="/bootstrap/css/main2.css" rel="stylesheet">
    <link href="/bootstrap/css/main3.css" rel="stylesheet">
    <link href="/bootstrap/css/main4.css" rel="stylesheet">
    <link rel="stylesheet"  href="/bootstrap/css/smallScreen.css"/>
</head>

<body>

<div class="cover-container">
<div class="brand_logo">
    <div class="clearfix newborder">
        <div  class="masthead-brand">
            <h3>
                {logoimage}
                <a href="{link_url}"><img src="{source_location}"></a>
                {/logoimage}
            </h3>
        </div>

        <div class="masthead_ul">
            <ul class="nav masthead-nav headernavul">
                <li id="homeli"><a href="/home" class="{homenav} navtags">{home}</a></li>
                <li id="aboutli">
                    <a href="#" class="{aboutnav} dropdown dropdowncust navtags" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{about}</a>
                    <ul class="dropdown-menu dropdownmenucust headernav">
                        <li><a href="/about">{introduce}</a></li>
                        <li><a href="/platform">{platform}</a></li>
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
    </div>
    
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bootstrap/jquery/jquery-1.12.0.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/bootstrap/js/main.js"></script>
<script src="/bootstrap/js/asszy.js"></script>
<script src="http://api.html5media.info/1.1.6/html5media.min.js"></script>
</body>
</html>
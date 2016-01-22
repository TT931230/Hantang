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
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link rel="icon" href="../../favicon.ico">-->

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/bootstrap/css/main.css" rel="stylesheet">
    <link href="/bootstrap/css/main2.css" rel="stylesheet">
    <link href="/bootstrap/css/main3.css" rel="stylesheet">
</head>

<body>

<div class="cover-container">
<div class="brand_logo">
    <div class="clearfix newborder">
    
        <div class="inner">
      
            <h3 class="masthead-brand">
                {logoimage}
                <a href="{link_url}"><img src="{source_location}"></a>
                {/logoimage}
            </h3>
            <nav>
                <ul class="nav masthead-nav headernavul">
                    <li><a href="/home" class="{homenav} navtags">{home}</a></li>
                    <li>
                        <a href="#" class="{aboutnav} dropdown dropdowncust navtags" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{about}</a>
                        <ul class="dropdown-menu dropdownmenucust headernav">
                            <li><a href="/about">{introduce}</a></li>
                            <li><a href="/platform">{platform}</a></li>
                            <li><a href="/partner">{partner}</a></li>
                        </ul>
                    </li>
                    <li id="ulli"><a href="/ul" class="{ulnav} navtags">{ul}</a></li>
                    <li id="awoeli"><a href="/awoe" class="{awoenav} navtags">{awoe}</a></li>
                    <li id="music"><a href="/music" class="{musicnav} navtags">{music}</a></li>
                    <li><a href="/join" class="{joinnav} navtags">{join}</a></li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
    
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bootstrap/jquery/jquery-1.12.0.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/bootstrap/js/main.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 8:32
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>后台管理</title>
    <link href="manage/css/multi.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="manage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="manage/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="manage/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="manage/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#wznrgl">网站内容管理 <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="wznrgl" class="collapse">
                        <li>
                            <a href="javascript:;" onclick="$changetags('homepagemanage')">首页管理</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('aboutpagemanage')">关于汉唐管理</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('platformpagemanage')">播出平台管理</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('partnerpagemanage')">合作伙伴管理</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('ulpagemanage')">极致管理</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('awoepagemanage')">问鼎世界管理</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('musicpagemanage')">音乐年管理</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('joinpagemanage')">加入汉唐管理</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#tpgl">图片管理<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="tpgl" class="collapse">
                        <li>
                            <a href="javascript:;" onclick="$changetags('caseedit')">新增图片</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('caselist')">图片管理列表</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#spgl">视频管理 <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="spgl" class="collapse">
                        <li>
                            <a href="javascript:;" onclick="$changetags('videoedit')">新增视频</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('videolist')">视频管理列表</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#bqgl">标签管理<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="bqgl" class="collapse">
                        <li>
                            <a href="javascript:;" onclick="$changetags('tagsupload')">标签上传</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('tagsedit')">标签管理</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('brandedit')">品牌管理</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#xtgl">系统管理<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="xtgl" class="collapse">
                        <li>
                            <a href="javascript:;" onclick="$changetags('admininformation')">管理员信息</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('authoritymanage')">权限管理</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#yyn">音乐年<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="yyn" class="collapse">
                        <li>
                            <a href="javascript:;" onclick="$changetags('displayedit')">新增演出</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('displaylist')">演出管理列表</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#qzgl">求职管理<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="qzgl" class="collapse">
                        <li>
                            <a href="javascript:;" onclick="$changetags('adddepartment')">新增部门</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('addjob')">新增职位</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('departmentlist')">部门管理列表</a>
                        </li>
                        <li>
                            <a href="javascript:;" onclick="$changetags('joblist')">职位管理列表</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#shgl">审核管理<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="shgl" class="collapse">
                        <li>
                            <a href="javascript:;" onclick="$changetags('videoexaminelist')">视频审核列表</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper" style="height: auto">
        <div class="container-fluid">

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="manage/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="manage/js/bootstrap.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="manage/js/plugins/morris/raphael.min.js"></script>
<script src="manage/js/manage.js"></script>
<script src="manage/js/multi.js"></script>
<script src="manage/js/plugins/morris/morris.min.js"></script>
<script src="manage/js/plugins/morris/morris-data.js"></script>
</body>
</html>

<!DOCTYPE html>


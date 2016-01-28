<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/26
 * Time: 19:47
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

    <title>登录</title>
    <link href="manage/css/multi.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="manage/css/bootstrap.min.css" rel="stylesheet">
    <link href="manage/css/admin2.css" rel="stylesheet">

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

<div class="logintable">
<div class="loginimg"><img src="bootstrap/images/logo.png"></div>
<div class="loginform">
    <form id="addform" action="login/formsubmit" method="post" enctype="multipart/form-data">
       
                <div class="loginname"> <span id="logintitle">用户名</span>                                        
                <span id="logininput"><input type="text" name="username"></span>
                </div>
                <div class="loginpsw"><span id="logintitle">密码</span>
                <span id="logininput"><input type="password" name="password"></span>
                </div>
                <div class="loginbtn">
                <input type="submit" name="submit" value="登录" id="loginbtn1">
                <input type="submit" name="submit" value="注册" id="loginbtn2">
                </div>
    </form>
    </div>
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
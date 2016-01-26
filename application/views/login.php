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

<div>
    <form id="addform" action="login/formsubmit" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="login">
            </td>
            <td>
                <input type="submit" name="submit" value="register">
            </td>
        </tr>
    </table>
    </form>
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
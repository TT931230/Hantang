<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:15
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">管理员信息</div>
<div class="hpm-div">
    <div class="row adminfo-div">
        <label class="col-lg-2">管理员设置</label>
    </div>
    <div class="row adminfo-div">
        <label class="col-lg-2">账号</label>
        <input class="col-lg-2" type="text" id="username">
        <label class="col-lg-2">密码</label>
        <input class="col-lg-2" type="text" id="password">
    </div>

</div>
<div class="hpm-div">
    {privilige}
    <div class="row adminfo-div">
        <input type="checkbox" id="privilige{id}">
        <label class="col-lg-2">{privilige}</label>
    </div>
    {/privilige}
</div>
<div class="hpm-div">
    <div class="row adminfo-savebtn">
        <button onclick="$addadmin()" class="btn btn-default">保存</button>
    </div>
</div>

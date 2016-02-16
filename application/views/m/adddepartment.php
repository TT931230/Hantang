<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/27
 * Time: 19:30
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">新增部门</div>
<div class="hpm-div">
    <!--     <div class="row"><label class="col-lg-2">图片管理</label></div>-->
    <div class="ce-div">
        <div class="row">
            <label class="col-lg-2">部门名称</label>
            <input class="col-lg-2" type="text" id="department">
        </div>
    </div>
    <div class="ce-savebtn">
        <div class="row">
            <button onclick="$saveDepartment()">保存</button>
        </div>
    </div>
</div>
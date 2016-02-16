<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">图片管理</div>
<div class="hpm-div">
 <!--     <div class="row"><label class="col-lg-2">图片管理</label></div>-->  
    <div class="ce-div">
    <div class="row">
        <label class="col-lg-2">图片标题</label>
        <input class="col-lg-2" type="text" id="source_name">
    </div>
    </div>
    <div class="ce-div">
    <div class="row">
        <label class="col-lg-2">图片地址</label>
        <input class="col-lg-2" type="text" id="source_location">
    </div>
    </div>
    <div class="ce-div">
        <div class="row">
            <label class="col-lg-2">图片链接</label>
            <input class="col-lg-2" type="text" id="url">
        </div>
    </div>
    <div class="ce-div">
    <div class="row">
        <label class="col-lg-2">图片描述</label>
        <input type="textarea" style="width: 450px;height: 100px;" id="source_remark">
    </div>
    </div>
    <div class="ce-div">
        <div class="row">
            <label class="col-lg-2">语言类型</label>
            <select  class="col-lg-2" id="third_level">
                <option value="zn">中文</option>
                <option value="en">英文</option>
                <option value="fr">法文</option>
            </select>
        </div>
    </div>
    <div class="ce-savebtn">
    <div class="row">
        <button onclick="$saveImage()">保存</button>
    </div>
    </div>
</div>

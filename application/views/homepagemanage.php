<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/21
 * Time: 14:33
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body onload="$getselectedinfo('home')">
<script>
    $('.selectpicker').selectpicker();
</script>
<div class="managepagetitle">首页管理</div>
<div class="hpm-div">
    <div class="row"><label class="col-lg-2">首页A区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">播放图片</label>
            <select class="selectpicker bla bla bli" multiple data-live-search="true" id="source_name_a">
<!--        <select  class="col-lg-2 form-control selectpicker" multiple="multiple" id="source_name_a">-->
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
</div>

<div class="hpm-div">
    <div class="row"><label class="col-lg-2">首页B区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">播放图片</label>
        <select class="selectpicker bla bla bli" multiple data-live-search="true"  id="source_name_b">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
</div>

<div class="hpm-div">
    <div class="row"><label class="col-lg-2">首页C区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">播放图片</label>
        <select  class="selectpicker bla bla bli" multiple data-live-search="true"  id="source_name_c">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
</div>

<div class="hpm-div">
    <div class="row"><label class="col-lg-2">首页D区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">播放图片</label>
        <select  class="selectpicker bla bla bli" multiple data-live-search="true"  id="source_name_d">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
</div>
<div class="hpm-div">
<div class="row">
    <label class="col-lg-2">语言类型</label>
    <select  class="col-lg-2" id="third_level">
        <option value="zn">中文</option>
        <option value="en">英文</option>
        <option value="fr">法文</option>
    </select>
</div>
</div>
<div class="hpm-savebtn">
<div class="row">
    <button onclick="$saveArea('homearea')">保存</button>
    <button onclick="$previewarea('home')">预览</button>
    <button onclick="$submitarea('home')">发布</button>
</div>
</div>
<body>

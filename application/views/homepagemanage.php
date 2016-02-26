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

<div class="hpm-content">
    <div class="managepagetitle">首页管理</div>
    <div class="hpm-div">
        <label class="col-lg-2">所属页面</label>
        <div class="col-lg-2">首页</div>
    </div>

    <div class="hpm-div">
        <label class="col-lg-2">内容标题</label>
        <input id="hpm-content-title" class="col-lg-2" type="text">

    </div>
    <div class="hpm-div">
        <label class="col-lg-2">所属模块</label>
        <select class="selectpicker bla bla bli"  data-live-search="true" id="affiliatedmoudle">
            <!--        <select  class="col-lg-2 form-control selectpicker" multiple="multiple" id="source_name_a">-->
            {affiliatedmodules}
            <option value="">{name}</option>
            {/affiliatedmodules}
        </select>
    </div>
<!--    <div class="hpm-div">-->
<!--        <label class="col-lg-2">内容链接</label>-->
<!--        <input id="" class="col-lg-2" type="text">-->
<!---->
<!--    </div>-->
<!--    <div class="hpm-div">-->
<!--        <label class="col-lg-2">内容序列</label>-->
<!--        <select class="selectpicker bla bla bli" multiple data-live-search="true" id="source_name_a">-->
<!--            <!--        <select  class="col-lg-2 form-control selectpicker" multiple="multiple" id="source_name_a">-->-->
<!--            {img}-->
<!--            <option value="{id}">{source_name}</option>-->
<!--            {/img}-->
<!--        </select>-->
<!--    </div>-->
    <div class="hpm-div">
        <label class="col-lg-2">内容图片</label>
        <input id="hpm-contentimg" class="col-lg-2" type="file">
    </div>


    <div class="hpm-div">
        <label class="col-lg-2">内容描述</label>
        <input id="hpm-contentinfo" type="textarea" style="width: 450px;height: 100px">
    </div>
    <div class="hpm-save">
        <button class="btn btn-default" onclick="$savewebcontent('home')">保存</button>
    </div>
</div>





<div class="hpm-footer">
    <table>

    </table>
</div>










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

<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">视频管理</div>
<script>
    $('.selectpicker').selectpicker();
</script>
<div class="hpm-div">
 <!--   <div class="row"><label class="col-lg-2">视频管理</label></div> --> 
 <div class="ce-div">
    <div class="row">
        <label class="col-lg-2">视频标题</label>
        <input class="col-lg-2" type="text" id="source_name">
    </div>
</div> 
<div class="ce-div">
    <div class="row">
        <label class="col-lg-2">所属栏目</label>
        <select  class="col-lg-2" id="first_level">
            <option value="about">关于汉唐</option>
            <option value="platform">播放平台</option>
            <option value="ul">极致</option>
            <option value="awoe">问鼎世界</option>
            <option value="music">音乐年</option>
            <option value="join">加入汉唐</option>
        </select>
    </div>
</div>
<div class="ce-div">
    <div class="row">
        <label class="col-lg-2">视频封面</label>
        <!--<select  class="col-lg-2" id="videoimg">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>-->
        <input id="inputVideoImg" type="file" class="file" name="img">
    </div>
</div>
    <div class="ce-div">
        <div class="row">
            <label class="col-lg-2" style="
    margin-top: 25px;">视频地址</label>
            <input class="col-lg-2" type="text" id="source_location" style="margin-top: 25px;">
        </div>
    </div>
<div class="ce-div">
    <div class="row">
        <label class="col-lg-2">标签选择</label>
        <select  class="selectpicker bla bla bli" multiple data-live-search="true" id="keyword">
            {keyword}
            <option value="{id}">{keyword}</option>
            {/keyword}
        </select>
    </div>
 </div>
<!--<div class="ce-div">
    <div class="row">
        <label class="col-lg-2">视频系列</label>
        <input type="textarea" style="width: 450px;height: 100px;" id="index">
    </div>
</div>-->
 <div class="ce-div">
    <div class="row">
        <label class="col-lg-2">视频描述</label>
        <textarea id="hpm-contentinfo"  rows="4" cols="50"></textarea>
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
  <!--  <div class="ce-div">
        <input id="input-1" type="file" class="file">
        </div>-->
 <div class="ce-savebtn">
    <div class="row">
        <button onclick="$saveVideo()" class="btn btn-default">保存</button>
    </div>
</div>
</div>

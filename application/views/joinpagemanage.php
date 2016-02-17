<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/21
 * Time: 14:34
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">加入汉唐管理</div>
<div class="hpm-div">
    <div class="row"><label class="col-lg-2">加入汉唐A区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">播放视频</label>
        <select  class="col-lg-2" id="source_name_a">
            {video}
            <option value="{id}">{source_name}</option>
            {/video}
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
    <button onclick="$saveArea('joinarea')">保存</button>
    <button onclick="$previewarea('join')">预览</button>
    <button onclick="$submitarea('join')">发布</button>
</div>
</div>

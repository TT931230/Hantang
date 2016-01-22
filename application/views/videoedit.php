<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row"><label class="col-lg-2">视频管理</label></div>
    <div class="row">
        <label class="col-lg-2">视频标题</label>
        <input class="col-lg-2" type="text" id="source_name">
    </div>
    <div class="row">
        <label class="col-lg-2">排序</label>
        <input class="col-lg-2" type="number" id="sequence">
    </div>
    <div class="row">
        <label class="col-lg-2">视频封面</label>
        <select  class="col-lg-2" id="videoimg">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
        <label class="col-lg-2">视频地址</label>
        <input class="col-lg-2" type="text" id="source_location">
    </div>
    <div class="row">
        <label class="col-lg-2">标签选择</label>
        <select  class="col-lg-2 multiselect" multiple="multiple" id="keyword">
            {keyword}
            <option value="{id}">{keyword}</option>
            {/keyword}
        </select>
    </div>
    <div class="row">
        <label class="col-lg-2">视频描述</label>
        <input type="textarea" style="width: 450px;height: 100px;" id="source_remark">
    </div>
    <div class="row">
        <label class="col-lg-2">语言类型</label>
        <select  class="col-lg-2" id="third_level">
            <option value="zn">中文</option>
            <option value="en">英文</option>
            <option value="fr">法文</option>
        </select>
    </div>
    <div class="row">
        <button onclick="$saveVideo()" class="btn btn-default">保存</button>
    </div>
</div>
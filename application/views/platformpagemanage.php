<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/21
 * Time: 14:33
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row"><label class="col-lg-2">播放平台A区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">区域名称</label>
        <input class="col-lg-2" type="text" id="area_name_a">
    </div>
    <div class="row">
        <label class="col-lg-2">播放视频</label>
        <select  class="col-lg-2 multiselect" multiple="multiple" id="source_name_a">
            {video}
            <option value="{id}">{source_name}</option>
            {/video}
        </select>
    </div>
    <div class="row">
        <input type="checkbox" id="is_hide_a">
        <label class="col-lg-2">是否隐藏</label>
    </div>
    <div class="row">
        <button onclick="$saveArea('platformareaa')">保存</button>
    </div>
</div>
<hr>
<div>
    <div class="row"><label class="col-lg-2">播放平台B区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">区域名称</label>
        <input class="col-lg-2" type="text" id="area_name_b">
    </div>
    <div class="row">
        <label class="col-lg-2">播放图片</label>
        <select  class="col-lg-2" id="source_name_b">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
    <div class="row">
        <input type="checkbox" id="is_hide_b">
        <label class="col-lg-2">是否隐藏</label>
    </div>
    <div class="row">
        <button onclick="$saveArea('platformareab')">保存</button>
    </div>
</div>
<hr>
<div>
    <div class="row"><label class="col-lg-2">播放平台C区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">区域名称</label>
        <input class="col-lg-2" type="text" id="area_name_c">
    </div>
    <div class="row">
        <label class="col-lg-2">播放图片</label>
        <select  class="col-lg-2" id="source_name_c">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
    <div class="row">
        <input type="checkbox" id="is_hide_c">
        <label class="col-lg-2">是否隐藏</label>
    </div>
    <div class="row">
        <button onclick="$saveArea('platformareac')">保存</button>
    </div>
</div>
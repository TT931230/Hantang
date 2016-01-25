<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/21
 * Time: 14:33
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row"><label class="col-lg-2">关于汉唐A区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">播放图片</label>
        <select  class="col-lg-2" id="source_name_a">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
    <div class="row">
        <input type="checkbox" id="is_hide_a">
        <label class="col-lg-2">是否隐藏</label>
    </div>
</div>
<hr>
<div>
    <div class="row"><label class="col-lg-2">关于汉唐B区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">播放视频</label>
        <select  class="col-lg-2" id="source_name_b">
            {video}
            <option value="{id}">{source_name}</option>
            {/video}
        </select>
    </div>
    <div class="row">
        <input type="checkbox" id="is_hide_b">
        <label class="col-lg-2">是否隐藏</label>
    </div>
</div>
<hr>
<div>
    <div class="row"><label class="col-lg-2">关于汉唐C区域管理</label></div>
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
</div>
<hr>
<div class="row">
    <label class="col-lg-2">语言类型</label>
    <select  class="col-lg-2" id="third_level">
        <option value="zn">中文</option>
        <option value="en">英文</option>
        <option value="fr">法文</option>
    </select>
</div>
<hr>
<div class="row">
    <button onclick="$saveArea('aboutarea')">保存</button>
</div>
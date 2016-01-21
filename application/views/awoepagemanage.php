<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/21
 * Time: 14:34
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row"><label class="col-lg-2">问鼎世界A区域管理</label></div>
    <div class="row">
        <label class="col-lg-2">区域名称</label>
        <input class="col-lg-2" type="text" id="area_name_a">
    </div>
    <div class="row">
        <label class="col-lg-2">播放图片</label>
        <select  class="col-lg-2 multiselect" multiple="multiple" id="source_name_a">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
    <div class="row">
        <input type="checkbox" id="is_hide_a">
        <label class="col-lg-2">是否隐藏</label>
    </div>
    <div class="row">
        <input type="checkbox" id="is_auto_a">
        <label class="col-lg-2">是否自动轮播</label>
    </div>
    <div class="row">
        <button onclick="$saveArea('awoeareaa')">保存</button>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:16
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row"><label class="col-lg-2">音乐年管理</label></div>
    <div class="row">
        <label class="col-lg-2">标题</label>
        <input class="col-lg-2" type="text" id="source_name">
    </div>
    <div class="row">
        <label class="col-lg-2">表演者</label>
        <input class="col-lg-2" type="text" id="keyword">
    </div>
    <div class="row">
        <label class="col-lg-2">演出季节</label><input class="col-lg-2" type="text" id="keyword_season">
        <label class="col-lg-2">演出时间</label><input class="col-lg-2" type="text" id="keyword_time">
        <label class="col-lg-2">排序</label><input class="col-lg-2" type="text" id="sequence">
    </div>
    <div class="row">
        <label class="col-lg-2">顶部横幅</label>
        <select  class="col-lg-2" id="menu">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
    <div class="row">
        <label class="col-lg-2">演出介绍</label><input class="col-lg-2" type="text" id="source_remark">
    </div>
    <div class="row">
        <label class="col-lg-2">表演者介绍</label><input class="col-lg-2" type="text" id="keyword_remark">
    </div>
    <div class="row">
        <button onclick="$saveMusic()">保存</button>
    </div>
</div>
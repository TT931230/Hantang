<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:16
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">新增演出</div>
<div class="hpm-div">
  <!-- <div class="row"><label class="col-lg-2">音乐年管理</label></div> -->
    <div class="row">
        <label class="col-lg-2 de-title">演出视频</label>
        <select  class="col-lg-2" id="musicid">
            {musicvideo}
            <option value="{id}">{source_name}</option>
            {/musicvideo}
        </select>
    </div>
    <div class="ce-div">
    <div class="row">
        <label class="col-lg-2 de-title">表演者</label>
        <select  class="col-lg-2" id="showers">
            {showers}
            <option value="{id}">{keyword}</option>
            {/showers}
        </select>
    </div>
    </div>
    <div class="ce-div">
    <div class="row">
        <label class="col-lg-2 de-title">演出时间</label>
        <select  class="col-lg-2" id="displayseason">
            {seasons}
            <option value="{id}">{keyword}</option>
            {/seasons}
        </select>
    </div>
    </div>
    <div class="ce-div">
    </div>
    <div class="de-savebtn">
    <div class="row">
        <button onclick="$saveMusic()">保存</button>
    </div>
    </div>
</div>

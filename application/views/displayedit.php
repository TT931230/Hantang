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
    <div class="ce-div">
    </div>
    <div class="ce-div">
    <div class="row">
        <label class="col-lg-2 de-title">表演者</label>
        {displayer}
        <input class="col-lg-2" type="text" id="keyword">
    </div>
    </div>
    <div class="ce-div">
    <div class="row">
        <label class="col-lg-2 de-title">演出时间</label>
        <select  class="col-lg-2" id="menu">
            {displaytime}
            <option value="{id}">{source_name}</option>
            {/displaytime}
        </select>
    </div>
    </div>
    <div class="ce-div">
    </div>
    <div class="de-savebtn">
    <div class="row">
        <button onclick="$updateMusic()">保存</button>
    </div>
    </div>
</div>

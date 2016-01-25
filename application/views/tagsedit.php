<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">品牌管理</div>
<div class="te-div">
<!--    <div class="row"><label class="col-lg-2">品牌管理</label></div>-->
    <div class="row">
        <label class="col-lg-2 te-title">品牌名称</label>
        <input class="col-lg-2" type="text" id="keyword">
        <label class="col-lg-2 te-title">品牌描述</label>
        <input class="col-lg-2 " type="text" id="keyword_remark">
        <label class="col-lg-2 te-title">品牌Logo</label>
        <select  class="col-lg-2" id="source_name">
            {img}
            <option value="{id}">{source_name}</option>
            {/img}
        </select>
    </div>
    <div class="te-savebtn">
    <div class="row">
        <button onclick="$queryLogo()" class="btn btn-default">查询</button>
        <button onclick="$saveLogo()" class="btn btn-default">保存</button>
    </div>
    </div>
</div>
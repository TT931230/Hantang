<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div>
    <div class="row"><label class="col-lg-2">图片管理</label></div>
    <div class="row">
        <label class="col-lg-2">图片标题</label>
        <input class="col-lg-2" type="text" id="source_name">
    </div>
    <div class="row">
        <label class="col-lg-2">图片地址</label>
        <input class="col-lg-2" type="text" id="source_location">
    </div>
    <div class="row">
        <label class="col-lg-2">图片描述</label>
        <input type="textarea" style="width: 450px;height: 100px;" id="source_remark">
    </div>
    <div class="row">
        <button onclick="$saveImage()">保存</button>
    </div>
</div>
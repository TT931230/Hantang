<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/21
 * Time: 14:34
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<script>
    $('.selectpicker').selectpicker();
</script>
<div class="hpm-content">
    <div class="managepagetitle">国际音乐年管理</div>
    <div class="hpm-div">
        <label class="col-lg-2">所属页面</label>
        <div class="col-lg-2">国际音乐年</div>
    </div>

    <div class="hpm-div">
        <label class="col-lg-2">内容标题</label>
        <input id="hpm-content-title" class="col-lg-2" type="text">

    </div>
    <div class="hpm-div">
        <label class="col-lg-2">所属模块</label>
        <select class="selectpicker bla bla bli"  data-live-search="true" id="affiliatedmoudle">     <!--        <select  class="col-lg-2 form-control selectpicker" multiple="multiple" id="source_name_a">-->
            {affiliatedmodules}
            <option value="">{name}</option>
            {/affiliatedmodules}
        </select>
    </div>
    <div class="hpm-div">
        <label class="col-lg-2">语言类型</label>
        <select class="selectpicker bla bla bli"  data-live-search="true" id="hpmhomelang">
            <option value="">中文</option>
            <option value="">English</option>
            <option value="">Français</option>
        </select>
    </div>
    <div class="hpm-div">
        <label class="col-lg-2">视频链接</label>
        <input id="hpm-content-video" class="col-lg-2" type="text">

    </div>

    <div class="hpm-div">
        <label class="col-lg-2">内容图片</label>
        <input id="hpminputimg" name="files" class="col-lg-2" type="file">
    </div>


    <div class="hpm-div">
        <label class="col-lg-2">内容描述</label>
        <input id="hpm-contentinfo" type="textarea" style="width: 450px;height: 100px">
    </div>
    <div class="hpm-save">
        <button class="btn btn-default" onclick="$savepageimg('music')">保存</button>
    </div>
</div>

<div class="hpm-footer">
    <table>
        <tr>
            <td class="hpm-td0">
                <input type="checkbox" name="test" value="" onclick="if(this.checked==true) { checkAll(); } else { clearAll(); }">全选
            </td>
            <td class="hpm-td1">图片名称</td>
            <td class="hpm-td2">内容描述</td>
            <td class="hpm-td3">内容图片</td>
            <td class="hpm-td4">所属模块</td>
            <td class="hpm-td4">语言类型</td>
            <td class="hpm-td5">
                <a href="javascript:;" onclick="$savehpmselected('music')" class="cl-imgeditbtn">保存所选</a>
            </td>
            <td class="hpm-td6">
                <a href="javascript:;" onclick="$delhpmselected('music')" class="cl-imgeditbtn">删除所选</a>
            </td>
        </tr>
        {relatedimg}
        <tr>
            <td id="hpm-check" class="vl-check"><input type="checkbox" name="check" value=""></td>
            <td id="" class="hpm-td1">
                <input type="text" value="{source_name}" name="source_name" id="{source_id}_name" class="">
            </td>
            <td id="" class="hpm-td2">
                <input type="text" value="{source_remark}" name="source_ramark" id="{source_id}_remark" class="">
            </td>
            <td id="{source_id}_img" class="hpm-td3">
                <img src="{source_location}" style="width:96px;height: 54px;">
            </td>
            <td id="{source_id}_area" class="hpm-td4">
                {second_level}
            </td>
            <td id="{source_id}_lang" class="hpm-td4">
                {third_level}
            </td>
            <td id="{source_id}_edit1" class="hpm-td5">
                <a href="javascript:;" onclick="$savhpmsingleimg('{source_id}','music') " class="cl-imgeditbtn">保存</a>
            </td>
            <td id="{source_id}_edit2" class="hpm-td6">
                <a href="javascript:;" onclick="$delhpmsingleimg('{source_id}','music')" class="cl-imgeditbtn">删除</a>
            </td>
        </tr>
        {/relatedimg}
    </table>
</div>
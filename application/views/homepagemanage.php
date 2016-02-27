<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/21
 * Time: 14:33
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body onload="$getselectedinfo('home')">
<script>
    $('.selectpicker').selectpicker();
</script>

<div class="hpm-content">
    <div class="managepagetitle">首页管理</div>
    <div class="hpm-div">
        <label class="col-lg-2">所属页面</label>
        <div class="col-lg-2">首页</div>
    </div>

    <div class="hpm-div">
        <label class="col-lg-2">内容标题</label>
        <input id="hpm-content-title" class="col-lg-2" type="text">

    </div>
    <div class="hpm-div">
        <label class="col-lg-2">所属模块</label>
        <select class="selectpicker bla bla bli"  data-live-search="true" id="affiliatedmoudle">
            <!--        <select  class="col-lg-2 form-control selectpicker" multiple="multiple" id="source_name_a">-->
            {affiliatedmodules}
            <option value="">{name}</option>
            {/affiliatedmodules}
        </select>
    </div>
<!--    <div class="hpm-div">-->
<!--        <label class="col-lg-2">内容链接</label>-->
<!--        <input id="" class="col-lg-2" type="text">-->
<!---->
<!--    </div>-->
<!--    <div class="hpm-div">-->
<!--        <label class="col-lg-2">内容序列</label>-->
<!--        <select class="selectpicker bla bla bli" multiple data-live-search="true" id="source_name_a">-->
<!--            <!--        <select  class="col-lg-2 form-control selectpicker" multiple="multiple" id="source_name_a">-->-->
<!--            {img}-->
<!--            <option value="{id}">{source_name}</option>-->
<!--            {/img}-->
<!--        </select>-->
<!--    </div>-->
    <div class="hpm-div">
        <label class="col-lg-2">内容图片</label>
        <input id="hpminputimg" name="files" class="col-lg-2" type="file">
    </div>


    <div class="hpm-div">
        <label class="col-lg-2">内容描述</label>
        <input id="hpm-contentinfo" type="textarea" style="width: 450px;height: 100px">
    </div>
    <div class="hpm-save">
        <button class="btn btn-default" onclick="$savepageimg('home')">保存</button>
    </div>
</div>





<div class="hpm-footer">
    <table>
        <tr>
            <td class="hpm-td0">
                <input type="checkbox" name="test" value="" onclick="if(this.checked==true) { checkAll(); } else { clearAll(); }">全选
            </td>
            <td class="hpm-td1">图片内容</td>
            <td class="hpm-td2">内容描述</td>
            <td class="hpm-td3">内容图片</td>
            <td class="hpm-td4">所属模块</td>
            <td class="hpm-td5">
                <a href="javascript:;" onclick="" class="cl-imgeditbtn">保存所选</a>
            </td>
            <td class="hpm-td6">
                <a href="javascript:;" onclick="" class="cl-imgeditbtn">删除所选</a>
            </td>
        </tr>
        {videolists}
        <tr>
            <td id="hpm-check" class="vl-check"><input type="checkbox" name="check" value=""></td>
            <td id="{imgid}" class="vl-imgname">{source_name}</td>
            <td id="{imgid}_url" class="vl-imgadd">
                {source_location}
            </td>
            <td id="{source_id}_first" class="vl-imgfirst">
                {first_level}
            </td>
            <td id="{source_id}_lang" class="vl-imglang">
                {language}
            </td>
            <td class="vl-imgseq">
                <input type="number" value="{sequence}" name="sequence" id="{imgid}_sequence" class="vl-imgseqinput">
            </td>
            <td id="{imgid}_img" class="vl-imgmini">
                <img src="{linkimg}" style="width:96px;height: 54px;">
            </td>
            <td class="vl-imgseq">
                <input type="text" value="{index}" name="sequence" id="{imgid}_index" class="vl-imgseqinput">
            </td>
            <td id="{imgid}_edit" class="vl-imgedit">
                <a href="javascript:;" onclick="$savesinglevideo('{imgid}') " class="cl-imgeditbtn">保存</a>

            </td>
            <td id="{imgid}_edit" class="vl-imgedits">
                <a href="javascript:;" onclick="$deletesinglevideo('{source_id}')" class="cl-imgeditbtn">删除</a>
            </td>
        </tr>
        {/videolists}
    </table>
</div>













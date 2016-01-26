<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2016/1/19
 * Time: 15:12
 */defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="managepagetitle">图片列表</div>
<div>
 <!--   <div class="row">
        <label class="col-lg-2">图片明细列表</label>
    </div>
     -->
    <div class="row cl-div">
        <label class="col-lg-2 cl-title">图片标题</label>
        <input class="col-lg-2 cl-input" type="text" id="source_name">
        <button onclick="$queryImage()" class="btn btn-default cl-querybtn">查询</button>
    </div>
 <!--    <div class="row">
        <button onclick="$queryImage()" class="btn btn-default">查询</button>
    </div>--> 
    <div id="caselistshow" class="cl-table">
        <table>
            <tr>
                <td>图片名称</td>
                <td>图片地址</td>
                <td>图片类型</td>
                <td>顺序</td>
                <td>图片缩略图</td>
                <td>编辑</td>
            </tr>
            {imagelists}
            <tr>
                <td id="{source_id}" class="cl-imgname">{source_name}</td>
                <td id="{source_id}_url" class="cl-imgadd">
                    {source_location}
                </td>
                <td class="cl-imgtype">
                    {imgtype}
                </td>
                <td class="cl-imgseq">
                    <input type="number" value="{sequence}" name="sequence" id="{source_id}_sequence" class="cl-imgseqinput">
                </td>
                <td id="{source_id}_img" class="cl-imgmini">
                    <img src="{source_location}" style="width:96px;height: 54px;">
                </td>
                <td id="{source_id}_edit" class="cl-imgedit">
                    <a href="javascript:;" onclick="$savesingleimg('{source_id}')" class="cl-imgeditbtn">保存</a>
                    <a href="javascript:;" onclick="$deletesingleimg('{source_id}')" class="cl-imgeditbtn">删除</a>
                </td>
            </tr>
            {/imagelists}
        </table>
    </div>
</div>

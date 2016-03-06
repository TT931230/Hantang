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
    <label>所属类别：</label>
    <select id="imglevel">
        <option value=""></option>
        <option value="ul">极致</option>
        <option value="awoe">问鼎世界</option>
        <option value="home">首页</option>
        <option value="music">音乐年</option>
        <option value="platform">播出平台</option>
        <option value="partner">合作伙伴</option>
        <option value="logoimage">汉唐logo</option>
        <option value="ullogo">极致logo</option>
        <option value="awoelogo">问鼎世界logo</option>
        <option value="musiclogo">音乐年logo</option>
        <option value="displayer">表演者</option>
    </select>
    <label>图片名称：</label>
    <input type="text" id="imgname">
<!--<div class="row">
    <button onclick="$queryImage()" class="btn btn-default">查询</button>
</div>-->
    <div id="caselistshow" class="cl-table">
        <table>
            <tr>
                <td class="vl-title0">
                    <input type="checkbox" name="test" value="" onclick="if(this.checked==true) { checkAll(); } else { clearAll(); }">全选
                </td>
                <td>图片名称</td>
                <td>图片地址</td>
                <td>图片类型</td>
                <td>顺序</td>
                <td>语言</td>
                <td>图片缩略图</td>
                <td>编辑</td>
                <td class="vl-title9">
                    <a href="javascript:;" onclick="$deleteselectedimg()" class="cl-imgeditbtn">删除所选</a>
                </td>
            </tr>
            {imagelists}
            <tr>
                <td id="vl-check" class="vl-check"><input type="checkbox" name="check" value=""></td>
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
                <td id="{source_id}_lang" class="vl-imglang">
                    {language}
                </td>
                <td id="{source_id}_img" class="cl-imgmini">
                    <img src="{source_location}" style="width:96px;height: 54px;">
                </td>
                <td id="{source_id}_edit" class="cl-imgedit">
                    <a href="javascript:;" onclick="$savesingleimg('{source_id}')" class="cl-imgeditbtn">保存</a>
                </td>
                <td id="{source_id}_edit" class="cl-imgedit1">
                    <a href="javascript:;" onclick="$deletesingleimg('{source_id}')" class="cl-imgeditbtn">删除</a>
                </td>
            </tr>
            {/imagelists}
        </table>
    </div>
</div>
